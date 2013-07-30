<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-14 05:23:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-14 05:23:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-14 07:58:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-14 07:58:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-14 08:42:59 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.answers' doesn't exist [ SHOW FULL COLUMNS FROM `answers` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-14 08:42:59 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.answers' doesn't exist [ SHOW FULL COLUMNS FROM `answers` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('answers')
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('answer')
#7 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(147): Kohana_ORM->__get('answers')
#8 [internal function]: Controller_Tutor_Questions->action_edit()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-14 08:52:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-14 08:52:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-14 08:52:32 --- ERROR: Kohana_Exception [ 0 ]: The qanswers property does not exist in the Model_Question class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-14 08:52:32 --- STRACE: Kohana_Exception [ 0 ]: The qanswers property does not exist in the Model_Question class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\tests\index.php(22): Kohana_ORM->__get('qanswers')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-14 08:53:34 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.answers' doesn't exist [ SHOW FULL COLUMNS FROM `answers` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-14 08:53:34 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.answers' doesn't exist [ SHOW FULL COLUMNS FROM `answers` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('answers')
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('answer')
#7 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(147): Kohana_ORM->__get('answers')
#8 [internal function]: Controller_Tutor_Questions->action_edit()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-14 08:53:58 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.answers' doesn't exist [ SHOW FULL COLUMNS FROM `answers` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-14 08:53:58 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.answers' doesn't exist [ SHOW FULL COLUMNS FROM `answers` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('answers')
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('answer')
#7 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(147): Kohana_ORM->__get('answers')
#8 [internal function]: Controller_Tutor_Questions->action_edit()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-14 08:57:21 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.answers' doesn't exist [ SHOW FULL COLUMNS FROM `answers` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-14 08:57:21 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.answers' doesn't exist [ SHOW FULL COLUMNS FROM `answers` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('answers')
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('answer')
#7 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(148): Kohana_ORM->__get('answers')
#8 [internal function]: Controller_Tutor_Questions->action_edit()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-14 09:01:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'qanswer.id' in 'where clause' [ SELECT `qanswer`.* FROM `qanswers` AS `qanswer` WHERE `qanswer`.`id` = 33 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-14 09:01:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'qanswer.id' in 'where clause' [ SELECT `qanswer`.* FROM `qanswers` AS `qanswer` WHERE `qanswer`.`id` = 33 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `qanswer...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(33)
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(136): Kohana_ORM::factory('qanswer', 33)
#6 [internal function]: Controller_Tutor_Questions->action_edit()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-04-14 09:02:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'qanswer.id' in 'where clause' [ SELECT `qanswer`.* FROM `qanswers` AS `qanswer` WHERE `qanswer`.`id` = 33 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-14 09:02:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'qanswer.id' in 'where clause' [ SELECT `qanswer`.* FROM `qanswers` AS `qanswer` WHERE `qanswer`.`id` = 33 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `qanswer...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(33)
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(136): Kohana_ORM::factory('qanswer', 33)
#6 [internal function]: Controller_Tutor_Questions->action_edit()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-04-14 09:06:14 --- ERROR: Kohana_Exception [ 0 ]: Cannot update question model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2013-04-14 09:06:14 --- STRACE: Kohana_Exception [ 0 ]: Cannot update question model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(132): Kohana_ORM->update()
#1 [internal function]: Controller_Tutor_Questions->action_edit()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-14 09:08:26 --- ERROR: Kohana_Exception [ 0 ]: Cannot update question model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2013-04-14 09:08:26 --- STRACE: Kohana_Exception [ 0 ]: Cannot update question model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(132): Kohana_ORM->update()
#1 [internal function]: Controller_Tutor_Questions->action_edit()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-14 09:08:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'qanswer.id' in 'where clause' [ SELECT `qanswer`.* FROM `qanswers` AS `qanswer` WHERE `qanswer`.`id` = 33 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-14 09:08:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'qanswer.id' in 'where clause' [ SELECT `qanswer`.* FROM `qanswers` AS `qanswer` WHERE `qanswer`.`id` = 33 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `qanswer...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(33)
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(136): Kohana_ORM::factory('qanswer', 33)
#6 [internal function]: Controller_Tutor_Questions->action_edit()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-04-14 09:10:47 --- ERROR: Kohana_Exception [ 0 ]: The answer_id property does not exist in the Model_Qanswer class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-14 09:10:47 --- STRACE: Kohana_Exception [ 0 ]: The answer_id property does not exist in the Model_Qanswer class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\questions\edit.php(48): Kohana_ORM->__get('answer_id')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-14 09:22:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_question' in 'where clause' [ SELECT `qanswer`.* FROM `qanswers` AS `qanswer` WHERE `id_question` = '10' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-14 09:22:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_question' in 'where clause' [ SELECT `qanswer`.* FROM `qanswers` AS `qanswer` WHERE `id_question` = '10' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `qanswer...', 'Model_Qanswer', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(97): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Questions->action_delete()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}