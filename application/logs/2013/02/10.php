<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-10 08:06:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:06:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:06:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_Testresul' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-02-10 08:06:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_Testresul' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('testresul', Object(Model_User))
#1 {main}
2013-02-10 08:06:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'where clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` WHERE `testresult`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-10 08:06:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'where clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` WHERE `testresult`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(Object(Model_User))
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(54): Kohana_ORM::factory('testresult', Object(Model_User))
#6 [internal function]: Controller_Index_Tests->action_go()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-02-10 08:07:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'where clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` WHERE `testresult`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-10 08:07:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'where clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` WHERE `testresult`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(Object(Model_User))
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(54): Kohana_ORM::factory('testresult', Object(Model_User))
#6 [internal function]: Controller_Index_Tests->action_go()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-02-10 08:07:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'where clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` WHERE `testresult`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-10 08:07:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'where clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` WHERE `testresult`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(Object(Model_User))
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(55): Kohana_ORM::factory('testresult', Object(Model_User))
#6 [internal function]: Controller_Index_Tests->action_go()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-02-10 08:10:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\index\tests.php [ 33 ]
2013-02-10 08:10:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\index\tests.php [ 33 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(33): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Tests->action_go(Object(Controller_Index_Tests))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-10 08:10:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'where clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` WHERE `testresult`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-10 08:10:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'where clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` WHERE `testresult`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(263): Kohana_ORM->find()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(Object(Model_User))
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(55): Kohana_ORM::factory('testresult', Object(Model_User))
#6 [internal function]: Controller_Index_Tests->action_go()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-02-10 08:11:30 --- ERROR: Kohana_Exception [ 0 ]: Cannot update testresult model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2013-02-10 08:11:30 --- STRACE: Kohana_Exception [ 0 ]: Cannot update testresult model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(59): Kohana_ORM->update()
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-10 08:17:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:17:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:17:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 08:17:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 08:18:29 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.testresult' doesn't exist [ UPDATE `testresult` SET `result` = 0 WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-10 08:18:29 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.testresult' doesn't exist [ UPDATE `testresult` SET `result` = 0 WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(58): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_go()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-10 08:24:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:24:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:25:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:25:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 08:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 08:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 08:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 08:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:32:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:32:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:33:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:33:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:34:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:34:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:35:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:35:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:36:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 08:36:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 08:37:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 08:37:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 08:40:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 08:40:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 08:41:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 08:41:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 08:59:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Testresult::count() ~ APPPATH\classes\controller\index\tests.php [ 46 ]
2013-02-10 08:59:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Testresult::count() ~ APPPATH\classes\controller\index\tests.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-10 08:59:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Testresult::count() ~ APPPATH\classes\controller\index\tests.php [ 46 ]
2013-02-10 08:59:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Testresult::count() ~ APPPATH\classes\controller\index\tests.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-10 09:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 09:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 09:05:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 09:05:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 09:19:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 09:19:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 09:19:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 09:19:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 09:22:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 09:22:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 09:22:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 09:22:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 09:22:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 09:22:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 09:28:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 09:28:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 09:29:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 09:29:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 09:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 09:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 09:32:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 09:32:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 09:33:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 09:33:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 09:36:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 09:36:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 09:37:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 09:37:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 09:38:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
2013-02-10 09:38:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-10 09:38:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 09:38:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 09:39:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 09:39:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 09:40:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 09:40:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 09:45:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 09:45:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 09:45:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 09:45:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 09:46:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 09:46:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 09:56:43 --- ERROR: ErrorException [ 1 ]: Class 'Model_Tests' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-02-10 09:56:43 --- STRACE: ErrorException [ 1 ]: Class 'Model_Tests' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('tests')
#1 {main}
2013-02-10 10:20:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\tutor\rating\view.php [ 66 ]
2013-02-10 10:20:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\tutor\rating\view.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-10 10:21:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\tutor\rating\view.php [ 54 ]
2013-02-10 10:21:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\tutor\rating\view.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-10 10:21:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Test::count() ~ APPPATH\views\tutor\rating\view.php [ 54 ]
2013-02-10 10:21:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Test::count() ~ APPPATH\views\tutor\rating\view.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-10 10:25:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 10:25:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 10:25:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
2013-02-10 10:25:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\view.php [ 5 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(5): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 10:27:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\tutor\rating\view.php [ 66 ]
2013-02-10 10:27:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\tutor\rating\view.php [ 66 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(66): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:20:30 --- ERROR: ErrorException [ 1 ]: Call to undefined function  find_all() ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-10 11:20:30 --- STRACE: ErrorException [ 1 ]: Call to undefined function  find_all() ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-10 11:20:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\tutor\rating\view.php [ 56 ]
2013-02-10 11:20:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\tutor\rating\view.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-10 11:21:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$count ~ APPPATH\views\tutor\rating\view.php [ 56 ]
2013-02-10 11:21:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$count ~ APPPATH\views\tutor\rating\view.php [ 56 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(56): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:21:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 11:21:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 11:22:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 11:22:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 11:23:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 11:23:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 11:23:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 11:23:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 11:24:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 11:24:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 11:24:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 11:24:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 11:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 11:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 11:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-10 11:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-10 11:25:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 11:25:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 11:31:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-10 11:31:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-10 11:35:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-02-10 11:35:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(37): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:35:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-02-10 11:35:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(37): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:35:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-02-10 11:35:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(37): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:36:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-02-10 11:36:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(37): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:37:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 62 ]
2013-02-10 11:37:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 62 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-10 11:37:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-02-10 11:37:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(37): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:39:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-02-10 11:39:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(37): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:39:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-02-10 11:39:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(37): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:43:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\test.php [ 4 ]
2013-02-10 11:43:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\tutor\rating\test.php [ 4 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(4): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:49:53 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-10 11:49:53 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(43): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 11:51:47 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-10 11:51:47 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 12:23:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\views\tutor\rating\test.php [ 43 ]
2013-02-10 12:23:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\views\tutor\rating\test.php [ 43 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(43): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 12:23:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\views\tutor\rating\test.php [ 43 ]
2013-02-10 12:23:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\views\tutor\rating\test.php [ 43 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(43): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 12:24:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\views\tutor\rating\test.php [ 43 ]
2013-02-10 12:24:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\views\tutor\rating\test.php [ 43 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(43): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 12:24:40 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-10 12:24:40 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(43): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 12:25:02 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-10 12:25:02 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(43): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 12:25:31 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-10 12:25:31 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(43): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-10 12:34:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user.id_test' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE `user`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-10 12:34:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user.id_test' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE `user`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(35): Kohana_ORM->find_all()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#13 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#16 {main}