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
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */


//////////////////////////////////////////////////////////////////////
// Classes in 'gui'
//////////////////////////////////////////////////////////////////////
//

//
// Class: menuNode
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:menuNode' => 'menuNode',
	'Class:menuNode+' => 'Menu principal configuracoes elementos',
	'Class:menuNode/Attribute:name' => 'Nome menu',
	'Class:menuNode/Attribute:name+' => 'Nome curto para este menu',
	'Class:menuNode/Attribute:label' => 'Descricao do menu',
	'Class:menuNode/Attribute:label+' => 'Descricao longa para este menu',
	'Class:menuNode/Attribute:hyperlink' => 'Hyperlink',
	'Class:menuNode/Attribute:hyperlink+' => 'Hyperlink para a p&aacute;gina',
	'Class:menuNode/Attribute:icon_path' => 'Icones menu',
	'Class:menuNode/Attribute:icon_path+' => 'Caminho parra o icone do menu',
	'Class:menuNode/Attribute:template' => 'Modelo',
	'Class:menuNode/Attribute:template+' => 'Modelo HTML para ver',
	'Class:menuNode/Attribute:type' => 'Tipo',
	'Class:menuNode/Attribute:type+' => 'Tipo de menu',
	'Class:menuNode/Attribute:type/Value:application' => 'aplicacao',
	'Class:menuNode/Attribute:type/Value:application+' => 'aplicacao',
	'Class:menuNode/Attribute:type/Value:user' => 'usuario',
	'Class:menuNode/Attribute:type/Value:user+' => 'usuario',
	'Class:menuNode/Attribute:type/Value:administrator' => 'administrador',
	'Class:menuNode/Attribute:type/Value:administrator+' => 'administrador',
	'Class:menuNode/Attribute:rank' => 'Mostrar rank',
	'Class:menuNode/Attribute:rank+' => 'Ordem de classificação para exibir o menu',
	'Class:menuNode/Attribute:parent_id' => 'Item Menu principal',
	'Class:menuNode/Attribute:parent_id+' => 'Item Menu principal',
	'Class:menuNode/Attribute:parent_name' => 'Item Menu principal',
	'Class:menuNode/Attribute:parent_name+' => 'Item Menu principal',
	'Class:menuNode/Attribute:user_id' => 'Proprietario do menu',
	'Class:menuNode/Attribute:user_id+' => 'O usuário que possui este menu (menu para usuario definido)',
));

//////////////////////////////////////////////////////////////////////
// Classes in 'application'
//////////////////////////////////////////////////////////////////////
//

//
// Class: AuditCategory
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:AuditCategory' => 'AuditCategory',
	'Class:AuditCategory+' => 'Uma seção dentro da auditoria global',
	'Class:AuditCategory/Attribute:name' => 'Nome categoria',
	'Class:AuditCategory/Attribute:name+' => 'Nome curto da categoria',
	'Class:AuditCategory/Attribute:description' => 'Descricao categoria auditoria',
	'Class:AuditCategory/Attribute:description+' => 'Descricao longa para a categoria auditoria',
	'Class:AuditCategory/Attribute:definition_set' => 'Definicao configuracao',
	'Class:AuditCategory/Attribute:definition_set+' => 'Expressão OQL que define o conjunto de objetos de auditoria',
));

//
// Class: AuditRule
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:AuditRule' => 'AuditRule',
	'Class:AuditRule+' => 'A regra para verificar se há uma categoria de Auditoria dado',
	'Class:AuditRule/Attribute:name' => 'Nome regra',
	'Class:AuditRule/Attribute:name+' => 'Nome curto para a regra',
	'Class:AuditRule/Attribute:description' => 'Descricao regra auditoria',
	'Class:AuditRule/Attribute:description+' => 'Descricao longa para este regra auditoria',
	'Class:AuditRule/Attribute:query' => 'Executar consulta',
	'Class:AuditRule/Attribute:query+' => 'A expressão OQL a executar',
	'Class:AuditRule/Attribute:valid_flag' => 'Objetos validos?',
	'Class:AuditRule/Attribute:valid_flag+' => 'True se a regra retorna os objetos válido, false caso contrário',
	'Class:AuditRule/Attribute:valid_flag/Value:true' => 'verdadeiro',
	'Class:AuditRule/Attribute:valid_flag/Value:true+' => 'verdadeiro',
	'Class:AuditRule/Attribute:valid_flag/Value:false' => 'falso',
	'Class:AuditRule/Attribute:valid_flag/Value:false+' => 'falso',
	'Class:AuditRule/Attribute:category_id' => 'Categoria',
	'Class:AuditRule/Attribute:category_id+' => 'A categoria para esta regra',
	'Class:AuditRule/Attribute:category_name' => 'Categoria',
	'Class:AuditRule/Attribute:category_name+' => 'Nome da categoria para esta regra',
));

//////////////////////////////////////////////////////////////////////
// Classes in 'addon/userrights'
//////////////////////////////////////////////////////////////////////
//

//
// Class: URP_Users
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:URP_Users' => 'Usuario',
	'Class:URP_Users+' => 'Usuarios e credenciais',
	'Class:URP_Users/Attribute:userid' => 'Contatos (pessoa)',
	'Class:URP_Users/Attribute:userid+' => 'Os dados pessoais a partir dos dados de negócio',
	'Class:URP_Users/Attribute:last_name' => 'Ultimo nome',
	'Class:URP_Users/Attribute:last_name+' => 'Nome do contato correspondente',
	'Class:URP_Users/Attribute:first_name' => 'Primeiro nome',
	'Class:URP_Users/Attribute:first_name+' => 'Primeiro nome do contato correspondente',
	'Class:URP_Users/Attribute:email' => 'Email',
	'Class:URP_Users/Attribute:email+' => 'Email do contato correspondente',
	'Class:URP_Users/Attribute:login' => 'Usuario',
	'Class:URP_Users/Attribute:login+' => 'identificação do usuário',
	'Class:URP_Users/Attribute:password' => 'Senha',
	'Class:URP_Users/Attribute:password+' => 'autenticação/senha usuário',
	'Class:URP_Users/Attribute:language' => 'Linguagem',
	'Class:URP_Users/Attribute:language+' => 'linguagem usuário',
	'Class:URP_Users/Attribute:language/Value:EN US' => 'Ingles',
	'Class:URP_Users/Attribute:language/Value:EN US+' => 'Ingles U.S.',
	'Class:URP_Users/Attribute:language/Value:FR FR' => 'Frances',
	'Class:URP_Users/Attribute:language/Value:FR FR+' => 'FR FR',
	'Class:URP_Users/Attribute:language/Value:PT BR' => 'Brazilian',
	'Class:URP_Users/Attribute:language/Value:PT BR+' => 'PT BR',
	'Class:URP_Users/Attribute:profile_list' => 'Profiles',
	'Class:URP_Users/Attribute:profile_list+' => 'Regras, permissao direitos para esta pessoa',
));

//
// Class: URP_Profiles
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:URP_Profiles' => 'Profile',
	'Class:URP_Profiles+' => 'Profile usuario',
	'Class:URP_Profiles/Attribute:name' => 'Nome',
	'Class:URP_Profiles/Attribute:name+' => 'Titulo',
	'Class:URP_Profiles/Attribute:description' => 'Descricao',
	'Class:URP_Profiles/Attribute:description+' => 'uma linha descricao',
	'Class:URP_Profiles/Attribute:user_list' => 'Usuarios',
	'Class:URP_Profiles/Attribute:user_list+' => 'pessoas possuem esta regra',
));

//
// Class: URP_Dimensions
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:URP_Dimensions' => 'dimensão',
	'Class:URP_Dimensions+' => 'dimensão aplicação',
	'Class:URP_Dimensions/Attribute:name' => 'Nome',
	'Class:URP_Dimensions/Attribute:name+' => 'label',
	'Class:URP_Dimensions/Attribute:description' => 'Descrição',
	'Class:URP_Dimensions/Attribute:description+' => 'one line description',
	'Class:URP_Dimensions/Attribute:type' => 'Tipo',
	'Class:URP_Dimensions/Attribute:type+' => 'nome classe ou tipo dado (unidade projetada)',
));

//
// Class: URP_UserProfile
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:URP_UserProfile' => 'Usuario para profile',
	'Class:URP_UserProfile+' => 'profiles usuario',
	'Class:URP_UserProfile/Attribute:userid' => 'Usuario',
	'Class:URP_UserProfile/Attribute:userid+' => 'conta usuario',
	'Class:URP_UserProfile/Attribute:userlogin' => 'Login',
	'Class:URP_UserProfile/Attribute:userlogin+' => 'Login Usuario\'s',
	'Class:URP_UserProfile/Attribute:profileid' => 'Profile',
	'Class:URP_UserProfile/Attribute:profileid+' => 'profile utilizada',
	'Class:URP_UserProfile/Attribute:profile' => 'Profile',
	'Class:URP_UserProfile/Attribute:profile+' => 'Nome profile',
	'Class:URP_UserProfile/Attribute:reason' => 'Razao',
	'Class:URP_UserProfile/Attribute:reason+' => 'explicar porque este usuario teve ter esta regra',
));

//
// Class: URP_ProfileProjection
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:URP_ProfileProjection' => 'profile_projection',
	'Class:URP_ProfileProjection+' => 'profile projections',
	'Class:URP_ProfileProjection/Attribute:dimensionid' => 'Dimension',
	'Class:URP_ProfileProjection/Attribute:dimensionid+' => 'application dimension',
	'Class:URP_ProfileProjection/Attribute:dimension' => 'Dimension',
	'Class:URP_ProfileProjection/Attribute:dimension+' => 'application dimension',
	'Class:URP_ProfileProjection/Attribute:profileid' => 'Profile',
	'Class:URP_ProfileProjection/Attribute:profileid+' => 'usage profile',
	'Class:URP_ProfileProjection/Attribute:profile' => 'Profile',
	'Class:URP_ProfileProjection/Attribute:profile+' => 'Profile name',
	'Class:URP_ProfileProjection/Attribute:value' => 'Value expression',
	'Class:URP_ProfileProjection/Attribute:value+' => 'OQL expression (using $user) | constant |  | +attribute code',
	'Class:URP_ProfileProjection/Attribute:attribute' => 'Attribute',
	'Class:URP_ProfileProjection/Attribute:attribute+' => 'Target attribute code (optional)',
));

//
// Class: URP_ClassProjection
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:URP_ClassProjection' => 'class_projection',
	'Class:URP_ClassProjection+' => 'class projections',
	'Class:URP_ClassProjection/Attribute:dimensionid' => 'Dimension',
	'Class:URP_ClassProjection/Attribute:dimensionid+' => 'application dimension',
	'Class:URP_ClassProjection/Attribute:dimension' => 'Dimension',
	'Class:URP_ClassProjection/Attribute:dimension+' => 'application dimension',
	'Class:URP_ClassProjection/Attribute:class' => 'Class',
	'Class:URP_ClassProjection/Attribute:class+' => 'Target class',
	'Class:URP_ClassProjection/Attribute:value' => 'Value expression',
	'Class:URP_ClassProjection/Attribute:value+' => 'OQL expression (using $this) | constant |  | +attribute code',
	'Class:URP_ClassProjection/Attribute:attribute' => 'Attribute',
	'Class:URP_ClassProjection/Attribute:attribute+' => 'Target attribute code (optional)',
));

//
// Class: URP_ActionGrant
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:URP_ActionGrant' => 'action_permission',
	'Class:URP_ActionGrant+' => 'permissões nas classes',
	'Class:URP_ActionGrant/Attribute:profileid' => 'Profile',
	'Class:URP_ActionGrant/Attribute:profileid+' => 'profiles usadas',
	'Class:URP_ActionGrant/Attribute:profile' => 'Profile',
	'Class:URP_ActionGrant/Attribute:profile+' => 'usage profile',
	'Class:URP_ActionGrant/Attribute:class' => 'Class',
	'Class:URP_ActionGrant/Attribute:class+' => 'Target class',
	'Class:URP_ActionGrant/Attribute:permission' => 'Permission',
	'Class:URP_ActionGrant/Attribute:permission+' => 'allowed or not allowed?',
	'Class:URP_ActionGrant/Attribute:permission/Value:yes' => 'yes',
	'Class:URP_ActionGrant/Attribute:permission/Value:yes+' => 'yes',
	'Class:URP_ActionGrant/Attribute:permission/Value:no' => 'no',
	'Class:URP_ActionGrant/Attribute:permission/Value:no+' => 'no',
	'Class:URP_ActionGrant/Attribute:action' => 'Action',
	'Class:URP_ActionGrant/Attribute:action+' => 'operations to perform on the given class',
));

//
// Class: URP_StimulusGrant
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:URP_StimulusGrant' => 'stimulus_permission',
	'Class:URP_StimulusGrant+' => 'permissions on stimilus in the life cycle of the object',
	'Class:URP_StimulusGrant/Attribute:profileid' => 'Profile',
	'Class:URP_StimulusGrant/Attribute:profileid+' => 'usage profile',
	'Class:URP_StimulusGrant/Attribute:profile' => 'Profile',
	'Class:URP_StimulusGrant/Attribute:profile+' => 'usage profile',
	'Class:URP_StimulusGrant/Attribute:class' => 'Class',
	'Class:URP_StimulusGrant/Attribute:class+' => 'Target class',
	'Class:URP_StimulusGrant/Attribute:permission' => 'Permission',
	'Class:URP_StimulusGrant/Attribute:permission+' => 'allowed or not allowed?',
	'Class:URP_StimulusGrant/Attribute:permission/Value:yes' => 'yes',
	'Class:URP_StimulusGrant/Attribute:permission/Value:yes+' => 'yes',
	'Class:URP_StimulusGrant/Attribute:permission/Value:no' => 'no',
	'Class:URP_StimulusGrant/Attribute:permission/Value:no+' => 'no',
	'Class:URP_StimulusGrant/Attribute:stimulus' => 'Stimulus',
	'Class:URP_StimulusGrant/Attribute:stimulus+' => 'stimulus code',
));

//
// Class: URP_AttributeGrant
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:URP_AttributeGrant' => 'attribute_permission',
	'Class:URP_AttributeGrant+' => 'permissions at the attributes level',
	'Class:URP_AttributeGrant/Attribute:actiongrantid' => 'Action grant',
	'Class:URP_AttributeGrant/Attribute:actiongrantid+' => 'action grant',
	'Class:URP_AttributeGrant/Attribute:attcode' => 'Attribute',
	'Class:URP_AttributeGrant/Attribute:attcode+' => 'attribute code',
));

//
// String from the User Interface: menu, messages, buttons, etc...
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Menu:WelcomeMenu' => 'Bem-vindo',
	'Menu:WelcomeMenu+' => 'Bem-vindo ao iTop',
	'Menu:WelcomeMenuPage' => 'Bem-vindo',
	'Menu:WelcomeMenuPage+' => 'Bem-vindo ao iTop',
	'UI:WelcomeMenu:Title' => 'Bem-vindo ao iTop',

	'UI:WelcomeMenu:LeftBlock' => '<p>iTop é um completo, livre, portal IT.</p>
<ul>Inclui:
<li>completo CMDB (Configuration management database) documentar e gerenciar inventários IT.</li>
<li>módulo Gerenciador Incidente para monitorar e comunicar-se sobre todas as questões que ocorrem na TI.</li>
<li>módulo Gerenciador Mudanças/Alterações para planejar e monitorar mudanças/alterações no ambiente TI.</li>
<li>base de dados com erros conhecidos para agilizar a solução de incidentes.</li>
<li>módulo falha para documentar todas as interrupções planejadas e notificar os contatos adequados.</li>
<li>painéis para obter rapidamente uma visão geral de TI.</li>
</ul>
<p>Todos os módulos podem ser configurados, passo a passo, cada um, independente dos outros..</p>',

	'UI:WelcomeMenu:RightBlock' => '<p>iTop é um provedor de serviço, que permite gerenciar facilmente múltiplos clientes ou organizações.
<ul>iTop, oferece um conjunto rico em recursos de processos de negócios que:
<li>melhora a eficácia da gestão de TI</li> 
<li>melhora operações de TI</li> 
<li>melhora o desempenho da satisfação do cliente.</li>
</ul>
</p>
<p>iTop é completamente aberto para ser integrado com infra-estrutura de IT atuais.</p>
<p>
<ul>Adopting this new generation of IT Operational portal will help you to:
<li>Better manage a more and more complex IT environment.</li>
<li>Implement ITIL processes at your own pace.</li>
<li>Manage the most important asset of your IT: Documentation.</li>
</ul>
</p>',


	'UI:WelcomeMenu:AllOpenRequests' => 'Chamados Abertos: %1$d',
	'UI:WelcomeMenu:MyCalls' => 'Solicitações de usuários atribuído a mim',
	'UI:WelcomeMenu:OpenIncidents' => 'Incidentes Abertos: %1$d',
	'UI:WelcomeMenu:AllConfigItems' => 'Configuração Itens: %1$d',
	'UI:WelcomeMenu:MyIncidents' => 'Incidentes atribuídas a mim',

	'UI:AllOrganizations' => ' Todas Organizações ',
	'UI:YourSearch' => 'Pesquisar',
	'UI:LoggedAsMessage' => 'Conectado como %1$s',
	'UI:LoggedAsMessage+Admin' => 'Conectado como %1$s (Administrador)',
	'UI:Button:Logoff' => 'Sair',
	'UI:Button:GlobalSearch' => 'Pesquisar',
	'UI:Button:Search' => ' Pesquisar ',
	'UI:Button:Query' => ' Consultar ',
	'UI:Button:Ok' => 'Ok',
	'UI:Button:Cancel' => 'Cancelar',
	'UI:Button:Apply' => 'Aplicar',
	'UI:Button:Back' => ' << Voltar ',
	'UI:Button:Next' => ' Proximo >> ',
	'UI:Button:Finish' => ' Finalizar ',
	'UI:Button:DoImport' => ' Executar para importar ! ',
	'UI:Button:Done' => ' Concluido ',
	'UI:Button:SimulateImport' => ' Simulate the Import ',
	'UI:Button:Test' => 'Testar!',
	'UI:Button:Evaluate' => ' Evaluate ',
	'UI:Button:AddObject' => ' Adicionar... ',
	'UI:Button:BrowseObjects' => ' Navegar... ',
	'UI:Button:Add' => ' Adicionar ',
	'UI:Button:AddToList' => ' << Adicionar ',
	'UI:Button:RemoveFromList' => ' Remover >> ',
	'UI:Button:FilterList' => ' Filtrar... ',
	'UI:Button:Create' => ' Criar ',
	'UI:Button:Delete' => ' Apagar ! ',
	'UI:Button:ChangePassword' => ' Alterar senha ',

	'UI:SearchToggle' => 'Pesquisar',
	'UI:ClickToCreateNew' => 'Criar um(a) novo(a) %1$s',
	'UI:SearchFor_Class' => 'Pesquisa para %1$s objetos',
	'UI:NoObjectToDisplay' => 'Nenhum objeto encontrado.',
	'UI:Error:MandatoryTemplateParameter_object_id' => 'Parâmetro object_id é obrigatório quando link_attr é especificado. Verifique a definição do modelo.',
	'UI:Error:MandatoryTemplateParameter_target_attr' => 'Parâmetro target_attr é obrigatório quando link_attr é especificado. Verifique a definição do modelo.',
	'UI:Error:MandatoryTemplateParameter_group_by' => 'Parâmetro group_by é obrigatório. Verifique a definição do modelo.',
	'UI:Error:InvalidGroupByFields' => 'Inválido lista de campos para agrupar por: "%1$s".',
	'UI:Error:UnsupportedStyleOfBlock' => 'Erro: não suportado estilo de bloco: "%1$s".',
	'UI:Error:IncorrectLinkDefinition_LinkedClass_Class' => 'Incorreta definição link: a classe de objetos para gerenciar: %1$s não foi encontrado como uma chave externa na classe %2$s',
	'UI:Error:Object_Class_Id_NotFound' => 'Objeto: %1$s:%2$d não encontrado.',
	'UI:Error:WizardCircularReferenceInDependencies' => 'Erro: Referência circular nas dependências entre os campos, verifique o modelo de dados.',
	'UI:Error:UploadedFileTooBig' => 'O arquivo enviado é muito grande (Tamanho máximo permitido é %1$s. Verifique sua configuração do PHP para upload_max_filesize.',
	'UI:Error:UploadedFileTruncated.' => 'Envio de arquivo foi truncado!',
	'UI:Error:NoTmpDir' => 'O diretorio temporário não está definido.',
	'UI:Error:CannotWriteToTmp_Dir' => 'Desabilitado escrever o arquivo temporario no disco. upload_tmp_dir = "%1$s".',
	'UI:Error:UploadStoppedByExtension_FileName' => 'Upload parado por extensao. (Nome original arquivo = "%1$s").',
	'UI:Error:UploadFailedUnknownCause_Code' => 'Upload de arquivo falhou, causa desconhecida. (Erro codigo = "%1$s").',
	
	'UI:Error:1ParametersMissing' => 'Erro: o seguinte parametro deve ser especificado para esta operacao: %1$s.',
	'UI:Error:2ParametersMissing' => 'Erro: os seguinte parametros devem ser especificados para esta operacao: %1$s e %2$s.',
	'UI:Error:3ParametersMissing' => 'Erro: os seguinte parametros devem ser especificados para esta operacao: %1$s, %2$s e %3$s.',
	'UI:Error:4ParametersMissing' => 'Erro: os seguinte parametros devem ser especificados para esta operacao: %1$s, %2$s, %3$s e %4$s.',
	'UI:Error:IncorrectOQLQuery_Message' => 'Erro: Consulta OQL incorreta: %1$s',
	'UI:Error:AnErrorOccuredWhileRunningTheQuery_Message' => 'Um erro ocorreu enquanto executava a consulta: %1$s',
	'UI:Error:ObjectAlreadyUpdated' => 'Erro: o objeto já foi atualizado.',
	'UI:Error:ObjectCannotBeUpdated' => 'Erro: objeto nao pode ser atualizado.',
	'UI:Error:ObjectsAlreadyDeleted' => 'Erro: objeto já pode ter sido eliminada!',
	'UI:Error:BulkDeleteNotAllowedOn_Class' => 'Permissão negado para executar uma exclusão em massa de objetos da classe %1$s',
	'UI:Error:DeleteNotAllowedOn_Class' => 'Permissão negado para apagar objeto da classe %1$s',
	'UI:Error:ObjectAlreadyCloned' => 'Erro: o objeto ja foi clonado!',
	'UI:Error:ObjectAlreadyCreated' => 'Erro: o objeto ja foi criado!',
	'UI:Error:Invalid_Stimulus_On_Object_In_State' => 'Erro: invalid stimulus "%1$s" on object %2$s in state "%3$s".',
	
	
	'UI:GroupBy:Count' => 'Contagem',
	'UI:GroupBy:Count+' => 'N&uacute;mero de elementos',
	'UI:CountOfObjects' => '%1$d objetos que correspondem aos criterios.',
	'UI:NoObject_Class_ToDisplay' => 'Nenhum %1$s para mostrar',
	'UI:History:LastModified_On_By' => 'Ultima modificacao de %1$s por %2$s.',
	'UI:HistoryTab' => 'Historico',
	'UI:History:Date' => 'Data',
	'UI:History:Date+' => 'Data da alteração',
	'UI:History:User' => 'Usuario',
	'UI:History:User+' => 'Usuario que fez alteração',
	'UI:History:Changes' => 'Alterações',
	'UI:History:Changes+' => 'Alterações feita no objeto',
	'UI:Loading' => 'Carregando...',
	'UI:Menu:Actions' => 'Ações',
	'UI:Menu:New' => 'Novo...',
	'UI:Menu:Add' => 'Adicionar...',
	'UI:Menu:Manage' => 'Gerencia...',
	'UI:Menu:EMail' => 'eMail',
	'UI:Menu:CSVExport' => 'Exportar CSV',
	'UI:Menu:Modify' => 'Modificar...',
	'UI:Menu:Delete' => 'Apagar...',
	'UI:Menu:Manage' => 'Gerencia...',
	'UI:Menu:BulkDelete' => 'Apagar...',
	'UI:UndefinedObject' => 'indefinido',
	'UI:Document:OpenInNewWindow:Download' => 'Abrir em nova janela: %1$s, Download: %2$s',
	'UI:SelectAllToggle+' => 'Selecionar / Deselecionar todos',
	'UI:TruncatedResults' => '%1$d objetos mostrados out of %2$d',
	'UI:DisplayAll' => 'Mostrar todos',
	'UI:CountOfResults' => '%1$d objeto(s)',
	'UI:ChangesLogTitle' => 'Alteracoes log (%1$d):',
	'UI:EmptyChangesLogTitle' => 'Alteracoes log esta limpo',
	'UI:SearchFor_Class_Objects' => 'Pesquisa para %1$s objetos',
	'UI:OQLQueryBuilderTitle' => 'Construir consulta OQL',
	'UI:OQLQueryTab' => 'Consulta OQL',
	'UI:SimpleSearchTab' => 'Pesquisa simples',
	'UI:Details+' => 'Detalhes',
	'UI:SearchValue:Any' => '* Qualquer *',
	'UI:SearchValue:Mixed' => '* mix *',
	'UI:SelectOne' => '-- selecione um --',
	'UI:Login:Welcome' => 'Bem-vindo ao iTop!',
	'UI:Login:IncorrectLoginPassword' => 'Usuario/senha incorreto(s), por favor, tente novamente.',
	'UI:Login:IdentifyYourself' => 'Identifique-se antes continuar...',
	'UI:Login:UserNamePrompt' => 'Nome usuario',
	'UI:Login:PasswordPrompt' => 'Senha',
	'UI:Login:ChangeYourPassword' => 'Alterar sua senha',
	'UI:Login:OldPasswordPrompt' => 'Senha antiga',
	'UI:Login:NewPasswordPrompt' => 'Nova senha',
	'UI:Login:RetypeNewPasswordPrompt' => 'Digite novamente a senha',
	'UI:Login:IncorrectOldPassword' => 'Erro: senha incorreta',
	'UI:LogOffMenu' => 'Sair',
	'UI:ChangePwdMenu' => 'Alterar senha...',
	'UI:Login:RetypePwdDoesNotMatch' => 'A nova senha nao confere!',
	'UI:Button:Login' => 'Enter iTop',
	'UI:Login:Error:AccessRestricted' => 'iTop accesso restrito. Por favor, contate o suporte.',
	'UI:CSVImport:MappingSelectOne' => '-- selecione um --',
	'UI:CSVImport:MappingNotApplicable' => '-- ignore este campo --',
	'UI:CSVImport:NoData' => 'Conjunto vazio de dados..., forneca alguns dados!',
	'UI:Title:DataPreview' => 'Visualizar dado',
	'UI:CSVImport:ErrorOnlyOneColumn' => 'Erro: Os dados contem apenas uma coluna. Sera que voce selecionou o separador adequado?',
	'UI:CSVImport:FieldName' => 'Campo %1$d',
	'UI:CSVImport:DataLine1' => 'Dado linha 1',
	'UI:CSVImport:DataLine2' => 'Dado linha 2',
	'UI:CSVImport:idField' => 'id (Chave primaria)',
	'UI:Title:BulkImport' => 'iTop - Importacao em massa',
	'UI:Title:BulkImport+' => 'CSV Assistente de Importacao',
	'UI:CSVImport:ClassesSelectOne' => '-- selecione um --',
	'UI:CSVImport:ErrorExtendedAttCode' => 'Erro interno: "%1$s" e um codigo incorreto, pois "%2$s" NAO e chave externa da classe "%3$s"',
	'UI:CSVImport:ObjectsWillStayUnchanged' => '%1$d objeto(s) permanecera inalterados.',
	'UI:CSVImport:ObjectsWillBeModified' => '%1$d objeto(s) sera modificado.',
	'UI:CSVImport:ObjectsWillBeAdded' => '%1$d objeto(s) sera adicionado.',
	'UI:CSVImport:ObjectsWillHaveErrors' => '%1$d objeto(s) tem erros.',
	'UI:CSVImport:ObjectsRemainedUnchanged' => '%1$d objeto(s) manteve-se inalterada.',
	'UI:CSVImport:ObjectsWereModified' => '%1$d objeto(s) foram modificados.',
	'UI:CSVImport:ObjectsWereAdded' => '%1$d objeto(s) foram adicionados.',
	'UI:CSVImport:ObjectsAddErrors' => '%1$d objeto(s) apresentam erros.',
	'UI:Title:CSVImportStep2' => 'Step 2 of 5: CSV opcoes dados',
	'UI:Title:CSVImportStep3' => 'Step 3 of 5: Mapeamento de dados',
	'UI:Title:CSVImportStep4' => 'Step 4 of 5: Simulacao Importacao',
	'UI:Title:CSVImportStep5' => 'Step 5 of 5: Importacao completado',
	'UI:CSVImport:LinesNotImported' => 'Linhas que nao pode ser carregadas:',
	'UI:CSVImport:LinesNotImported+' => 'As seguintes linhas nao foram importados, porque eles contem erros',
	'UI:CSVImport:SeparatorComma+' => ', (comma)',
	'UI:CSVImport:SeparatorSemicolon+' => '; (semicolon)',
	'UI:CSVImport:SeparatorTab+' => 'tab',
	'UI:CSVImport:SeparatorOther' => 'outros:',
	'UI:CSVImport:QualifierDoubleQuote+' => '" (aspa dupla)',
	'UI:CSVImport:QualifierSimpleQuote+' => '\' (simple quote)',
	'UI:CSVImport:QualifierOther' => 'outros:',
	'UI:CSVImport:TreatFirstLineAsHeader' => 'Tratar a primeira linha como um cabecalho (nome da coluna)',
	'UI:CSVImport:Skip_N_LinesAtTheBeginning' => 'Skip %1$s line(s) at the beginning of the file',
	'UI:CSVImport:CSVDataPreview' => 'CSV Data Preview',
	'UI:CSVImport:SelectFile' => 'Select the file to import:',
	'UI:CSVImport:Tab:LoadFromFile' => 'Load from a file',
	'UI:CSVImport:Tab:CopyPaste' => 'Copy and paste data',
	'UI:CSVImport:Tab:Templates' => 'Templates',
	'UI:CSVImport:PasteData' => 'Paste the data to import:',
	'UI:CSVImport:PickClassForTemplate' => 'Pick the template to download: ',
	'UI:CSVImport:SeparatorCharacter' => 'Separator character:',
	'UI:CSVImport:TextQualifierCharacter' => 'Text qualifier character',
	'UI:CSVImport:CommentsAndHeader' => 'Comments and header',
	'UI:CSVImport:SelectClass' => 'Select the class to import:',
	'UI:CSVImport:AdvancedMode' => 'Advanced mode',
	'UI:CSVImport:AdvancedMode+' => 'In advanced mode the "id" (primary key) of the objects can be used to update and rename objects.' .
									'However the column "id" (if present) can only be used as a search criteria and can not be combined with any other search criteria.',
	'UI:CSVImport:SelectAClassFirst' => 'To configure the mapping, select a class first.',
	'UI:CSVImport:HeaderFields' => 'Fields',
	'UI:CSVImport:HeaderMappings' => 'Mappings',
	'UI:CSVImport:HeaderSearch' => 'Search?',
	'UI:CSVImport:AlertIncompleteMapping' => 'Please select a mapping for every field.',
	'UI:CSVImport:AlertNoSearchCriteria' => 'Please select at least one search criteria',
	
	'UI:UniversalSearchTitle' => 'iTop - Pesquisa universal',
	'UI:UniversalSearch:Error' => 'Erro: %1$s',
	'UI:UniversalSearch:LabelSelectTheClass' => 'Selecione a classe para pesquisa: ',
	
	'UI:Audit:Title' => 'iTop - CMDB Auditoria',
	'UI:Audit:InteractiveAudit' => 'Interactive Audit',
	'UI:Audit:HeaderAuditRule' => 'Audit Rule',
	'UI:Audit:HeaderNbObjects' => '# Objects',
	'UI:Audit:HeaderNbErrors' => '# Errors',
	'UI:Audit:PercentageOk' => '% Ok',
	
	'UI:RunQuery:Title' => 'iTop - OQL Query Evaluation',
	'UI:RunQuery:QueryExamples' => 'Query Examples',
	'UI:RunQuery:HeaderPurpose' => 'Purpose',
	'UI:RunQuery:HeaderPurpose+' => 'Explanation about the query',
	'UI:RunQuery:HeaderOQLExpression' => 'OQL Expression',
	'UI:RunQuery:HeaderOQLExpression+' => 'The query in OQL syntax',
	'UI:RunQuery:ExpressionToEvaluate' => 'Expression to evaluate: ',
	'UI:RunQuery:MoreInfo' => 'More information about the query: ',
	'UI:RunQuery:DevelopedQuery' => 'Redevelopped query expression: ',
	'UI:RunQuery:SerializedFilter' => 'Serialized filter: ',
	'UI:RunQuery:Error' => 'An error occured while running the query: %1$s',
	
	'UI:Schema:Title' => 'iTop objects schema',
	'UI:Schema:CategoryMenuItem' => 'Category <b>%1$s</b>',
	'UI:Schema:Relationships' => 'Relationships',
	'UI:Schema:AbstractClass' => 'Abstract class: no object from this class can be instantiated.',
	'UI:Schema:NonAbstractClass' => 'Non abstract class: objects from this class can be instantiated.',
	'UI:Schema:ClassHierarchyTitle' => 'Class hierarchy',
	'UI:Schema:AllClasses' => 'All classes',
	'UI:Schema:ExternalKey_To' => 'External key to %1$s',
	'UI:Schema:Columns_Description' => 'Columns: <em>%1$s</em>',
	'UI:Schema:Default_Description' => 'Default: "%1$s"',
	'UI:Schema:NullAllowed' => 'Null Allowed',
	'UI:Schema:NullNotAllowed' => 'Null NOT Allowed',
	'UI:Schema:Attributes' => 'Attributes',
	'UI:Schema:AttributeCode' => 'Attribute Code',
	'UI:Schema:AttributeCode+' => 'Internal code of the attribute',
	'UI:Schema:Label' => 'Label',
	'UI:Schema:Label+' => 'Label of the attribute',
	'UI:Schema:Type' => 'Type',
	
	'UI:Schema:Type+' => 'Data type of the attribute',
	'UI:Schema:Origin' => 'Origin',
	'UI:Schema:Origin+' => 'The base class in which this attribute is defined',
	'UI:Schema:Description' => 'Description',
	'UI:Schema:Description+' => 'Description of the attribute',
	'UI:Schema:AllowedValues' => 'Allowed values',
	'UI:Schema:AllowedValues+' => 'Restrictions on the possible values for this attribute',
	'UI:Schema:MoreInfo' => 'More info',
	'UI:Schema:MoreInfo+' => 'More information about the field defined in the database',
	'UI:Schema:SearchCriteria' => 'Search criteria',
	'UI:Schema:FilterCode' => 'Filter code',
	'UI:Schema:FilterCode+' => 'Code of this search criteria',
	'UI:Schema:FilterDescription' => 'Description',
	'UI:Schema:FilterDescription+' => 'Description of this search criteria',
	'UI:Schema:AvailOperators' => 'Available operators',
	'UI:Schema:AvailOperators+' => 'Possible operators for this search criteria',
	'UI:Schema:ChildClasses' => 'Child classes',
	'UI:Schema:ReferencingClasses' => 'Referencing classes',
	'UI:Schema:RelatedClasses' => 'Related classes',
	'UI:Schema:LifeCycle' => 'Life cycle',
	'UI:Schema:Triggers' => 'Triggers',
	'UI:Schema:Relation_Code_Description' => 'Relation <em>%1$s</em> (%2$s)',
	'UI:Schema:RelationDown_Description' => 'Down: %1$s',
	'UI:Schema:RelationUp_Description' => 'Up: %1$s',
	'UI:Schema:RelationPropagates' => '%1$s: propagate to %2$d levels, query: %3$s',
	'UI:Schema:RelationDoesNotPropagate' => '%1$s: does not propagates (%2$d levels), query: %3$s',
	'UI:Schema:Class_ReferencingClasses_From_By' => '%1$s is referenced by the class %2$s via the field %3$s',
	'UI:Schema:Class_IsLinkedTo_Class_Via_ClassAndAttribute' => '%1$s is linked to %2$s via %3$s::<em>%4$s</em>',
	'UI:Schema:Links:1-n' => 'Classes pointing to %1$s (1:n links):',
	'UI:Schema:Links:n-n' => 'Classes linked to %1$s (n:n links):',
	'UI:Schema:Links:All' => 'Graph of all related classes',
	'UI:Schema:NoLifeCyle' => 'There is no life cycle defined for this class.',
	'UI:Schema:LifeCycleTransitions' => 'Transitions',
	'UI:Schema:LifeCyleAttributeOptions' => 'Attribute options',
	'UI:Schema:LifeCycleHiddenAttribute' => 'Hidden',
	'UI:Schema:LifeCycleReadOnlyAttribute' => 'Read-only',
	'UI:Schema:LifeCycleMandatoryAttribute' => 'Mandatory',
	'UI:Schema:LifeCycleAttributeMustChange' => 'Must change',
	'UI:Schema:LifeCycleAttributeMustPrompt' => 'User will be prompted to change the value',
	'UI:Schema:LifeCycleEmptyList' => 'lista limpa',
	
	'UI:LinksWidget:Autocomplete+' => 'Type the first 3 characters...',
	'UI:Combo:SelectValue' => '--- select a value ---',
	'UI:Label:SelectedObjects' => 'Objetos selecionados: ',
	'UI:Label:AvailableObjects' => 'Objetos dispon&iacute;veis: ',
	'UI:Link_Class_Attributes' => '%1$s atributos',
	'UI:SelectAllToggle+' => 'Marque todos / Desmarque todos',
	'UI:AddObjectsOf_Class_LinkedWith_Class_Instance' => 'Adionar %1$s objetos ligados com %2$s: %3$s',
	'UI:ManageObjectsOf_Class_LinkedWith_Class_Instance' => 'Manage %1$s objects linked with %2$s: %3$s',
	'UI:AddLinkedObjectsOf_Class' => 'Adicionado %1$ss...',
	'UI:RemoveLinkedObjectsOf_Class' => 'Apagado objeto(s) selecionado(s)',
	'UI:Message:EmptyList:UseAdd' => 'A lista est&aacute; limpa, use o &iacute;cone "Adicionar..." para adicionar elementos.',
	'UI:Message:EmptyList:UseSearchForm' => 'Use o formul&aacute;rio Pesquisa para pesquisar objetos a ser adicionado.',
	
	'UI:Wizard:FinalStepTitle' => 'Passo Final: confirmação',
	'UI:Title:DeletionOf_Object' => 'Eliminação de %1$s',
	'UI:Title:BulkDeletionOf_Count_ObjectsOf_Class' => 'Bulk deletion of %1$d objects of class %2$s',
	'UI:Delete:NotAllowedToDelete' => 'Permissão negado para eliminar este objeto',
	'UI:Delete:NotAllowedToUpdate_Fields' => 'Permissão negado para atualizar o(s) seguinte(s) campo(s): %1$s',
	'UI:Error:NotEnoughRightsToDelete' => 'Este objeto não pode ser apagado pelo usu&aacute;rio não ter direitos administrativos',
	'UI:Error:CannotDeleteBecauseOfDepencies' => 'This object could not be deleted because some manual operations must be performed prior to that',
	'UI:Archive_User_OnBehalfOf_User' => '%1$s em nome de %2$s',
	'UI:Delete:AutomaticallyDeleted' => 'eliminado automaticamente',
	'UI:Delete:AutomaticResetOf_Fields' => 'reset autom&aacute;tico dos campo(s): %1$s',
	'UI:Delete:CleaningUpRefencesTo_Object' => 'Limpar todas as refer&ecirc;ncias a %1$s...',
	'UI:Delete:CleaningUpRefencesTo_Several_ObjectsOf_Class' => 'Limpando todas as referências ao objeto %1$d da classe %2$s...',
	'UI:Delete:Done+' => 'What was done...',
	'UI:Delete:_Name_Class_Deleted' => '%1$s - %2$s eliminado.',
	'UI:Delete:ConfirmDeletionOf_Name' => 'Eliminação de %1$s',
	'UI:Delete:ConfirmDeletionOf_Count_ObjectsOf_Class' => 'Eliminação do objeto %1$d da classe %2$s',
	'UI:Delete:ShouldBeDeletedAtomaticallyButNotAllowed' => 'Should be automaticaly deleted, but you are not allowed to do so',
	'UI:Delete:MustBeDeletedManuallyButNotAllowed' => 'Must be deleted manually - but you are not allowed to delete this object, please contact your application admin',
	'UI:Delete:WillBeDeletedAutomatically' => 'Ser&aacute; automaticamente exclu&iacute;do',
	'UI:Delete:MustBeDeletedManually' => 'Deve ser exclu&iacute;do manualmente',
	'UI:Delete:CannotUpdateBecause_Issue' => 'Devem ser atualizados automaticamente, mas: %1$s',
	'UI:Delete:WillAutomaticallyUpdate_Fields' => 'ser&aacute; automaticamente atualizado (reset: %1$s)',
	'UI:Delete:Count_Objects/LinksReferencing_Object' => '%1$d objects/links are referencing %2$s',
	'UI:Delete:Count_Objects/LinksReferencingTheObjects' => '%1$d objects/links are referencing some of the objects to be deleted',	
	'UI:Delete:ReferencesMustBeDeletedToEnsureIntegrity' => 'To ensure Database integrity, any reference should be further eliminated',
	'UI:Delete:Consequence+' => 'What will be done',
	'UI:Delete:SorryDeletionNotAllowed' => 'Sorry, you are not allowed to delete this object, see the detailed explanations above',
	'UI:Delete:PleaseDoTheManualOperations' => 'Please perform the manual operations listed above prior to requesting the deletion of this object',
	'UI:Delect:Confirm_Object' => 'Deseja realmente apagar %1$s.',
	'UI:Delect:Confirm_Count_ObjectsOf_Class' => 'Por favor, confirme que deseja apagar o seguinte %1$d objetos da classe %2$s.',
	'UI:WelcomeToITop' => 'Bem-vindo ao iTop',
	'UI:DetailsPageTitle' => 'iTop - %1$s - %2$s detalhes',
	'UI:ErrorPageTitle' => 'iTop - Erro',
	'UI:ObjectDoesNotExist' => 'Desculpe, este objeto não existe (ou voc&ecirc; não tem permissão para v&ecirc;-lo).',
	'UI:SearchResultsPageTitle' => 'iTop - Pesquisa resultados',
	'UI:Search:NoSearch' => 'Nada para pesquisar',
	'UI:FullTextSearchTitle_Text' => 'Resultados para "%1$s":',
	'UI:Search:Count_ObjectsOf_Class_Found' => '%1$d objeto(s) da classe %2$s encontrado(s).',
	'UI:Search:NoObjectFound' => 'Nenhum objeto encontrado.',
	'UI:ModificationPageTitle_Object_Class' => 'iTop - %1$s - %2$s modificação',
	'UI:ModificationTitle_Class_Object' => 'Modificação de %1$s: <span class=\"hilite\">%2$s</span>',
	'UI:ClonePageTitle_Object_Class' => 'iTop - Clone %1$s - %2$s modificação',
	'UI:CloneTitle_Class_Object' => 'Clone de %1$s: <span class=\"hilite\">%2$s</span>',
	'UI:CreationPageTitle_Class' => 'iTop - Criação de um(a) novo(a) %1$s ',
	'UI:CreationTitle_Class' => 'Criação de um(a) novo(a) %1$s',
	'UI:SelectTheTypeOf_Class_ToCreate' => 'Selecione o tipo de %1$s a ser criado:',
	'UI:Class_Object_NotUpdated' => 'Nenhuma mudança detectada, %1$s (%2$s) <strong>não</strong> foi modificado.',
	'UI:Class_Object_Updated' => '%1$s (%2$s) atualizado.',
	'UI:BulkDeletePageTitle' => 'iTop - Excluir em massa',
	'UI:BulkDeleteTitle' => 'Marque os objetos que deseja excluir:',
	'UI:PageTitle:ObjectCreated' => 'iTop Objeto criado.',
	'UI:Title:Object_Of_Class_Created' => '%1$s - %2$s criado.',
	'UI:Apply_Stimulus_On_Object_In_State_ToTarget_State' => 'Applying %1$s on object: %2$s in state %3$s to target state: %4$s.',
	'UI:PageTitle:FatalError' => 'iTop - Erro fatal',
	'UI:FatalErrorMessage' => 'Erro fatal, não pode continuar.',
	'UI:Error_Details' => 'Erro: %1$s.',

	'UI:PageTitle:ClassProjections'	=> 'iTop user management - class projections',
	'UI:PageTitle:ProfileProjections' => 'iTop user management - profile projections',
	'UI:UserManagement:Class' => 'Class',
	'UI:UserManagement:Class+' => 'Class of objects',
	'UI:UserManagement:ProjectedObject' => 'Object',
	'UI:UserManagement:ProjectedObject+' => 'Projected object',
	'UI:UserManagement:AnyObject' => '* any *',
	'UI:UserManagement:User' => 'User',
	'UI:UserManagement:User+' => 'User involved in the projection',
	'UI:UserManagement:Profile' => 'Profile',
	'UI:UserManagement:Profile+' => 'Profile in which the projection is specified',
	'UI:UserManagement:Action:Read' => 'Read',
	'UI:UserManagement:Action:Read+' => 'Read/display objects',
	'UI:UserManagement:Action:Modify' => 'Modify',
	'UI:UserManagement:Action:Modify+' => 'Create and edit (modify) objects',
	'UI:UserManagement:Action:Delete' => 'Delete',
	'UI:UserManagement:Action:Delete+' => 'Delete objects',
	'UI:UserManagement:Action:BulkRead' => 'Bulk Read (Export)',
	'UI:UserManagement:Action:BulkRead+' => 'List objects or export massively',
	'UI:UserManagement:Action:BulkModify' => 'Bulk Modify',
	'UI:UserManagement:Action:BulkModify+' => 'Massively create/edit (CSV import)',
	'UI:UserManagement:Action:BulkDelete' => 'Bulk Delete',
	'UI:UserManagement:Action:BulkDelete+' => 'Massively delete objects',
	'UI:UserManagement:Action:Stimuli' => 'Stimuli',
	'UI:UserManagement:Action:Stimuli+' => 'Allowed (compound) actions',
	'UI:UserManagement:Action' => 'Action',
	'UI:UserManagement:Action+' => 'Action performed by the user',
	'UI:UserManagement:TitleActions' => 'Actions',
	'UI:UserManagement:Permission' => 'Permission',
	'UI:UserManagement:Permission+' => 'User\'s permissions',
	'UI:UserManagement:Attributes' => 'Attributes',
	'UI:UserManagement:ActionAllowed:Yes' => 'Yes',
	'UI:UserManagement:ActionAllowed:No' => 'No',
	'UI:UserManagement:AdminProfile+' => 'Administrators have full read/write access to all objects in the database.',
	'UI:UserManagement:NoLifeCycleApplicable' => 'N/A',
	'UI:UserManagement:NoLifeCycleApplicable+' => 'No lifecycle has been defined for this class',
	'UI:UserManagement:GrantMatrix' => 'Grant Matrix',
	'UI:UserManagement:LinkBetween_User_And_Profile' => 'Link between %1$s and %2$s',
	
	'Menu:AdminTools' => 'Ferramentas administrativa',
	'Menu:AdminTools+' => 'Ferramentas administrativa',
	'Menu:AdminTools?' => 'Ferramentas permitidas somente para usu&aacute;rio com profile administrador',

	'UI:ChangeManagementMenu' => 'Gerenciamento Mudanças',
	'UI:ChangeManagementMenu+' => 'Gerenciamento Mudanças',
	'UI:ChangeManagementMenu:Title' => 'Visão geral Mudanças',
	'UI-ChangeManagementMenu-ChangesByType' => 'Mudanças por tipo',
	'UI-ChangeManagementMenu-ChangesByStatus' => 'Mudanças por status',
	'UI-ChangeManagementMenu-ChangesByWorkgroup' => 'Mudanças por grupo de trabalho',
	'UI-ChangeManagementMenu-ChangesNotYetAssigned' => 'Mudanças não atribu&iacute;das',

	'UI:ConfigurationItemsMenu'=> 'Configuração Itens',
	'UI:ConfigurationItemsMenu+'=> 'Todos dispositivos',
	'UI:ConfigurationItemsMenu:Title' => 'Visão geral Configuração Itens',
	'UI-ConfigurationItemsMenu-ServersByCriticity' => 'Servidores por criticidade',
	'UI-ConfigurationItemsMenu-PCsByCriticity' => 'PCs por criticidade',
	'UI-ConfigurationItemsMenu-NWDevicesByCriticity' => 'Dispositivo de rede por criticidade',
	'UI-ConfigurationItemsMenu-ApplicationsByCriticity' => 'Aplicação por criticidade',
	
	'UI:ConfigurationManagementMenu' => 'Gerenciamento Configuração',
	'UI:ConfigurationManagementMenu+' => 'Gerenciamento Configuração',
	'UI:ConfigurationManagementMenu:Title' => 'Visão geral Infra-estrutura',
	'UI-ConfigurationManagementMenu-InfraByType' => 'Objetos Infra-estrutura por tipo',
	'UI-ConfigurationManagementMenu-InfraByStatus' => 'Objetos Infra-estrutura por status',

'UI:ConfigMgmtMenuOverview:Title' => 'Painel para Gerenciamento Configuração',
'UI-ConfigMgmtMenuOverview-FunctionalCIbyStatus' => 'Configuração Itens por status',
'UI-ConfigMgmtMenuOverview-FunctionalCIByType' => 'Configuração Itens por tipo',

'UI:RequestMgmtMenuOverview:Title' => 'Painel para Gerenciamento de Pedido',
'UI-RequestManagementOverview-RequestByService' => 'User Requests by service',
'UI-RequestManagementOverview-RequestByPriority' => 'User Requests by priority',
'UI-RequestManagementOverview-RequestUnassigned' => 'User Requests not yet assigned to an agent',

'UI:IncidentMgmtMenuOverview:Title' => 'Painel para Gerenciamento Incidentes',
'UI-IncidentManagementOverview-IncidentByService' => 'Incidentes por serviço',
'UI-IncidentManagementOverview-IncidentByPriority' => 'Incidentes por prioridade',
'UI-IncidentManagementOverview-IncidentUnassigned' => 'Incidentes não atribu&iacute;dos para agentes',

'UI:ChangeMgmtMenuOverview:Title' => 'Painel para Gerenciamento Mudanças',
'UI-ChangeManagementOverview-ChangeByType' => 'Mudanças por tipo',
'UI-ChangeManagementOverview-ChangeUnassigned' => 'Mudanças não atribu&iacute;dos para agentes',
'UI-ChangeManagementOverview-ChangeWithOutage' => 'Interrupç&otilde;es devido a mudanças',

'UI:ServiceMgmtMenuOverview:Title' => 'Painel para Gerenciamento Serviço',
'UI-ServiceManagementOverview-CustomerContractToRenew' => 'Contratos de clientes deverão serem renovados em 30 dias',
'UI-ServiceManagementOverview-ProviderContractToRenew' => 'Contratos de prestação a serem renovados em 30 dias',

	'UI:ContactsMenu' => 'Contatos',
	'UI:ContactsMenu+' => 'Contatos',
	'UI:ContactsMenu:Title' => 'Visão global contatos',
	'UI-ContactsMenu-ContactsByLocation' => 'Contatos por Localização',
	'UI-ContactsMenu-ContactsByType' => 'Contatos por tipo',
	'UI-ContactsMenu-ContactsByStatus' => 'Contatos por status',

	'Menu:CSVImportMenu' => 'Importacao CSV',
	'Menu:CSVImportMenu+' => 'Bulk creation or update',
	
	'Menu:DataModelMenu' => 'Modelo dados',
	'Menu:DataModelMenu+' => 'Visao geral do Modelo dados',
	
	'Menu:ExportMenu' => 'Exportar',
	'Menu:ExportMenu+' => 'Exportar o resultado de qualquer consulta em HTML, CSV or XML',
	
	'Menu:NotificationsMenu' => 'Notificações',
	'Menu:NotificationsMenu+' => 'Configuração da notificações',
	'UI:NotificationsMenu:Title' => 'Configuração da <span class="hilite">Notificações</span>',
	'UI:NotificationsMenu:Help' => 'Ajuda',
	'UI:NotificationsMenu:HelpContent' => '<p>In iTop the notifications are fully customizable. They are based on two sets of objects: <i>triggers and actions</i>.</p>
<p><i><b>Triggers</b></i> define when a notification will be executed. There are 3 types of triggers for covering 3 differents phases of an object life cycle:
<ol>
	<li>the "OnCreate" triggers get executed when an object of the specified class is created</li>
	<li>the "OnStateEnter" triggers get executed before an object of the given class enters a specified state (coming from another state)</li>
	<li>the "OnStateLeave" triggers get executed when an object of the given class is leaving a specified state</li>
</ol>
</p>
<p>
<i><b>Actions</b></i> define the actions to be performed when the triggers execute. For now there is only one kind of action consisting in sending an email message.
Such actions also define the template to be used for sending the email as well as the other parameters of the message like the recipients, importance, etc.
</p>
<p>A special page: <a href="../setup/email.test.php" target="_blank">email.test.php</a> is available for testing and troubleshooting your PHP mail configuration.</p>
<p>To be executed, actions must be associated to triggers.
When associated with a trigger, each action is given an "order" number, specifying in which order the actions are to be executed.</p>',
	'UI:NotificationsMenu:Triggers' => 'Triggers',
	'UI:NotificationsMenu:AvailableTriggers' => 'Triggers disponivel',
	'UI:NotificationsMenu:OnCreate' => 'Quando um objeto e criado',
	'UI:NotificationsMenu:OnStateEnter' => 'Quando um objeto entra em um determinado estado',
	'UI:NotificationsMenu:OnStateLeave' => 'Quando um objeto deixa um determinado estado',
	'UI:NotificationsMenu:Actions' => 'Acoes',
	'UI:NotificationsMenu:AvailableActions' => 'Acoes disponiveis',
	
	'Menu:RunQueriesMenu' => 'Executar consultas',
	'Menu:RunQueriesMenu+' => 'Executar qualquer consulta',
	
	'Menu:DataAdministration' => 'Administracao de dados',
	'Menu:DataAdministration+' => 'Administracao de dados',
	
	'Menu:UniversalSearchMenu' => 'Pesquisa Universal',
	'Menu:UniversalSearchMenu+' => 'Pesquisa por nada...',
	
	'Menu:ApplicationLogMenu' => 'Log de l\'aplicacao',
	'Menu:ApplicationLogMenu+' => 'Log de l\'aplicacao',
	'Menu:ApplicationLogMenu:Title' => 'Log de l\'aplicacao',

	'Menu:UserManagementMenu' => 'Gerenciamento Usuario',
	'Menu:UserManagementMenu+' => 'Gerenciamento usuario',

	'Menu:ProfilesMenu' => 'Profiles',
	'Menu:ProfilesMenu+' => 'Profiles',
	'Menu:ProfilesMenu:Title' => 'Profiles',

	'Menu:UserAccountsMenu' => 'Contas usuarios',
	'Menu:UserAccountsMenu+' => 'Contas usuarios',
	'Menu:UserAccountsMenu:Title' => 'Contas usuarios',	

	'UI:iTopVersion:Short' => 'iTop versão %1$s',
	'UI:iTopVersion:Long' => 'iTop versão %1$s-%2$s built on %3$s',
	'UI:PropertiesTab' => 'Propriedades',

	'UI:OpenDocumentInNewWindow_' => 'Abrir este documento em uma nova janela: %1$s',
	'UI:DownloadDocument_' => 'Baixar este documento: %1$s',
	'UI:Document:NoPreview' => 'Nã h&aacute; visualização dispon&iacute;vel para este tipo de documento',

	'UI:DeadlineMissedBy_duration' => 'Perdido por %1$s',
	'UI:Deadline_LessThan1Min' => '< 1 min',		
	'UI:Deadline_Minutes' => '%1$d min',			
	'UI:Deadline_Hours_Minutes' => '%1$dh %2$dmin',			
	'UI:Deadline_Days_Hours_Minutes' => '%1$dd %2$dh %3$dmin',
	'UI:Help' => 'Ajuda',
));



?>
