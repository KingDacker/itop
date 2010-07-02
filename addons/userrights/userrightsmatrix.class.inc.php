<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * UserRightsMatrix (User management Module)
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

class UserRightsMatrixUsers extends DBObject
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "addon/userrights",
			"key_type" => "autoincrement",
			"name_attcode" => "login",
			"state_attcode" => "",
			"reconc_keys" => array(),
			"db_table" => "priv_ur_matrixusers",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
		);
		MetaModel::Init_Params($aParams);
		//MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeInteger("userid", array("allowed_values"=>null, "sql"=>"userid", "default_value"=>0, "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeString("login", array("allowed_values"=>null, "sql"=>"login", "default_value"=>null, "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeString("password", array("allowed_values"=>null, "sql"=>"pwd", "default_value"=>null, "is_null_allowed"=>false, "depends_on"=>array())));
	}
}

class UserRightsMatrixClassGrant extends DBObject
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "addon/userrights",
			"key_type" => "autoincrement",
			"name_attcode" => "",
			"state_attcode" => "",
			"reconc_keys" => array(),
			"db_table" => "priv_ur_matrixclasses",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
		);
		MetaModel::Init_Params($aParams);
		//MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("userid", array("targetclass"=>"UserRightsMatrixUsers", "jointype"=> "", "allowed_values"=>null, "sql"=>"userid", "is_null_allowed"=>false, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeExternalField("login", array("allowed_values"=>null, "extkey_attcode"=> 'userid', "target_attcode"=>"login")));
		MetaModel::Init_AddAttribute(new AttributeString("class", array("allowed_values"=>null, "sql"=>"class", "default_value"=>null, "is_null_allowed"=>false, "depends_on"=>array())));

		MetaModel::Init_AddAttribute(new AttributeString("action", array("allowed_values"=>null, "sql"=>"action", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeEnum("permission", array("allowed_values"=>new ValueSetEnum('yes,no'), "sql"=>"permission", "default_value"=>"yes", "is_null_allowed"=>false, "depends_on"=>array())));
	}
}

class UserRightsMatrixClassStimulusGrant extends DBObject
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "addon/userrights",
			"key_type" => "autoincrement",
			"name_attcode" => "",
			"state_attcode" => "",
			"reconc_keys" => array(),
			"db_table" => "priv_ur_matrixclassesstimulus",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
		);
		MetaModel::Init_Params($aParams);
		//MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("userid", array("targetclass"=>"UserRightsMatrixUsers", "jointype"=> "", "allowed_values"=>null, "sql"=>"userid", "is_null_allowed"=>false, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeExternalField("login", array("allowed_values"=>null, "extkey_attcode"=> 'userid', "target_attcode"=>"login")));
		MetaModel::Init_AddAttribute(new AttributeString("class", array("allowed_values"=>null, "sql"=>"class", "default_value"=>null, "is_null_allowed"=>false, "depends_on"=>array())));

		MetaModel::Init_AddAttribute(new AttributeString("stimulus", array("allowed_values"=>null, "sql"=>"action", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeEnum("permission", array("allowed_values"=>new ValueSetEnum('yes,no'), "sql"=>"permission", "default_value"=>"yes", "is_null_allowed"=>false, "depends_on"=>array())));
	}
}

class UserRightsMatrixAttributeGrant extends DBObject
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "addon/userrights",
			"key_type" => "autoincrement",
			"name_attcode" => "",
			"state_attcode" => "",
			"reconc_keys" => array(),
			"db_table" => "priv_ur_matrixattributes",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
		);
		MetaModel::Init_Params($aParams);
		//MetaModel::Init_InheritAttributes();
		MetaModel::Init_AddAttribute(new AttributeExternalKey("userid", array("targetclass"=>"UserRightsMatrixUsers", "jointype"=> "", "allowed_values"=>null, "sql"=>"userid", "is_null_allowed"=>false, "on_target_delete"=>DEL_MANUAL, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeExternalField("login", array("allowed_values"=>null, "extkey_attcode"=> 'userid', "target_attcode"=>"login")));
		MetaModel::Init_AddAttribute(new AttributeString("class", array("allowed_values"=>null, "sql"=>"class", "default_value"=>null, "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeString("attcode", array("allowed_values"=>null, "sql"=>"attcode", "default_value"=>null, "is_null_allowed"=>false, "depends_on"=>array())));

		MetaModel::Init_AddAttribute(new AttributeString("action", array("allowed_values"=>null, "sql"=>"action", "default_value"=>"", "is_null_allowed"=>false, "depends_on"=>array())));
		MetaModel::Init_AddAttribute(new AttributeEnum("permission", array("allowed_values"=>new ValueSetEnum('yes,no'), "sql"=>"permission", "default_value"=>"yes", "is_null_allowed"=>false, "depends_on"=>array())));
	}
}




class UserRightsMatrix extends UserRightsAddOnAPI
{
	static public $m_aActionCodes = array(
		UR_ACTION_READ => 'read',
		UR_ACTION_MODIFY => 'modify',
		UR_ACTION_DELETE => 'delete',
		UR_ACTION_BULK_READ => 'bulk read',
		UR_ACTION_BULK_MODIFY => 'bulk modify',
		UR_ACTION_BULK_DELETE => 'bulk delete',
	);

	// Installation: create the very first user
	public function CreateAdministrator($sAdminUser, $sAdminPwd)
	{
		// Maybe we should check that no other user with userid == 0 exists
		$oUser = new UserRightsMatrixUsers();
		$oUser->Set('login', $sAdminUser);
		$oUser->Set('password', $sAdminPwd);
		$oUser->Set('userid', 1); // one is for root !

		// Create a change to record the history of the User object
		$oChange = MetaModel::NewObject("CMDBChange");
		$oChange->Set("date", time());
		$oChange->Set("userinfo", "Initialization");
		$iChangeId = $oChange->DBInsert();

		// Now record the admin user object
		$iUserId = $oUser->DBInsertTrackedNoReload($oChange);
		$this->SetupUser($iUserId, true);
		return true;
	}

	public function IsAdministrator($iUserId)
	{
		return ($iUserId == 1);
	}

	public function Setup()
	{
		// Users must be added manually
		// This procedure will then update the matrix when a new user is found or a new class/attribute appears
		$oUserSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT UserRightsMatrixUsers"));
		while ($oUser = $oUserSet->Fetch())
		{
			$this->SetupUser($oUser->GetKey());
		}
		return true;
	}

	protected function SetupUser($iUserId, $bNewUser = false)
	{
		foreach(array('bizmodel', 'application', 'gui', 'core/cmdb') as $sCategory)
		{
			foreach (MetaModel::GetClasses($sCategory) as $sClass)
			{
				foreach (self::$m_aActionCodes as $iActionCode => $sAction)
				{
					if ($bNewUser)
					{
						$bAddCell = true;
					}
					else
					{
						$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT UserRightsMatrixClassGrant WHERE class = '$sClass' AND action = '$sAction' AND userid = $iUserId"));
						$bAddCell = ($oSet->Count() < 1);
					}
					if ($bAddCell)
					{
						// Create a new entry
						$oMyClassGrant = MetaModel::NewObject("UserRightsMatrixClassGrant");
						$oMyClassGrant->Set("userid", $iUserId);
						$oMyClassGrant->Set("class", $sClass);
						$oMyClassGrant->Set("action", $sAction);
						$oMyClassGrant->Set("permission", "yes");
						$iId = $oMyClassGrant->DBInsertNoReload();
					}
				}
				foreach (MetaModel::EnumStimuli($sClass) as $sStimulusCode => $oStimulus)
				{
					if ($bNewUser)
					{
						$bAddCell = true;
					}
					else
					{
						$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT UserRightsMatrixClassStimulusGrant WHERE class = '$sClass' AND stimulus = '$sStimulusCode' AND userid = $iUserId"));
						$bAddCell = ($oSet->Count() < 1);
					}
					if ($bAddCell)
					{
						// Create a new entry
						$oMyClassGrant = MetaModel::NewObject("UserRightsMatrixClassStimulusGrant");
						$oMyClassGrant->Set("userid", $iUserId);
						$oMyClassGrant->Set("class", $sClass);
						$oMyClassGrant->Set("stimulus", $sStimulusCode);
						$oMyClassGrant->Set("permission", "yes");
						$iId = $oMyClassGrant->DBInsertNoReload();
					}
				}
				foreach (MetaModel::GetAttributesList($sClass) as $sAttCode)
				{
					if ($bNewUser)
					{
						$bAddCell = true;
					}
					else
					{
						$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT UserRightsMatrixAttributeGrant WHERE class = '$sClass' AND attcode = '$sAttCode' AND userid = $iUserId"));
						$bAddCell = ($oSet->Count() < 1);
					}
					if ($bAddCell)
					{
						foreach (array('read', 'modify') as $sAction)
						{
							// Create a new entry
							$oMyAttGrant = MetaModel::NewObject("UserRightsMatrixAttributeGrant");
							$oMyAttGrant->Set("userid", $iUserId);
							$oMyAttGrant->Set("class", $sClass);
							$oMyAttGrant->Set("attcode", $sAttCode);
							$oMyAttGrant->Set("action", $sAction);
							$oMyAttGrant->Set("permission", "yes");
							$iId = $oMyAttGrant->DBInsertNoReload();
						}
					}
				}
			}
		}
		// Create the "My Bookmarks" menu item (parent_id = 0, rank = 6)
		if ($bNewUser)
		{
			$bAddMenu = true;
		}
		else
		{
			$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT menuNode WHERE type = 'user' AND parent_id = 0 AND user_id = $iUserId"));
			$bAddMenu = ($oSet->Count() < 1);
		}
		if ($bAddMenu)
		{
			$oMenu = MetaModel::NewObject('menuNode');
			$oMenu->Set('type', 'user');
			$oMenu->Set('parent_id', 0);	// It's a toplevel entry
			$oMenu->Set('rank', 6);			// Located just above the Admin Tools section (=7)
			$oMenu->Set('name', 'My Bookmarks');
			$oMenu->Set('label', 'My Favorite Items');
			$oMenu->Set('hyperlink', 'UI.php');
			$oMenu->Set('template', '<p></p><p></p><p style="text-align:center; font-family:Georgia, Times, serif; font-size:32px;">My bookmarks</p><p style="text-align:center; font-family:Georgia, Times, serif; font-size:14px;"><i>This section contains my most favorite search results</i></p>');
			$oMenu->Set('user_id', $iUserId);
			$oMenu->DBInsert();
		}
	}


	public function Init()
	{
		// Could be loaded in a shared memory (?)
		return true;
	}

	public function CheckCredentials($sUserName, $sPassword)
	{
		$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT UserRightsMatrixUsers WHERE login = '$sUserName'"));
		if ($oSet->Count() < 1)
		{
		// todo: throw an exception?
			return false;
		}

		$oLogin = $oSet->Fetch();
		if ($oLogin->Get('password') == $sPassword)
		{
			return $oLogin->Get('userid');
		}
		// todo: throw an exception?
		return false;
	}
	
	public function CanChangePassword()
	{
		return true;
	}

	public function ChangePassword($iUserId, $sOldPassword, $sNewPassword)
	{
		$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT UserRightsMatrixUsers WHERE userid = $iUserId"));
		if ($oSet->Count() < 1)
		{
			return false;
		}

		$oLogin = $oSet->Fetch();
		if ($oLogin->Get('password') == $sOldPassword)
		{
			$oLogin->Set('password', $sNewPassword);
			$oLogin->DBUpdate();
			return true;
		}
		return false;
	}


	public function GetUserId($sUserName)
	{
		$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT UserRightsMatrixUsers WHERE login = '$sUserName'"));
		if ($oSet->Count() < 1)
		{
		// todo: throw an exception?
			return false;
		}

		$oLogin = $oSet->Fetch();
		return $oLogin->Get('userid');
	}

	// this module does not handle localization
	public function GetUserLanguage($sUserName)
	{
		return 'EN US';
	}

	public function GetContactId($sUserName)
	{
		// this module has no link with the business data
		return null;
	}

	public function GetFilter($sUserName, $sClass)
	{
		$oNullFilter  = new DBObjectSearch($sClass);
		return $oNullFilter;
	}

	public function IsActionAllowed($iUserId, $sClass, $iActionCode, $oInstanceSet = null)
	{
		if (!array_key_exists($iActionCode, self::$m_aActionCodes))
		{
			return UR_ALLOWED_NO;
		}
		$sAction = self::$m_aActionCodes[$iActionCode];

		$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT UserRightsMatrixClassGrant WHERE class = '$sClass' AND action = '$sAction' AND userid = '$iUserId'"));
		if ($oSet->Count() < 1)
		{
			return UR_ALLOWED_NO;
		}

		$oGrantRecord = $oSet->Fetch();
		switch ($oGrantRecord->Get('permission'))
		{
			case 'yes':
				$iRetCode = UR_ALLOWED_YES;
				break;
			case 'no':
			default:
				$iRetCode = UR_ALLOWED_NO;
				break;
		}
		return $iRetCode;
	}

	public function IsActionAllowedOnAttribute($iUserId, $sClass, $sAttCode, $iActionCode, $oInstanceSet = null)
	{
		if (!array_key_exists($iActionCode, self::$m_aActionCodes))
		{
			return UR_ALLOWED_NO;
		}
		$sAction = self::$m_aActionCodes[$iActionCode];

		$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT UserRightsMatrixAttributeGrant WHERE class = '$sClass' AND attcode = '$sAttCode' AND action = '$sAction' AND userid = '$iUserId'"));
		if ($oSet->Count() < 1)
		{
			return UR_ALLOWED_NO;
		}

		$oGrantRecord = $oSet->Fetch();
		switch ($oGrantRecord->Get('permission'))
		{
			case 'yes':
				$iRetCode = UR_ALLOWED_YES;
				break;
			case 'no':
			default:
				$iRetCode = UR_ALLOWED_NO;
				break;
		}
		return $iRetCode;
	}

	public function IsStimulusAllowed($iUserId, $sClass, $sStimulusCode, $oInstanceSet = null)
	{
		$oSet = new DBObjectSet(DBObjectSearch::FromOQL("SELECT UserRightsMatrixClassStimulusGrant WHERE class = '$sClass' AND stimulus = '$sStimulusCode' AND userid = '$iUserId'"));
		if ($oSet->Count() < 1)
		{
			return UR_ALLOWED_NO;
		}

		$oGrantRecord = $oSet->Fetch();
		switch ($oGrantRecord->Get('permission'))
		{
			case 'yes':
				$iRetCode = UR_ALLOWED_YES;
				break;
			case 'no':
			default:
				$iRetCode = UR_ALLOWED_NO;
				break;
		}
		return $iRetCode;
	}

	public function FlushPrivileges()
	{
	}
}

UserRights::SelectModule('UserRightsMatrix');

?>
