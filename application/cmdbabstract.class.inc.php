<?php
require_once('../core/cmdbobject.class.inc.php');
require_once('../application/utils.inc.php');
require_once('../application/applicationcontext.class.inc.php');
require_once('../application/ui.linkswidget.class.inc.php');
////////////////////////////////////////////////////////////////////////////////////
/**
* Abstract class that implements some common and useful methods for displaying
* the objects
*/
////////////////////////////////////////////////////////////////////////////////////
abstract class cmdbAbstractObject extends CMDBObject
{
	
	public static function GetUIPage()
	{
		return './UI.php';
	}
	
	public static function ComputeUIPage($sClass)
	{
		static $aUIPagesCache = array(); // Cache to store the php page used to display each class of object
		if (!isset($aUIPagesCache[$sClass]))
		{
			$UIPage = false;
			if (is_callable("$sClass::GetUIPage"))
			{
				$UIPage = eval("return $sClass::GetUIPage();"); // May return false in case of error
			}
			$aUIPagesCache[$sClass] = $UIPage === false ? './UI.php' : $UIPage;
		}
		$sPage = $aUIPagesCache[$sClass];
		return $sPage;
	}

	protected static function MakeHyperLink($sObjClass, $sObjKey, $aAvailableFields)
	{
		if ($sObjKey == 0) return '<em>undefined</em>';

		$oAppContext = new ApplicationContext();	
		$sExtClassNameAtt = MetaModel::GetNameAttributeCode($sObjClass);
		$sPage = self::ComputeUIPage($sObjClass);
		// Use the "name" of the target class as the label of the hyperlink
		// unless it's not available in the external attributes...
		if (isset($aAvailableFields[$sExtClassNameAtt]))
		{
			$sLabel = $aAvailableFields[$sExtClassNameAtt];
		}
		else
		{
			$sLabel = implode(' / ', $aAvailableFields);
		}
		// Safety belt
		//
		if (empty($sLabel))
		{
			// Developer's note:
			// This is doing the job for you, but that is just there in case
			// the external fields associated to the external key are blanks
			// The ultimate solution will be to query the name automatically
			// and independantly from the data model (automatic external field)
			// AND make the name be a mandatory field
			//
			$sObject = MetaModel::GetObject($sObjClass, $sObjKey);
			$sLabel = $sObject->GetDisplayName();
		}
		// Safety net
		//
		if (empty($sLabel))
		{
			$sLabel = MetaModel::GetName($sObjClass)." #$sObjKey";
		}
		$sHint = MetaModel::GetName($sObjClass)."::$sObjKey";
		return "<a href=\"$sPage?operation=details&class=$sObjClass&id=$sObjKey&".$oAppContext->GetForLink()."\" title=\"$sHint\">$sLabel</a>";
	}

	public function GetDisplayValue($sAttCode)
	{
		$sDisplayValue = "";
		$sStateAttCode = MetaModel::GetStateAttributeCode(get_class($this));
		if ($sStateAttCode == $sAttCode)
		{
			$aStates = MetaModel::EnumStates(get_class($this));
			$sDisplayValue = $aStates[$this->Get($sAttCode)]['label'];
		}
		else
		{
			$oAtt = MetaModel::GetAttributeDef(get_class($this), $sAttCode);
			
			if ($oAtt->IsExternalKey())
			{
				// retrieve the "external fields" linked to this external key
				$sTargetClass = $oAtt->GetTargetClass();
				$aAvailableFields = array();
				foreach (MetaModel::GetExternalFields(get_class($this), $sAttCode) as $oExtField)
				{
					$aAvailableFields[$oExtField->GetExtAttCode()] = $oExtField->GetAsHTML($this->Get($oExtField->GetCode()));
				}
				$sExtClassNameAtt = MetaModel::GetNameAttributeCode($sTargetClass);
				// Use the "name" of the target class as the label of the hyperlink
				// unless it's not available in the external fields...
				if (isset($aAvailableFields[$sExtClassNameAtt]))
				{
					$sDisplayValue = $aAvailableFields[$sExtClassNameAtt];
				}
				else
				{
					$sDisplayValue = implode(' / ', $aAvailableFields);
				}
			}
			else
			{
				$sDisplayValue = $this->GetAsHTML($sAttCode);
			}
		}
		return $sDisplayValue;
	}

	function DisplayBareHeader(web_page $oPage)
	{
		// Standard Header with name, actions menu and history block
		//
		$oPage->add("<div class=\"page_header\">\n");

		// action menu
		$oSingletonFilter = new DBObjectSearch(get_class($this));
		$oSingletonFilter->AddCondition('pkey', array($this->GetKey()));
		$oBlock = new MenuBlock($oSingletonFilter, 'popup', false);
		$oBlock->Display($oPage, -1);

		$oPage->add("<h1>".MetaModel::GetName(get_class($this)).": <span class=\"hilite\">".$this->GetDisplayName()."</span></h1>\n");

		// history block (with toggle)
		$oHistoryFilter = new DBObjectSearch('CMDBChangeOpSetAttribute');
		$oHistoryFilter->AddCondition('objkey', $this->GetKey());
		$oBlock = new HistoryBlock($oHistoryFilter, 'toggle', false);
		$oBlock->Display($oPage, -1);

		$oPage->add("</div>\n");
	}

	function DisplayBareDetails(web_page $oPage)
	{
		$oPage->add($this->GetBareDetails($oPage));		
	}

	function DisplayBareRelations(web_page $oPage)
	{
		// Related objects
		$oPage->AddTabContainer('Related Objects');
		$oPage->SetCurrentTabContainer('Related Objects');
		foreach(MetaModel::ListAttributeDefs(get_class($this)) as $sAttCode=>$oAttDef)
		{
			if ((get_class($oAttDef) == 'AttributeLinkedSetIndirect') || (get_class($oAttDef) == 'AttributeLinkedSet'))
			{
				$oPage->SetCurrentTab($oAttDef->GetLabel());
				$oPage->p($oAttDef->GetDescription());
				
				if (get_class($oAttDef) == 'AttributeLinkedSet')
				{
					$sTargetClass = $oAttDef->GetLinkedClass();
					$oFilter = new DBObjectSearch($sTargetClass);
					$oFilter->AddCondition($oAttDef->GetExtKeyToMe(), $this->GetKey()); // @@@ condition has same name as field ??

					$oBlock = new DisplayBlock($oFilter, 'list', false);
					$oBlock->Display($oPage, 0);
				}
				else // get_class($oAttDef) == 'AttributeLinkedSetIndirect'
				{
					$sLinkClass = $oAttDef->GetLinkedClass();
					// Transform the DBObjectSet into a CMBDObjectSet !!!
					$aLinkedObjects = $this->Get($sAttCode)->ToArray(false);
					if (count($aLinkedObjects) > 0)
					{
						$oSet = CMDBObjectSet::FromArray($sLinkClass, $aLinkedObjects);
						$aParams = array(
							'link_attr' => $oAttDef->GetExtKeyToMe(),
							'object_id' => $this->GetKey(),
							'target_attr' => $oAttDef->GetExtKeyToRemote(),
						); 
						self::DisplaySet($oPage, $oSet, $aParams);
					}
				}
			}
		}
		$oPage->SetCurrentTab('');
	}

	function GetDisplayName()
	{
		return $this->GetAsHTML(MetaModel::GetNameAttributeCode(get_class($this)));
	}

	function GetBareDetails(web_page $oPage)
	{
		$sHtml = '';
		$oAppContext = new ApplicationContext();	
		$sStateAttCode = MetaModel::GetStateAttributeCode(get_class($this));
		$aDetails = array();
		$sClass = get_class($this);
		$aList = MetaModel::GetZListItems($sClass, 'details');

		foreach($aList as $sAttCode)
		{
			$iFlags = $this->GetAttributeFlags($sAttCode);
			if ( ($iFlags & OPT_ATT_HIDDEN) == 0)
			{
				// The field is visible in the current state of the object
				if ($sStateAttCode == $sAttCode)
				{
					// Special display for the 'state' attribute itself
					$sDisplayValue = $this->GetState();
				}
				else
				{
					$sDisplayValue = $this->GetAsHTML($sAttCode);
				}
				$aDetails[] = array('label' => MetaModel::GetLabel($sClass, $sAttCode), 'value' => $sDisplayValue);
			}
		}
		$sHtml .= $oPage->GetDetails($aDetails);
		return $sHtml;		
	}

	
	function DisplayDetails(web_page $oPage)
	{
		$sTemplate = Utils::ReadFromFile(MetaModel::GetDisplayTemplate(get_class($this)));
		if (!empty($sTemplate))
		{
			$oTemplate = new DisplayTemplate($sTemplate);
			$oTemplate->Render($oPage, array('class_name'=> MetaModel::GetName(get_class($this)),'class'=> get_class($this),'pkey'=> $this->GetKey(), 'name' => $this->GetName()));
		}
		else
		{
			// Object's details
			// template not found display the object using the *old style*
			$this->DisplayBareHeader($oPage);
			$this->DisplayBareDetails($oPage);
			$this->DisplayBareRelations($oPage);
		}
	}
	
	function DisplayPreview(web_page $oPage)
	{
		$aDetails = array();
		$sClass = get_class($this);
		$aList = MetaModel::GetZListItems($sClass, 'preview');
		foreach($aList as $sAttCode)
		{
			$aDetails[] = array('label' => MetaModel::GetLabel($sClass, $sAttCode), 'value' =>$this->GetAsHTML($sAttCode));
		}
		$oPage->details($aDetails);		
	}
	
	// Comment by Rom: this helper may be used to display objects of class DBObject
	//                 -> I am using this to display the changes history
	public static function DisplaySet(web_page $oPage, CMDBObjectSet $oSet, $aExtraParams = array())
	{
		$oPage->add(self::GetDisplaySet($oPage, $oSet, $aExtraParams));
	}
	
	//public static function GetDisplaySet(web_page $oPage, CMDBObjectSet $oSet, $sLinkageAttribute = '', $bDisplayMenu = true, $bSelectMode = false)
	public static function GetDisplaySet(web_page $oPage, CMDBObjectSet $oSet, $aExtraParams = array())
	{
		static $iListId = 0;
		$iListId++;
		
		// Initialize and check the parameters
		$sLinkageAttribute = isset($aExtraParams['link_attr']) ? $aExtraParams['link_attr'] : '';
		$iLinkedObjectId = isset($aExtraParams['object_id']) ? $aExtraParams['object_id'] : 0;
		$sTargetAttr = isset($aExtraParams['target_attr']) ? $aExtraParams['target_attr'] : '';
		if (!empty($sLinkageAttribute))
		{
			if($iLinkedObjectId == 0)
			{
				// if 'links' mode is requested the id of the object to link to must be specified
				throw new ApplicationException("Parameter object_id is mandatory when link_attr is specified. Check the definition of the display template.");
			}
			if($sTargetAttr == '')
			{
				// if 'links' mode is requested the d of the object to link to must be specified
				throw new ApplicationException("Parameter target_attr is mandatory when link_attr is specified. Check the definition of the display template.");
			}
		}
		$bDisplayMenu = isset($aExtraParams['menu']) ? $aExtraParams['menu'] == true : true;
		$bSelectMode = isset($aExtraParams['selection_mode']) ? $aExtraParams['selection_mode'] == true : false;
		
		$sHtml = '';
		$oAppContext = new ApplicationContext();
		$sClassName = $oSet->GetFilter()->GetClass();
		$aAttribs = array();
		$aList = MetaModel::GetZListItems($sClassName, 'list');
		if (!empty($sLinkageAttribute))
		{
			// The set to display is in fact a set of links between the object specified in the $sLinkageAttribute
			// and other objects...
			// The display will then group all the attributes related to the link itself:
			// | Link_attr1 | link_attr2 | ... || Object_attr1 | Object_attr2 | Object_attr3 | .. | Object_attr_n |
			$aAttDefs = MetaModel::ListAttributeDefs($sClassName);
			assert(isset($aAttDefs[$sLinkageAttribute]));
			$oAttDef = $aAttDefs[$sLinkageAttribute];
			assert($oAttDef->IsExternalKey());
			// First display all the attributes specific to the link record
			foreach($aList as $sLinkAttCode)
			{
				$oLinkAttDef = $aAttDefs[$sLinkAttCode];
				if ( (!$oLinkAttDef->IsExternalKey()) && (!$oLinkAttDef->IsExternalField()) )
				{
					$aDisplayList[] = $sLinkAttCode;
				}
			}
			// Then display all the attributes neither specific to the link record nor to the 'linkage' object (because the latter are constant)
			foreach($aList as $sLinkAttCode)
			{
				$oLinkAttDef = $aAttDefs[$sLinkAttCode];
				if (($oLinkAttDef->IsExternalKey() && ($sLinkAttCode != $sLinkageAttribute))
					|| ($oLinkAttDef->IsExternalField() && ($oLinkAttDef->GetKeyAttCode()!=$sLinkageAttribute)) )
				{
					$aDisplayList[] = $sLinkAttCode;
				}
			}
			// First display all the attributes specific to the link
			// Then display all the attributes linked to the other end of the relationship
			$aList = $aDisplayList;
		}
		foreach($aList as $sAttCode)
		{
			if ($bSelectMode)
			{
				$aAttribs['form::select'] = array('label' => "<input type=\"checkbox\" onChange=\"var value = this.checked; $('.selectList{$iListId}').each( function() { this.checked = value; } );\"></input>", 'description' => 'Select / Deselect All');
			}
			$aAttribs['key'] = array('label' => '', 'description' => 'Click to display');
			$aAttribs[$sAttCode] = array('label' => MetaModel::GetLabel($sClassName, $sAttCode), 'description' => MetaModel::GetDescription($sClassName, $sAttCode));
		}
		$aValues = array();
		$oSet->Seek(0);
		while ($oObj = $oSet->Fetch())
		{
			$aRow['key'] = $oObj->GetKey();
			if ($bSelectMode)
			{
				$aRow['form::select'] = "<input type=\"checkBox\" class=\"selectList{$iListId}\" name=\"selectObject[]\" value=\"".$oObj->GetKey()."\"></input>";
			}
			$aRow['key'] = $oObj->GetKey();
			foreach($aList as $sAttCode)
			{
				$aRow[$sAttCode] = $oObj->GetAsHTML($sAttCode);
			}
			$aValues[] = $aRow;
		}
		$oMenuBlock = new MenuBlock($oSet->GetFilter());
		$sHtml .= '<table class="listContainer">';
		$sColspan = '';
		if ($bDisplayMenu)
		{
			$sColspan = 'colspan="2"';
			$aMenuExtraParams = array();
			if (!empty($sLinkageAttribute))
			{
				//$aMenuExtraParams['linkage'] = $sLinkageAttribute;
				$aMenuExtraParams = $aExtraParams;
			}
			$sHtml .= '<tr class="containerHeader"><td>&nbsp;'.$oSet->Count().' object(s)</td><td>';
			$sHtml .= $oMenuBlock->GetRenderContent($oPage, $aMenuExtraParams);
			$sHtml .= '</td></tr>';
		}
		$sHtml .= "<tr><td $sColspan>";
		$sHtml .= $oPage->GetTable($aAttribs, $aValues, array('class'=>$sClassName, 'filter'=>$oSet->GetFilter()->serialize(), 'preview' => true));
		$sHtml .= '</td></tr>';
		$sHtml .= '</table>';
		return $sHtml;
	}
	
	static function DisplaySetAsCSV(web_page $oPage, CMDBObjectSet $oSet, $aParams = array())
	{
		$oPage->add(self::GetSetAsCSV($oSet, $aParams));
	}
	
	static function GetSetAsCSV(DBObjectSet $oSet, $aParams = array())
	{
		$sSeparator = isset($aParams['separator']) ? $aParams['separator'] : ','; // default separator is comma
		$sTextQualifier = isset($aParams['text_qualifier']) ? $aParams['text_qualifier'] : '"'; // default text qualifier is double quote

		$oAppContext = new ApplicationContext();
		$sClassName = $oSet->GetFilter()->GetClass();
		$aAttribs = array();
		$aList = MetaModel::GetZListItems($sClassName, 'details');
		$aHeader = array();
		$aHeader[] = MetaModel::GetKeyLabel($sClassName);
		foreach($aList as $sAttCode)
		{
			$aHeader[] = MetaModel::GetLabel($sClassName, $sAttCode);
		}
		$sHtml = '#'.$oSet->GetFilter()->ToOQL()."\n";
		$sHtml .= implode($sSeparator, $aHeader)."\n";
		$oSet->Seek(0);
		while ($oObj = $oSet->Fetch())
		{
			$aRow = array();
			$aRow[] = $oObj->GetKey();
			foreach($aList as $sAttCode)
			{
				if (strstr($oObj->Get($sAttCode), $sSeparator)) // Escape the text only when it contains the separator
				{
					$aRow[] = $sTextQualifier.$oObj->Get($sAttCode).$sTextQualifier;
				}
				else
				{
					$aRow[] = $oObj->Get($sAttCode);
				}
			}
			$sHtml .= implode($sSeparator, $aRow)."\n";
		}
		
		return $sHtml;
	}
	
	static function DisplaySetAsXML(web_page $oPage, CMDBObjectSet $oSet, $aParams = array())
	{
		$oAppContext = new ApplicationContext();
		$sClassName = $oSet->GetFilter()->GetClass();
		$aAttribs = array();
		$aList = MetaModel::GetZListItems($sClassName, 'details');
		$oPage->add("<Set>\n");
		$oSet->Seek(0);
		while ($oObj = $oSet->Fetch())
		{
			$oPage->add("<$sClassName id=\"".$oObj->GetKey()."\">\n");
			foreach(MetaModel::ListAttributeDefs($sClassName) as $sAttCode=>$oAttDef)
			{
				if (($oAttDef->IsWritable()) && ($oAttDef->IsScalar()) && ($sAttCode != 'finalclass') )
				{
					$sValue = $oObj->GetAsXML($sAttCode);
					$oPage->add("<$sAttCode>$sValue</$sAttCode>\n");
				}
			}
			$oPage->add("</$sClassName>\n");
		}
		$oPage->add("</Set>\n");
	}

	// By rom
	function DisplayChangesLog(web_page $oPage)
	{
		$oFltChangeOps = new CMDBSearchFilter('CMDBChangeOpSetAttribute');
		$oFltChangeOps->AddCondition('objkey', $this->GetKey(), '=');
		$oFltChangeOps->AddCondition('objclass', get_class($this), '=');
		$oSet = new CMDBObjectSet($oFltChangeOps, array('date' => false)); // order by date descending (i.e. false)
		$count = $oSet->Count();
		if ($count > 0)
		{
			$oPage->p("Changes log ($count):");
			self::DisplaySet($oPage, $oSet);
		}
		else
		{
			$oPage->p("Changes log is empty");
		}
	}
	
	public static function DisplaySearchForm(web_page $oPage, CMDBObjectSet $oSet, $aExtraParams = array())
	{

		$oPage->add(self::GetSearchForm($oPage, $oSet, $aExtraParams));
	}
	
	public static function GetSearchForm(web_page $oPage, CMDBObjectSet $oSet, $aExtraParams = array())
	{
		static $iSearchFormId = 0;
		$sHtml = '';
		$numCols=4;
		$iSearchFormId++;
		$sClassName = $oSet->GetFilter()->GetClass();

		$sHtml .= "<div class=\"mini_tabs\" id=\"mini_tabs{$iSearchFormId}\"><ul>
					<li><a href=\"#\" onClick=\"$('div.mini_tab{$iSearchFormId}').toggle();$('#mini_tabs{$iSearchFormId} ul li a').toggleClass('selected');\">OQL Query</a></li>
					<li><a class=\"selected\" href=\"#\" onClick=\"$('div.mini_tab{$iSearchFormId}').toggle();$('#mini_tabs{$iSearchFormId} ul li a').toggleClass('selected');\">Simple Search</a></li>
					</ul></div>\n";
		// Simple search form
		$sHtml .= "<div id=\"SimpleSearchForm{$iSearchFormId}\" class=\"mini_tab{$iSearchFormId}\">\n";
		$sHtml .= "<h1>Search for ".MetaModel::GetName($sClassName)." Objects</h1>\n";
		$oUnlimitedFilter = new DBObjectSearch($sClassName);
		$sHtml .= "<form id=\"form{$iSearchFormId}\">\n";
		$index = 0;
		$sHtml .= "<table>\n";
		$aFilterCriteria = $oSet->GetFilter()->GetCriteria();
		$aMapCriteria = array();
		foreach($aFilterCriteria as $aCriteria)
		{
			$aMapCriteria[$aCriteria['filtercode']][] = array('value' => $aCriteria['value'], 'opcode' => $aCriteria['opcode']);
		}
		$aList = MetaModel::GetZListItems($sClassName, 'standard_search');
		foreach($aList as $sFilterCode)
		{
			if (($index % $numCols) == 0)
			{
				if ($index != 0)
				{
					$sHtml .= "</tr>\n";
				}
				$sHtml .= "<tr>\n";
			}
			$sFilterValue = '';
			$sFilterValue = utils::ReadParam($sFilterCode, '');
			$sFilterOpCode = null; // Use the default 'loose' OpCode
			if (empty($sFilterValue))
			{
				if (isset($aMapCriteria[$sFilterCode]))
				{
					if (count($aMapCriteria[$sFilterCode]) > 1)
					{
						$sFilterValue = '* mixed *';
					}
					else
					{
						$sFilterValue = $aMapCriteria[$sFilterCode][0]['value'];
						$sFilterOpCode = $aMapCriteria[$sFilterCode][0]['opcode'];
					}
					if ($sFilterCode != 'company')
					{
						$oUnlimitedFilter->AddCondition($sFilterCode, $sFilterValue, $sFilterOpCode);
					}
				}
			}
			$aAllowedValues = MetaModel::GetAllowedValues_flt($sClassName, $sFilterCode, $aExtraParams);
			if ($aAllowedValues != null)
			{
				//Enum field or external key, display a combo
				$sValue = "<select name=\"$sFilterCode\">\n";
				$sValue .= "<option value=\"\">* Any *</option>\n";
				foreach($aAllowedValues as $key => $value)
				{
					if ($sFilterValue == $key)
					{
						$sSelected = ' selected';
					}
					else
					{
						$sSelected = '';
					}
					$sValue .= "<option value=\"$key\"$sSelected>$value</option>\n";
				}
				$sValue .= "</select>\n";
				$sHtml .= "<td><label>".MetaModel::GetFilterLabel($sClassName, $sFilterCode).":</label></td><td>$sValue</td>\n";
			}
			else
			{
				// Any value is possible, display an input box
				$sHtml .= "<td><label>".MetaModel::GetFilterLabel($sClassName, $sFilterCode).":</label></td><td><input class=\"textSearch\" name=\"$sFilterCode\" value=\"$sFilterValue\"/></td>\n";
			}
			$index++;
		}
		if (($index % $numCols) != 0)
		{
			$sHtml .= "<td colspan=\"".(2*($numCols - ($index % $numCols)))."\"></td>\n";
		}
		$sHtml .= "</tr>\n";
		$sHtml .= "<tr><td colspan=\"".(2*$numCols)."\" align=\"right\"><input type=\"submit\" value=\" Search \"></td></tr>\n";
		$sHtml .= "</table>\n";
		foreach($aExtraParams as $sName => $sValue)
		{
			$sHtml .= "<input type=\"hidden\" name=\"$sName\" value=\"$sValue\">\n";
		}
		$sHtml .= "<input type=\"hidden\" name=\"dosearch\" value=\"1\">\n";
		$sHtml .= "</form>\n";		
		$sHtml .= "</div><!-- Simple search form -->\n";

		// OQL query builder
		$sHtml .= "<div id=\"OQLQuery{$iSearchFormId}\" style=\"display:none\" class=\"mini_tab{$iSearchFormId}\">\n";
		$sHtml .= "<h1>OQL Query Builder</h1>\n";
		$sHtml .= "<form id=\"formOQL{$iSearchFormId}\"><table style=\"width:80%;\"><tr style=\"vertical-align:top\">\n";
		$sHtml .= "<td style=\"text-align:right\"><label>SELECT&nbsp;</label><select name=\"oql_class\">";
		$aClasses = MetaModel::EnumChildClasses($sClassName, ENUM_CHILD_CLASSES_ALL);
		$sSelectedClass = utils::ReadParam('oql_class', $sClassName);
		$sOQLClause = utils::ReadParam('oql_clause', '');
		asort($aClasses);
		foreach($aClasses as $sChildClass)
		{
			$sSelected = ($sChildClass == $sSelectedClass) ? 'selected' : '';
			$sHtml.= "<option value=\"$sChildClass\" $sSelected>".MetaModel::GetName($sChildClass)."</option>\n";
		}
		$sHtml .= "</select>&nbsp;</td><td>\n";
		$sHtml .= "<textarea name=\"oql_clause\" style=\"width:100%\">$sOQLClause</textarea></td></tr>\n";
		$sHtml .= "<tr><td colspan=\"2\" style=\"text-align:right\"><input type=\"submit\" value=\" Query \"></td></tr>\n";
		$sHtml .= "<input type=\"hidden\" name=\"dosearch\" value=\"1\">\n";
		foreach($aExtraParams as $sName => $sValue)
		{
			$sHtml .= "<input type=\"hidden\" name=\"$sName\" value=\"$sValue\">\n";
		}
		$sHtml .= "<input type=\"hidden\" name=\"operation\" value=\"search_form\">\n";
		$sHtml .= "</table></form>\n";
		$sHtml .= "</div><!-- OQL query form -->\n";
		return $sHtml;
	}
	
	public static function GetFormElementForField($oPage, $sClass, $sAttCode, $oAttDef, $value = '', $sDisplayValue = '', $iId = '', $sNameSuffix = '', $iFlags = 0, $aArgs = array())
	{
		static $iInputId = 0;
		if (!empty($iId))
		{
			$iInputId = $iId;
		}
		else
		{
			$iInputId++;
		}

		if (!$oAttDef->IsExternalField())
		{
			$aCSSClasses = array();
			if ( (!$oAttDef->IsNullAllowed()) || ($iFlags & OPT_ATT_MANDATORY))
			{
				$aCSSClasses[] = 'mandatory';
			}
			$sCSSClasses = self::GetCSSClasses($aCSSClasses);
			switch($oAttDef->GetEditClass())
			{
				case 'Date':
				$aCSSClasses[] = 'date-pick';
				$sCSSClasses = self::GetCSSClasses($aCSSClasses);
				$sHTMLValue = "<input type=\"text\" size=\"20\" name=\"attr_{$sAttCode}{$sNameSuffix}\" value=\"$value\" id=\"$iInputId\"{$sCSSClasses}/>";
				break;
				
				case 'Password':
				$sHTMLValue = "<input type=\"password\" size=\"30\" name=\"attr_{$sAttCode}{$sNameSuffix}\" value=\"$value\" id=\"$iInputId\"{$sCSSClasses}/>";
				break;
				
				case 'Text':
					$sHTMLValue = "<textarea name=\"attr_{$sAttCode}{$sNameSuffix}\" rows=\"8\" cols=\"40\" id=\"$iInputId\"{$sCSSClasses}>$value</textarea>";
				break;
	
				case 'List':
					$oWidget = new UILinksWidget($sClass, $sAttCode, $iInputId, $sNameSuffix);
					$sHTMLValue = $oWidget->Display($oPage, $value);
				break;
							
				case 'String':
				default:
					// #@# todo - add context information (depending on dimensions)
					$aAllowedValues = MetaModel::GetAllowedValues_att($sClass, $sAttCode, $aArgs);
					if ($aAllowedValues !== null)
					{
						//Enum field or external key, display a combo
						if (count($aAllowedValues) == 0)
						{
							$sHTMLValue = "<input count=\"0\" type=\"text\" size=\"30\" value=\"\" name=\"attr_{$sAttCode}{$sNameSuffix}\" id=\"$iInputId\"{$sCSSClasses}/>";
						}
						else if (count($aAllowedValues) > 50)
						{
							// too many choices, use an autocomplete
							// The input for the auto complete
							$sHTMLValue = "<input count=\"".count($aAllowedValues)."\" type=\"text\" id=\"label_$iInputId\" size=\"30\" name=\"\" value=\"$sDisplayValue\"{$sCSSClasses}/>";
							// another hidden input to store & pass the object's Id
							$sHTMLValue .= "<input type=\"hidden\" id=\"$iInputId\" name=\"attr_{$sAttCode}{$sNameSuffix}\" value=\"$value\" />\n";
							$oPage->add_ready_script("\$('#label_$iInputId').autocomplete('./ajax.render.php', { minChars:3, onItemSelect:selectItem, onFindValue:findValue, formatItem:formatItem, autoFill:true, keyHolder:'#$iInputId', extraParams:{operation:'autocomplete', sclass:'$sClass',attCode:'".$sAttCode."'}});");
							$oPage->add_ready_script("\$('#label_$iInputId').result( function(event, data, formatted) { if (data) { $('#{$iInputId}').val(data[1]); } } );");
						}
						else
						{
							// Few choices, use a normal 'select'
							$sHTMLValue = "<select name=\"attr_{$sAttCode}{$sNameSuffix}\" id=\"$iInputId\"{$sCSSClasses}>\n";
							$sHTMLValue .= "<option value=\"0\">-- select one --</option>\n";
							foreach($aAllowedValues as $key => $display_value)
							{
								$sSelected = ($value == $key) ? ' selected' : '';
								$sHTMLValue .= "<option value=\"$key\"$sSelected>$display_value</option>\n";
							}
							$sHTMLValue .= "</select>\n";
						}
					}
					else
					{
						$sHTMLValue = "<input type=\"text\" size=\"30\" name=\"attr_{$sAttCode}{$sNameSuffix}\" value=\"$value\" id=\"$iInputId\"{$sCSSClasses}>";
					}
					break;
			}
		}
		return $sHTMLValue;
	}
	
	public function DisplayModifyForm(web_page $oPage)
	{
		static $iFormId = 0;
		$iFormId++;
		$oAppContext = new ApplicationContext();
		$sStateAttCode = MetaModel::GetStateAttributeCode(get_class($this));
		$iKey = $this->GetKey();
		$aDetails = array();
		$oPage->add("<form id=\"form_{$iFormId}\" method=\"post\" onSubmit=\"return CheckMandatoryFields('form_{$iFormId}')\">\n");
		foreach(MetaModel::ListAttributeDefs(get_class($this)) as $sAttCode=>$oAttDef)
		{
			if ('finalclass' == $sAttCode) // finalclass is a reserved word, hardcoded !
			{
				// Do nothing, the class field is always hidden, it cannot be edited
			}
			else if ($sStateAttCode == $sAttCode)
			{
				// State attribute is always read-only from the UI
				$sHTMLValue = $this->GetState();
				$aDetails[] = array('label' => $oAttDef->GetLabel(), 'value' => $sHTMLValue);
			}
			else if (!$oAttDef->IsExternalField())
			{
				$iFlags = $this->GetAttributeFlags($sAttCode);				
				if ($iFlags & OPT_ATT_HIDDEN)
				{
					// Attribute is hidden, do nothing
				}
				else
				{
					if ($iFlags & OPT_ATT_READONLY)
					{
						// Attribute is read-only
						$sHTMLValue = $this->GetAsHTML($sAttCode);
					}
					else
					{
						$sValue = $this->Get($sAttCode);
						$sDisplayValue = $this->GetDisplayValue($sAttCode);
						$aArgs = array('this' => $this);
						$sHTMLValue = self::GetFormElementForField($oPage, get_class($this), $sAttCode, $oAttDef, $sValue, $sDisplayValue, '', '', $iFlags, $aArgs);
					}
					$aDetails[] = array('label' => $oAttDef->GetLabel(), 'value' => $sHTMLValue);
				}
			}
		}
		$oPage->details($aDetails);
		$oPage->add("<input type=\"hidden\" name=\"id\" value=\"$iKey\">\n");
		$oPage->add("<input type=\"hidden\" name=\"class\" value=\"".get_class($this)."\">\n");
		$oPage->add("<input type=\"hidden\" name=\"operation\" value=\"apply_modify\">\n");
		$oPage->add("<input type=\"hidden\" name=\"transaction_id\" value=\"".utils::GetNewTransactionId()."\">\n");
		$oPage->add($oAppContext->GetForForm());
		$oPage->add("<button type=\"button\" class=\"action\" onClick=\"goBack()\"><span>Cancel</span></button>&nbsp;&nbsp;&nbsp;&nbsp;\n");
		$oPage->add("<button type=\"submit\" class=\"action\"><span>Apply</span></button>\n");
		$oPage->add("</form>\n");
	}
	
	public static function DisplayCreationForm(web_page $oPage, $sClass, $oObjectToClone = null)
	{
		static $iCreationFormId = 0;

		$iCreationFormId++;
		$oAppContext = new ApplicationContext();
		$aDetails = array();
		$sOperation = ($oObjectToClone == null) ? 'apply_new' : 'apply_clone';
		$sStateAttCode = MetaModel::GetStateAttributeCode(get_class($oObjectToClone));
		$oPage->add("<form id=\"creation_form_{$iCreationFormId}\" method=\"post\" onSubmit=\"return CheckMandatoryFields('creation_form_{$iCreationFormId}')\">\n");
		$aStates = MetaModel::EnumStates($sClass);
		if ($oObjectToClone == null)
		{
			$sTargetState = MetaModel::GetDefaultState($sClass);
		}
		else
		{
			$sTargetState = $oObjectToClone->GetState();
		}

		foreach(MetaModel::ListAttributeDefs($sClass) as $sAttCode=>$oAttDef)
		{
			if ('finalclass' == $sAttCode) // finalclass is a reserved word, hardcoded !
			{
				// Do nothing, the class field is always hidden, it cannot be edited
			}
			else if ($sStateAttCode == $sAttCode)
			{
				// State attribute is always read-only from the UI
				$sHTMLValue = $oObjectToClone->GetState();
				$aDetails[] = array('label' => $oAttDef->GetLabel(), 'value' => $sHTMLValue);
			}
			else if (!$oAttDef->IsExternalField())
			{
				$sValue = ($oObjectToClone == null) ? '' : $oObjectToClone->Get($sAttCode);
				$sDisplayValue = ($oObjectToClone == null) ? '' : $oObjectToClone->GetDisplayValue($sAttCode);
				$iOptions = isset($aStates[$sTargetState]['attribute_list'][$sAttCode]) ? $aStates[$sTargetState]['attribute_list'][$sAttCode] : 0;
				
				$sHTMLValue = self::GetFormElementForField($oPage, $sClass, $sAttCode, $oAttDef, $sValue, $sDisplayValue, '', '', $iOptions);
				$aDetails[] = array('label' => $oAttDef->GetLabel(), 'value' => $sHTMLValue);
			}
		}
		$oPage->details($aDetails);
		if ($oObjectToClone != null)
		{
			$oPage->add("<input type=\"hidden\" name=\"clone_id\" value=\"".$oObjectToClone->GetKey()."\">\n");
		}
		$oPage->add("<input type=\"hidden\" name=\"class\" value=\"$sClass\">\n");
		$oPage->add("<input type=\"hidden\" name=\"operation\" value=\"$sOperation\">\n");
		$oPage->add("<input type=\"hidden\" name=\"transaction_id\" value=\"".utils::GetNewTransactionId()."\">\n");
		$oPage->add($oAppContext->GetForForm());
		$oPage->add("<button type=\"button\" class=\"action\" onClick=\"goBack()\"><span>Cancel</span></button>&nbsp;&nbsp;&nbsp;&nbsp;\n");
		$oPage->add("<button type=\"submit\" class=\"action\"><span>Apply</span></button>\n");
		$oPage->add("</form>\n");
	}

	protected static function GetCSSClasses($aCSSClasses)
	{
		$sCSSClasses = '';
		if (!empty($aCSSClasses))
		{
			$sCSSClasses = ' class="'.implode(' ', $aCSSClasses).'" ';
		}
		return $sCSSClasses;
	}
}
?>
