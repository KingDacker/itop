<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

/**
 * @author	Vladimir Shilov <shilow@ukr.net>

 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @licence	http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:ActionEmail' => 'Уведомление по e-mail',
	'Class:ActionEmail+' => '',
	'Class:ActionEmail/Attribute:test_recipient' => 'Проверка получателя',
	'Class:ActionEmail/Attribute:test_recipient+' => 'Назначение если статус "Test"',
	'Class:ActionEmail/Attribute:from' => 'От',
	'Class:ActionEmail/Attribute:from+' => 'Будет отослано в заголовке e-mail',
	'Class:ActionEmail/Attribute:reply_to' => 'Ответить на',
	'Class:ActionEmail/Attribute:reply_to+' => 'Будет отослано в заголовке e-mail',
	'Class:ActionEmail/Attribute:to' => 'Кому',
	'Class:ActionEmail/Attribute:to+' => 'Получатель e-mail',
	'Class:ActionEmail/Attribute:cc' => 'Копия',
	'Class:ActionEmail/Attribute:cc+' => 'Копия',
	'Class:ActionEmail/Attribute:bcc' => 'Скр. копия',
	'Class:ActionEmail/Attribute:bcc+' => 'Скрытая копия',
	'Class:ActionEmail/Attribute:subject' => 'тема',
	'Class:ActionEmail/Attribute:subject+' => 'Заголовок письма',
	'Class:ActionEmail/Attribute:body' => 'тело',
	'Class:ActionEmail/Attribute:body+' => 'Содержимое письма',
	'Class:ActionEmail/Attribute:importance' => 'значение',
	'Class:ActionEmail/Attribute:importance+' => 'Флаг значения',
	'Class:ActionEmail/Attribute:importance/Value:high' => 'высокий',
	'Class:ActionEmail/Attribute:importance/Value:high+' => 'высокий',
	'Class:ActionEmail/Attribute:importance/Value:low' => 'низкий',
	'Class:ActionEmail/Attribute:importance/Value:low+' => 'низкий',
	'Class:ActionEmail/Attribute:importance/Value:normal' => 'нормальный',
	'Class:ActionEmail/Attribute:importance/Value:normal+' => 'нормальный',
	'Class:TriggerOnPortalUpdate' => 'Триггер (when updated from the portal)~~',
	'Class:TriggerOnPortalUpdate+' => '',
	'Class:TriggerOnStateEnter' => 'Триггер (на начало состояния)',
	'Class:TriggerOnStateEnter+' => 'Триггер на изменению состояния объекта - начало',
	'Class:TriggerOnStateLeave' => 'Триггер (на окончание состояния)',
	'Class:TriggerOnStateLeave+' => 'Триггер на изменению состояния объекта - окончание',
	'Class:TriggerOnObjectCreate' => 'Триггер (на создание объекта)',
	'Class:TriggerOnObjectCreate+' => 'Триггер на создание объекта [дочерний класс] данного класса',
	'Class:lnkTriggerAction' => 'Действие/Триггер',
	'Class:lnkTriggerAction+' => 'Связь между триггером и действий',
	'Class:lnkTriggerAction/Attribute:action_id' => 'Действие',
	'Class:lnkTriggerAction/Attribute:action_id+' => 'Выполняемое действие',
	'Class:lnkTriggerAction/Attribute:trigger_id' => 'Триггер',
	'Class:lnkTriggerAction/Attribute:trigger_id+' => '',
	'Class:lnkTriggerAction/Attribute:order' => 'Порядок',
	'Class:lnkTriggerAction/Attribute:order+' => 'Порядок выполнения действий',
	'Class:TriggerOnThresholdReached' => 'Триггер (пороговое)~~',
	'Class:TriggerOnThresholdReached+' => '',
	'Class:TriggerOnThresholdReached/Attribute:stop_watch_code' => 'Секундомер~~',
	'Class:TriggerOnThresholdReached/Attribute:stop_watch_code+' => '',
	'Class:TriggerOnThresholdReached/Attribute:threshold_index' => 'Порог~~',
	'Class:TriggerOnThresholdReached/Attribute:threshold_index+' => '',
	'Class:AsyncSendEmail' => 'Email (asynchronous)~~',
	'Class:AsyncSendEmail/Attribute:to' => 'Кому~~',
	'Class:AsyncSendEmail/Attribute:subject' => 'Получатель~~',
	'Class:CMDBChange' => 'Изменение',
	'Class:CMDBChange+' => 'Отслеживание изменений',
	'Class:CMDBChange/Attribute:date' => 'дата',
	'Class:CMDBChange/Attribute:date+' => 'дата и время регистрации изменений',
	'Class:CMDBChange/Attribute:userinfo' => 'разная информация',
	'Class:CMDBChange/Attribute:userinfo+' => 'изменение определённые -вызвавшим-',
	'Class:CMDBChangeOp' => 'Операция изменения',
	'Class:CMDBChangeOp+' => 'Отслеживание операции изменения',
	'Class:CMDBChangeOp/Attribute:change' => 'изменение',
	'Class:CMDBChangeOp/Attribute:change+' => 'изменение',
	'Class:CMDBChangeOp/Attribute:objclass' => 'класс объекта',
	'Class:CMDBChangeOp/Attribute:objclass+' => 'класс объекта',
	'Class:CMDBChangeOp/Attribute:objkey' => 'id объекта',
	'Class:CMDBChangeOp/Attribute:objkey+' => 'id объекта',
	'Class:CMDBChangeOp/Attribute:finalclass' => 'тип',
	'Class:CMDBChangeOp/Attribute:finalclass+' => '',
	'Class:CMDBChangeOpCreate' => 'создание объекта',
	'Class:CMDBChangeOpCreate+' => 'Отслеживание создания объекта',
	'Class:CMDBChangeOpDelete' => 'удаление объекта',
	'Class:CMDBChangeOpDelete+' => 'Отслеживание удаления объекта',
	'Class:CMDBChangeOpSetAttribute' => 'изменение объекта',
	'Class:CMDBChangeOpSetAttribute+' => 'Отслеживание изменения объекта',
	'Class:CMDBChangeOpSetAttribute/Attribute:attcode' => 'Атрибут',
	'Class:CMDBChangeOpSetAttribute/Attribute:attcode+' => 'код изменённого свойства',
	'Class:CMDBChangeOpSetAttributeScalar' => 'изменение свойства',
	'Class:CMDBChangeOpSetAttributeScalar+' => 'Отслеживание изменения скалярного свойства объекта',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:oldvalue' => 'Предыдущее значение',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:oldvalue+' => 'предыдущее значение атрибута',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:newvalue' => 'Новое значение',
	'Class:CMDBChangeOpSetAttributeScalar/Attribute:newvalue+' => 'новое значение атрибута',
	'Class:CMDBChangeOpSetAttributeBlob' => 'изменение данных',
	'Class:CMDBChangeOpSetAttributeBlob+' => 'отслеживание изменения данных',
	'Class:CMDBChangeOpSetAttributeBlob/Attribute:prevdata' => 'Предыдущие данные',
	'Class:CMDBChangeOpSetAttributeBlob/Attribute:prevdata+' => 'предыдущее содержимое атрибута',
	'Class:CMDBChangeOpSetAttributeOneWayPassword' => 'Encrypted Password~~',
	'Class:CMDBChangeOpSetAttributeOneWayPassword/Attribute:prev_pwd' => 'Предыдущее значение~~',
	'Class:CMDBChangeOpSetAttributeEncrypted' => 'Encrypted Field~~',
	'Class:CMDBChangeOpSetAttributeEncrypted/Attribute:prevstring' => 'Предыдущее значение~~',
	'Class:CMDBChangeOpSetAttributeText' => 'изменение текста',
	'Class:CMDBChangeOpSetAttributeText+' => 'отслеживание изменения текста',
	'Class:CMDBChangeOpSetAttributeText/Attribute:prevdata' => 'Предыдущие данные',
	'Class:CMDBChangeOpSetAttributeText/Attribute:prevdata+' => 'предыдущее содержимое атрибута',
	'Class:CMDBChangeOpSetAttributeCaseLog' => 'Лог',
	'Class:CMDBChangeOpSetAttributeCaseLog/Attribute:lastentry' => 'Посл.значение',
	'Class:Event' => 'Журнал событий',
	'Class:Event+' => 'Внутренние событие приложения',
	'Class:Event/Attribute:message' => 'сообщение',
	'Class:Event/Attribute:message+' => 'короткое описание собітия',
	'Class:Event/Attribute:date' => 'дата',
	'Class:Event/Attribute:date+' => 'дата и время регистрации изменений',
	'Class:Event/Attribute:userinfo' => 'информация о пользователе',
	'Class:Event/Attribute:userinfo+' => 'идентификация пользователя, действия которого вызвали это событие',
	'Class:Event/Attribute:finalclass' => 'тип',
	'Class:Event/Attribute:finalclass+' => '',
	'Class:EventNotification' => 'Уведомление о событии',
	'Class:EventNotification+' => 'Отслеживание отосланных уведомлений',
	'Class:EventNotification/Attribute:trigger_id' => 'Триггер',
	'Class:EventNotification/Attribute:trigger_id+' => 'учётная запись пользователя',
	'Class:EventNotification/Attribute:action_id' => 'пользователь',
	'Class:EventNotification/Attribute:action_id+' => 'учётная запись пользователя',
	'Class:EventNotification/Attribute:object_id' => 'id объекта',
	'Class:EventNotification/Attribute:object_id+' => 'id объекта (класс заданный тригером ?)',
	'Class:EventNotificationEmail' => 'Отправка сообщений на e-mail',
	'Class:EventNotificationEmail+' => 'Отслеживание отправленных писем',
	'Class:EventNotificationEmail/Attribute:to' => 'Кому',
	'Class:EventNotificationEmail/Attribute:to+' => 'Кому',
	'Class:EventNotificationEmail/Attribute:cc' => 'Копия',
	'Class:EventNotificationEmail/Attribute:cc+' => 'Копия',
	'Class:EventNotificationEmail/Attribute:bcc' => 'Скрытая копия',
	'Class:EventNotificationEmail/Attribute:bcc+' => 'Скрытая копия',
	'Class:EventNotificationEmail/Attribute:from' => 'От',
	'Class:EventNotificationEmail/Attribute:from+' => 'Отправитель сообщения',
	'Class:EventNotificationEmail/Attribute:subject' => 'Тема',
	'Class:EventNotificationEmail/Attribute:subject+' => 'Тема',
	'Class:EventNotificationEmail/Attribute:body' => 'Тело',
	'Class:EventNotificationEmail/Attribute:body+' => 'Тело',
	'Class:EventIssue' => 'Выпуск события',
	'Class:EventIssue+' => 'Отслеживание выпуска (warning, error, др.)',
	'Class:EventIssue/Attribute:issue' => 'Выпуск',
	'Class:EventIssue/Attribute:issue+' => 'Что произошло',
	'Class:EventIssue/Attribute:impact' => 'Воздействие',
	'Class:EventIssue/Attribute:impact+' => 'Последствия',
	'Class:EventIssue/Attribute:page' => 'Страница',
	'Class:EventIssue/Attribute:page+' => 'Точка входа HTTP',
	'Class:EventIssue/Attribute:arguments_post' => 'Отправленные аргументы',
	'Class:EventIssue/Attribute:arguments_post+' => 'Аргументы HTTP POST',
	'Class:EventIssue/Attribute:arguments_get' => 'Аргументы URL',
	'Class:EventIssue/Attribute:arguments_get+' => 'Аргументы HTTP GET',
	'Class:EventIssue/Attribute:callstack' => 'Стек?вызовов',
	'Class:EventIssue/Attribute:callstack+' => 'Стек вызовов',
	'Class:EventIssue/Attribute:data' => 'Данные',
	'Class:EventIssue/Attribute:data+' => 'Подробнее',
	'Class:EventWebService' => 'События Web сервиса',
	'Class:EventWebService+' => 'Trace of an web service call',
	'Class:EventWebService/Attribute:verb' => 'Verb',
	'Class:EventWebService/Attribute:verb+' => 'Название операции',
	'Class:EventWebService/Attribute:result' => 'Результат',
	'Class:EventWebService/Attribute:result+' => 'Все удачн./неудачн.',
	'Class:EventWebService/Attribute:log_info' => 'Журнал',
	'Class:EventWebService/Attribute:log_info+' => 'Результаты журнала',
	'Class:EventWebService/Attribute:log_warning' => 'Лог предупреждений',
	'Class:EventWebService/Attribute:log_warning+' => 'Результаты логов предупреждений',
	'Class:EventWebService/Attribute:log_error' => 'Лог ошибок',
	'Class:EventWebService/Attribute:log_error+' => 'Результаты логов ошибок',
	'Class:EventWebService/Attribute:data' => 'Данные',
	'Class:EventWebService/Attribute:data+' => 'Результаты данных',
	'Class:EventLoginUsage' => 'Статистика авторизаций~~',
	'Class:EventLoginUsage+' => '',
	'Class:EventLoginUsage/Attribute:user_id' => 'Логин~~',
	'Class:EventLoginUsage/Attribute:user_id+' => '',
	'Class:SynchroDataSource' => 'Synchro Data Source~~',
	'Class:SynchroDataSource/Attribute:name' => 'Имя~~',
	'Class:SynchroDataSource/Attribute:name+' => '',
	'Class:SynchroDataSource/Attribute:description' => 'Описание',
	'Class:SynchroDataSource/Attribute:status' => 'Статус~~',
	'Class:SynchroDataSource/Attribute:status/Value:implementation' => 'Имплементация',
	'Class:SynchroDataSource/Attribute:status/Value:obsolete' => 'Устаревший~~',
	'Class:SynchroDataSource/Attribute:status/Value:production' => 'Производство~~',
	'Class:SynchroDataSource/Attribute:user_id' => 'Пользователь~~',
	'Class:SynchroDataSource/Attribute:notify_contact_id' => 'Слать уведомления',
	'Class:SynchroDataSource/Attribute:notify_contact_id+' => '',
	'Class:SynchroDataSource/Attribute:scope_class' => 'Target class~~',
	'Class:SynchroDataSource/Attribute:database_table_name' => 'Data table~~',
	'Class:SynchroDataSource/Attribute:database_table_name+' => '',
	'Class:SynchroDataSource/Attribute:scope_restriction' => 'Scope restriction~~',
	'Class:SynchroDataSource/Attribute:full_load_periodicity' => 'Full load interval~~',
	'Class:SynchroDataSource/Attribute:full_load_periodicity+' => '',
	'Class:SynchroDataSource/Attribute:reconciliation_policy' => 'Reconciliation policy~~',
	'Class:SynchroDataSource/Attribute:reconciliation_policy/Value:use_attributes' => 'Use the attributes~~',
	'Class:SynchroDataSource/Attribute:reconciliation_policy/Value:use_primary_key' => 'Use the primary_key field~~',
	'Class:SynchroDataSource/Attribute:action_on_zero' => 'Action on zero~~',
	'Class:SynchroDataSource/Attribute:action_on_zero+' => '',
	'Class:SynchroDataSource/Attribute:action_on_zero/Value:create' => 'Создать~~',
	'Class:SynchroDataSource/Attribute:action_on_zero/Value:error' => 'Ошибка~~',
	'Class:SynchroDataSource/Attribute:action_on_one' => 'Action on one~~',
	'Class:SynchroDataSource/Attribute:action_on_one+' => '',
	'Class:SynchroDataSource/Attribute:action_on_one/Value:error' => 'Ошибка~~',
	'Class:SynchroDataSource/Attribute:action_on_one/Value:update' => 'Обновить~~',
	'Class:SynchroDataSource/Attribute:action_on_multiple' => 'Action on many~~',
	'Class:SynchroDataSource/Attribute:action_on_multiple+' => '',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:create' => 'Создать~~',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:error' => 'Ошибка~~',
	'Class:SynchroDataSource/Attribute:action_on_multiple/Value:take_first' => 'Take the first one (random?)~~',
	'Class:SynchroDataSource/Attribute:delete_policy' => 'Удалить правило~~',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:delete' => 'Удалить~~',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:ignore' => 'Игнорировать~~',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:update' => 'Обновить~~',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:update_then_delete' => 'Обновить и удалить',
	'Class:SynchroDataSource/Attribute:delete_policy_update' => 'Обновить правила~~',
	'Class:SynchroDataSource/Attribute:delete_policy_update+' => '',
	'Class:SynchroDataSource/Attribute:delete_policy_retention' => 'Retention Duration~~',
	'Class:SynchroDataSource/Attribute:delete_policy_retention+' => '',
	'Class:SynchroDataSource/Attribute:attribute_list' => 'Список свойств~~',
	'Class:SynchroDataSource/Attribute:user_delete_policy' => 'Разрешено',
	'Class:SynchroDataSource/Attribute:user_delete_policy+' => '',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:administrators' => 'Только администраторы~~',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:everybody' => 'Каждый может удалить объект~~',
	'Class:SynchroDataSource/Attribute:user_delete_policy/Value:nobody' => 'Никто~~',
	'Class:SynchroDataSource/Attribute:url_icon' => 'Icon\'s hyperlink~~',
	'Class:SynchroDataSource/Attribute:url_icon+' => '',
	'Class:SynchroDataSource/Attribute:url_application' => 'Ссылки программ~~',
	'Class:SynchroDataSource/Attribute:url_application+' => '',
	'Class:SynchroAttribute' => 'Synchro Attribute~~',
	'Class:SynchroAttribute/Attribute:sync_source_id' => 'Sycnhro Data Source~~',
	'Class:SynchroAttribute/Attribute:attcode' => 'Attribute Code~~',
	'Class:SynchroAttribute/Attribute:update' => 'Обновить~~',
	'Class:SynchroAttribute/Attribute:reconcile' => 'Reconcile~~',
	'Class:SynchroAttribute/Attribute:update_policy' => 'Обновить политику~~',
	'Class:SynchroAttribute/Attribute:update_policy/Value:master_locked' => 'Заблокирован~~',
	'Class:SynchroAttribute/Attribute:update_policy/Value:master_unlocked' => 'Разблокирован~~',
	'Class:SynchroAttribute/Attribute:update_policy/Value:write_if_empty' => 'Initialize if empty~~',
	'Class:SynchroAttribute/Attribute:finalclass' => 'Класс~~',
	'Class:SynchroAttExtKey' => 'Synchro Attribute (ExtKey)~~',
	'Class:SynchroAttExtKey/Attribute:reconciliation_attcode' => 'Reconciliation Attribute~~',
	'Class:SynchroAttLinkSet' => 'Synchro Attribute (Linkset)~~',
	'Class:SynchroAttLinkSet/Attribute:row_separator' => 'Разделитель строк~~',
	'Class:SynchroAttLinkSet/Attribute:attribute_separator' => 'Делитель аттрибутов',
	'Class:SynchroLog' => 'Synchr Log~~',
	'Class:SynchroLog/Attribute:sync_source_id' => 'Synchro Data Source~~',
	'Class:SynchroLog/Attribute:start_date' => 'Стартовать в',
	'Class:SynchroLog/Attribute:end_date' => 'Закончить в',
	'Class:SynchroLog/Attribute:status' => 'Статус~~',
	'Class:SynchroLog/Attribute:status/Value:completed' => 'Завершен~~',
	'Class:SynchroLog/Attribute:status/Value:error' => 'Ошибка~~',
	'Class:SynchroLog/Attribute:status/Value:running' => 'Запущен',
	'Class:SynchroLog/Attribute:stats_nb_replica_seen' => 'Nb replica seen~~',
	'Class:SynchroLog/Attribute:stats_nb_replica_total' => 'Nb replica total~~',
	'Class:SynchroLog/Attribute:stats_nb_obj_deleted' => 'Nb objects deleted~~',
	'Class:SynchroLog/Attribute:stats_nb_obj_deleted_errors' => 'Nb of errors while deleting~~',
	'Class:SynchroLog/Attribute:stats_nb_obj_obsoleted' => 'Nb objects obsoleted~~',
	'Class:SynchroLog/Attribute:stats_nb_obj_obsoleted_errors' => 'Nb of errors while obsoleting~~',
	'Class:SynchroLog/Attribute:stats_nb_obj_created' => 'Nb objects created~~',
	'Class:SynchroLog/Attribute:stats_nb_obj_created_errors' => 'Nb or errors while creating~~',
	'Class:SynchroLog/Attribute:stats_nb_obj_updated' => 'Nb objects updated~~',
	'Class:SynchroLog/Attribute:stats_nb_obj_updated_errors' => 'Nb errors while updating~~',
	'Class:SynchroLog/Attribute:stats_nb_replica_reconciled_errors' => 'Nb of errors during reconciliation~~',
	'Class:SynchroLog/Attribute:stats_nb_replica_disappeared_no_action' => 'Nb replica disappeared~~',
	'Class:SynchroLog/Attribute:stats_nb_obj_new_updated' => 'Nb objects updated~~',
	'Class:SynchroLog/Attribute:stats_nb_obj_new_unchanged' => 'Nb objects unchanged~~',
	'Class:SynchroLog/Attribute:last_error' => 'Last error~~',
	'Class:SynchroLog/Attribute:traces' => 'Traces~~',
	'Class:SynchroReplica' => 'Synchro Replica~~',
	'Class:SynchroReplica/Attribute:sync_source_id' => 'Synchro Data Source~~',
	'Class:SynchroReplica/Attribute:dest_id' => 'Destination object (ID)~~',
	'Class:SynchroReplica/Attribute:dest_class' => 'Destination type~~',
	'Class:SynchroReplica/Attribute:status_last_seen' => 'Last seen~~',
	'Class:SynchroReplica/Attribute:status' => 'Статус~~',
	'Class:SynchroReplica/Attribute:status/Value:modified' => 'Изменен~~',
	'Class:SynchroReplica/Attribute:status/Value:new' => 'Новый~~',
	'Class:SynchroReplica/Attribute:status/Value:obsolete' => 'Obsolete~~',
	'Class:SynchroReplica/Attribute:status/Value:orphan' => 'Orphan~~',
	'Class:SynchroReplica/Attribute:status/Value:synchronized' => 'Синхронизирован~~',
	'Class:SynchroReplica/Attribute:status_dest_creator' => 'Object Created ?~~',
	'Class:SynchroReplica/Attribute:status_last_error' => 'Last Error~~',
	'Class:SynchroReplica/Attribute:status_last_warning' => 'Предупреждения~~',
	'Class:SynchroReplica/Attribute:info_creation_date' => 'Дата создания~~',
	'Class:SynchroReplica/Attribute:info_last_modified' => 'Дата последнего изменения~~',
	'Class:appUserPreferences' => 'Свойства пользователей~~',
	'Class:appUserPreferences/Attribute:userid' => 'Пользователь~~',
	'Class:appUserPreferences/Attribute:preferences' => 'Prefs~~',
	'Core:DeletedObjectLabel' => '%1s (deleted)~~',
	'Core:DeletedObjectTip' => 'Объект был удален %1$s (%2$s)~~',
	'Core:UnknownObjectLabel' => 'Объект не найден (class: %1$s, id: %2$d)~~',
	'Core:UnknownObjectTip' => 'Не может быть найден. Возможно он был удален и очищен в лог-е.~~',
	'Core:AttributeLinkedSet' => 'Array of objects~~',
	'Core:AttributeLinkedSet+' => '',
	'Core:AttributeLinkedSetIndirect' => 'Array of objects (N-N)~~',
	'Core:AttributeLinkedSetIndirect+' => '',
	'Core:AttributeInteger' => 'Integer~~',
	'Core:AttributeInteger+' => '',
	'Core:AttributeDecimal' => 'Decimal~~',
	'Core:AttributeDecimal+' => '',
	'Core:AttributeBoolean' => 'Boolean~~',
	'Core:AttributeBoolean+' => '',
	'Core:AttributeString' => 'String~~',
	'Core:AttributeString+' => '',
	'Core:AttributeClass' => 'Класс~~',
	'Core:AttributeClass+' => '',
	'Core:AttributeApplicationLanguage' => 'Язык пользователя~~',
	'Core:AttributeApplicationLanguage+' => '',
	'Core:AttributeFinalClass' => 'Класс (авто)~~',
	'Core:AttributeFinalClass+' => '',
	'Core:AttributePassword' => 'Пароль~~',
	'Core:AttributePassword+' => '',
	'Core:AttributeEncryptedString' => 'Encrypted string~~',
	'Core:AttributeEncryptedString+' => '',
	'Core:AttributeText' => 'Текст~~',
	'Core:AttributeText+' => '',
	'Core:AttributeHTML' => 'HTML~~',
	'Core:AttributeHTML+' => '',
	'Core:AttributeEmailAddress' => 'Email~~',
	'Core:AttributeEmailAddress+' => '',
	'Core:AttributeIPAddress' => 'IP адрес~~',
	'Core:AttributeIPAddress+' => '',
	'Core:AttributeOQL' => 'OQL~~',
	'Core:AttributeOQL+' => '',
	'Core:AttributeEnum' => 'Enum~~',
	'Core:AttributeEnum+' => '',
	'Core:AttributeTemplateString' => 'Template string~~',
	'Core:AttributeTemplateString+' => '',
	'Core:AttributeTemplateText' => 'Template text~~',
	'Core:AttributeTemplateText+' => '',
	'Core:AttributeTemplateHTML' => 'Template HTML~~',
	'Core:AttributeTemplateHTML+' => '',
	'Core:AttributeDateTime' => 'Дата/время',
	'Core:AttributeDateTime+' => '',
	'Core:AttributeDateTime?SmartSearch' => '
<p>
	Date format:<br/>
	<b>гггг-мм-дд чч:мм:сс</b><br/>
	Пример: 2011-07-19 18:40:00
</p>
<p>
Operators:<br/>
	<b>&gt;</b><em>date</em><br/>
	<b>&lt;</b><em>date</em><br/>
	<b>[</b><em>date</em>,<em>date</em><b>]</b>
</p>
<p>
If the time is omitted, it defaults to 00:00:00
</p>~~',
	'Core:AttributeDate' => 'Дата~~',
	'Core:AttributeDate+' => '',
	'Core:AttributeDate?SmartSearch' => '
<p>
	Date format:<br/>
	<b>гггг-мм-дд</b><br/>
	Example: 2011-07-19
</p>
<p>
Operators:<br/>
	<b>&gt;</b><em>date</em><br/>
	<b>&lt;</b><em>date</em><br/>
	<b>[</b><em>date</em>,<em>date</em><b>]</b>
</p>~~',
	'Core:AttributeDeadline' => 'Deadline~~',
	'Core:AttributeDeadline+' => '',
	'Core:AttributeExternalKey' => 'External key~~',
	'Core:AttributeExternalKey+' => '',
	'Core:AttributeExternalField' => 'External field~~',
	'Core:AttributeExternalField+' => '',
	'Core:AttributeURL' => 'URL~~',
	'Core:AttributeURL+' => '',
	'Core:AttributeBlob' => 'Blob~~',
	'Core:AttributeBlob+' => '',
	'Core:AttributeOneWayPassword' => 'Одноразовый пароль',
	'Core:AttributeOneWayPassword+' => '',
	'Core:AttributeTable' => 'Table~~',
	'Core:AttributeTable+' => '',
	'Core:AttributePropertySet' => 'Свойства~~',
	'Core:AttributePropertySet+' => '',
	'Core:AttributeFriendlyName' => 'Виден как~~',
	'Core:AttributeFriendlyName+' => '',
	'Core:FriendlyName-Label' => 'Виден как~~',
	'Core:FriendlyName-Description' => 'Виден как~~',
	'Class:CMDBChangeOp/Attribute:date' => 'дата',
	'Class:CMDBChangeOp/Attribute:date+' => 'дата и время изменения',
	'Class:CMDBChangeOp/Attribute:userinfo' => 'пользователь',
	'Class:CMDBChangeOp/Attribute:userinfo+' => 'кто сделал изменение',
	'Change:ObjectCreated' => 'Объект создан',
	'Change:ObjectDeleted' => 'Объект удалён',
	'Change:ObjectModified' => 'Object modified~~',
	'Change:AttName_SetTo_NewValue_PreviousValue_OldValue' => '%1$s установлено в %2$s (предыдущее значение: %3$s)',
	'Change:AttName_SetTo' => '%1$s установлено в %2$s',
	'Change:Text_AppendedTo_AttName' => '%1$s добавлено к %2$s',
	'Change:AttName_Changed_PreviousValue_OldValue' => '%1$s изменено, предыдущее значение: %2$s',
	'Change:AttName_Changed' => '%1$s изменено',
	'Change:AttName_EntryAdded' => '%1$s изменено, добавлено новое значение.',
	'Change:LinkSet:Added' => 'добавлен %1$s~~',
	'Change:LinkSet:Removed' => 'удален %1$s~~',
	'Change:LinkSet:Modified' => 'изменен %1$s~~',
	'Class:EventLoginUsage/Attribute:contact_name' => 'Имя пользователя~~',
	'Class:EventLoginUsage/Attribute:contact_name+' => '',
	'Class:EventLoginUsage/Attribute:contact_email' => 'Email пользователя~~',
	'Class:EventLoginUsage/Attribute:contact_email+' => '',
	'Class:Action' => 'Заказное действие',
	'Class:Action+' => 'Действие определённое пользователем',
	'Class:Action/Attribute:name' => 'Имя',
	'Class:Action/Attribute:name+' => '',
	'Class:Action/Attribute:description' => 'Описание',
	'Class:Action/Attribute:description+' => '',
	'Class:Action/Attribute:status' => 'Статус',
	'Class:Action/Attribute:status+' => 'В производстве или ?',
	'Class:Action/Attribute:status/Value:test' => 'Проходит проверку',
	'Class:Action/Attribute:status/Value:test+' => 'Проходит проверку',
	'Class:Action/Attribute:status/Value:enabled' => 'В производстве',
	'Class:Action/Attribute:status/Value:enabled+' => 'В производстве',
	'Class:Action/Attribute:status/Value:disabled' => 'Неактивный',
	'Class:Action/Attribute:status/Value:disabled+' => 'Неактивный',
	'Class:Action/Attribute:trigger_list' => 'Связанные триггеры',
	'Class:Action/Attribute:trigger_list+' => 'Триггеры привызанные к этому действию',
	'Class:Action/Attribute:finalclass' => 'Тип',
	'Class:Action/Attribute:finalclass+' => '',
	'Class:ActionNotification' => 'Уведомление',
	'Class:ActionNotification+' => 'Уведомление (выдержка)',
	'Class:Trigger' => 'Триггер',
	'Class:Trigger+' => 'Заказной триггер события',
	'Class:Trigger/Attribute:description' => 'Описание',
	'Class:Trigger/Attribute:description+' => 'однострочное описание',
	'Class:Trigger/Attribute:action_list' => 'Действия триггера',
	'Class:Trigger/Attribute:action_list+' => 'Действия, выполняемые при активации триггера',
	'Class:Trigger/Attribute:finalclass' => 'Тип',
	'Class:Trigger/Attribute:finalclass+' => '',
	'Class:TriggerOnObject' => 'Триггер (в зависимости класс)',
	'Class:TriggerOnObject+' => 'Триггер по даному классу объектов',
	'Class:TriggerOnObject/Attribute:target_class' => 'Целевой класс',
	'Class:TriggerOnObject/Attribute:target_class+' => '',
	'Class:TriggerOnStateChange' => 'Триггер (на изменение состояния)',
	'Class:TriggerOnStateChange+' => 'Триггер на изменение состояния объекта',
	'Class:TriggerOnStateChange/Attribute:state' => 'Статус',
	'Class:TriggerOnStateChange/Attribute:state+' => '',
	'Class:lnkTriggerAction/Attribute:action_name' => 'Действие',
	'Class:lnkTriggerAction/Attribute:action_name+' => '',
	'Class:lnkTriggerAction/Attribute:trigger_name' => 'Триггер',
	'Class:lnkTriggerAction/Attribute:trigger_name+' => '',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:never' => 'Никто~~',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:depends' => 'Только администратор~~',
	'Class:SynchroDataSource/Attribute:delete_policy/Value:always' => 'Все пользователи~~',
	'SynchroDataSource:Description' => 'Description~~',
	'SynchroDataSource:Reconciliation' => 'Search &amp; reconciliation~~',
	'SynchroDataSource:Deletion' => 'Deletion rules~~',
	'SynchroDataSource:Status' => 'Статус~~',
	'SynchroDataSource:Information' => 'Инфо~~',
	'SynchroDataSource:Definition' => 'Definition~~',
	'Core:SynchroAttributes' => 'Аттрибуты~~',
	'Core:SynchroStatus' => 'Свойства~~',
	'Core:Synchro:ErrorsLabel' => 'Ошибки~~',
	'Core:Synchro:CreatedLabel' => 'Создан~~',
	'Core:Synchro:ModifiedLabel' => 'Изменен~~',
	'Core:Synchro:UnchangedLabel' => 'Неизменен~~',
	'Core:Synchro:ReconciledErrorsLabel' => 'Ошибки~~',
	'Core:Synchro:ReconciledLabel' => 'Reconciled~~',
	'Core:Synchro:ReconciledNewLabel' => 'Создан~~',
	'Core:SynchroReconcile:Yes' => 'Да~~',
	'Core:SynchroReconcile:No' => 'Нет~~',
	'Core:SynchroUpdate:Yes' => 'Да~~',
	'Core:SynchroUpdate:No' => 'Нет~~',
	'Core:Synchro:LastestStatus' => 'Последний статус~~',
	'Core:Synchro:History' => 'История синхронизаций~~',
	'Core:Synchro:NeverRun' => 'Синхронизация не запускалась. Логи отсутсвуют.~~',
	'Core:Synchro:SynchroEndedOn_Date' => 'Синхронизация была закончена в %1$s.~~',
	'Core:Synchro:SynchroRunningStartedOn_Date' => 'Синхронизация запущена в %1$s сейчас в процессе...~~',
	'Menu:DataSources' => 'Synchronization Data Sources~~',
	'Menu:DataSources+' => '',
	'Core:Synchro:label_repl_ignored' => 'Игнор. (%1$s)~~',
	'Core:Synchro:label_repl_disappeared' => 'Невид. (%1$s)~~',
	'Core:Synchro:label_repl_existing' => 'Existing (%1$s)~~',
	'Core:Synchro:label_repl_new' => 'Новый (%1$s)~~',
	'Core:Synchro:label_obj_deleted' => 'Удаленный (%1$s)~~',
	'Core:Synchro:label_obj_obsoleted' => 'Obsoleted (%1$s)~~',
	'Core:Synchro:label_obj_disappeared_errors' => 'Ошибки (%1$s)~~',
	'Core:Synchro:label_obj_disappeared_no_action' => 'No Action (%1$s)~~',
	'Core:Synchro:label_obj_unchanged' => 'Unchanged (%1$s)~~',
	'Core:Synchro:label_obj_updated' => 'Обновлен (%1$s)~~',
	'Core:Synchro:label_obj_updated_errors' => 'Ошибки (%1$s)~~',
	'Core:Synchro:label_obj_new_unchanged' => 'Unchanged (%1$s)~~',
	'Core:Synchro:label_obj_new_updated' => 'Обновлен (%1$s)~~',
	'Core:Synchro:label_obj_created' => 'Создан (%1$s)~~',
	'Core:Synchro:label_obj_new_errors' => 'Ошибки (%1$s)~~',
	'Core:SynchroLogTitle' => '%1$s - %2$s~~',
	'Core:Synchro:Nb_Replica' => 'Replica processed: %1$s~~',
	'Core:Synchro:Nb_Class:Objects' => '%1$s: %2$s~~',
	'Class:SynchroDataSource/Error:AtLeastOneReconciliationKeyMustBeSpecified' => 'At Least one reconciliation key must be specified, or the reconciliation policy must be to use the primary key.~~',
	'Class:SynchroDataSource/Error:DeleteRetentionDurationMustBeSpecified' => 'A delete retention period must be specified, since objects are to be deleted after being marked as obsolete~~',
	'Class:SynchroDataSource/Error:DeletePolicyUpdateMustBeSpecified' => 'Obsolete objects are to be updated, but no update is specified.~~',
	'Class:SynchroDataSource/Error:DataTableAlreadyExists' => 'Строка %1$s уже есть в базе. Пожалуйста, используйте другое значение для синхронизаций.~~',
	'Core:SynchroReplica:PublicData' => 'Public Data~~',
	'Core:SynchroReplica:PrivateDetails' => 'Private Details~~',
	'Core:SynchroReplica:BackToDataSource' => 'Go Back to the Synchro Data Source: %1$s~~',
	'Core:SynchroReplica:ListOfReplicas' => 'List of Replica~~',
	'Core:SynchroAttExtKey:ReconciliationById' => 'id (Primary Key)~~',
	'Core:SynchroAtt:attcode' => 'Аттрибут~~',
	'Core:SynchroAtt:attcode+' => '',
	'Core:SynchroAtt:reconciliation' => 'Reconciliation ?~~',
	'Core:SynchroAtt:reconciliation+' => '',
	'Core:SynchroAtt:update' => 'Обновить?',
	'Core:SynchroAtt:update+' => '',
	'Core:SynchroAtt:update_policy' => 'Политика обновлений~~',
	'Core:SynchroAtt:update_policy+' => '',
	'Core:SynchroAtt:reconciliation_attcode' => 'Reconciliation Key~~',
	'Core:SynchroAtt:reconciliation_attcode+' => '',
	'Core:SyncDataExchangeComment' => '(Data Synchro)~~',
	'Core:Synchro:ListOfDataSources' => 'List of data sources:~~',
	'Core:Synchro:LastSynchro' => 'Последняя синхронизация:',
	'Core:Synchro:ThisObjectIsSynchronized' => 'This object is synchronized with an external data source~~',
	'Core:Synchro:TheObjectWasCreatedBy_Source' => 'The object was <b>created</b> by the external data source %1$s~~',
	'Core:Synchro:TheObjectCanBeDeletedBy_Source' => 'The object <b>can be deleted</b> by the external data source %1$s~~',
	'Core:Synchro:TheObjectCannotBeDeletedByUser_Source' => 'You <b>cannot delete the object</b> because it is owned by the external data source %1$s~~',
	'TitleSynchroExecution' => 'Запуск синхронизаций.~~',
	'Class:SynchroDataSource:DataTable' => 'Таблица: %1$s~~',
	'Core:SyncDataSourceObsolete' => 'The data source is marked as obsolete. Operation cancelled.~~',
	'Core:SyncDataSourceAccessRestriction' => 'Могут запускать только администраторы и определенные пользователи. Операция отменена.~~',
	'Core:SyncTooManyMissingReplicas' => 'All records have been untouched for some time (all of the objects could be deleted). Please check that the process that writes into the synchronization table is still running. Operation cancelled.~~',
	'Core:SyncSplitModeCLIOnly' => 'The synchronization can be executed in chunks only if run in mode CLI~~',
	'Core:Synchro:ListReplicas_AllReplicas_Errors_Warnings' => '%1$s replicas, %2$s error(s), %3$s warning(s).~~',
	'Core:SynchroReplica:TargetObject' => 'Синхронизировано объектов: %1$s~~',
	'Class:AsyncSendEmail/Attribute:body' => 'Тело~~',
	'Class:AsyncSendEmail/Attribute:header' => 'Заголовок~~',
	'Core:ExecProcess:Code1' => 'Неверная команда или команда завершена с ошибкой.(возможно, неверное имя скрипта)~~',
	'Core:ExecProcess:Code255' => 'Ошибка PHP (parsing, or runtime)~~',
	'Core:Duration_Seconds' => '%1$ds~~',
	'Core:Duration_Minutes_Seconds' => '%1$dmin %2$ds~~',
	'Core:Duration_Hours_Minutes_Seconds' => '%1$dh %2$dmin %3$ds~~',
	'Core:Duration_Days_Hours_Minutes_Seconds' => '%1$sd %2$dh %3$dmin %4$ds~~',
));
?>