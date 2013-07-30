<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-04 09:18:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:18:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` IS NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:40:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:40:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:40:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 09:40:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 09:40:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:40:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:44:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 09:44:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 09:45:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:45:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:45:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:45:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:47:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:47:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:52:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:52:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:53:35 --- ERROR: Kohana_Exception [ 0 ]: The test property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-04 09:53:35 --- STRACE: Kohana_Exception [ 0 ]: The test property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->__get('test')
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 09:54:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:54:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:55:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:55:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:56:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:56:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:57:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:57:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:58:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:58:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 09:58:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 09:58:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:03:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\index\courses.php [ 49 ]
2013-02-04 10:03:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\index\courses.php [ 49 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Courses->action_view(Object(Controller_Index_Courses))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 10:03:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\index\courses.php [ 49 ]
2013-02-04 10:03:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\index\courses.php [ 49 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Courses->action_view(Object(Controller_Index_Courses))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 10:04:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\index\courses.php [ 49 ]
2013-02-04 10:04:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\index\courses.php [ 49 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Courses->action_view(Object(Controller_Index_Courses))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 10:05:13 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:05:13 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:05:33 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:05:33 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:06:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 10:06:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 10:06:13 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:06:13 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:06:16 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:06:16 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:06:44 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:06:44 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:08:26 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:08:26 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:08:33 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:08:33 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:08:37 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:08:37 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:09:35 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:09:35 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:12:54 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:12:54 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:12:58 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:12:58 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:13:26 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:13:26 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:13:30 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:13:30 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:14:08 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:14:08 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:14:10 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:14:10 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:14:13 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:14:13 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:15:31 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:15:31 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:15:35 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:15:35 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:15:38 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:15:38 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:16:48 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:16:48 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:16:59 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:16:59 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:20:04 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:20:04 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:21:17 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:21:17 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:21:49 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:21:49 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(43): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:22:36 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:22:36 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:22:39 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:22:39 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:24:20 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:24:20 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:24:22 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:24:22 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:25:13 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:25:13 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:25:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 10:25:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 10:25:24 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:25:24 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:29:36 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:29:36 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:29:42 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:29:42 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\tests.php(15): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Tutor_Tests->action_index()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Tests))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:30:13 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:30:13 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\tests.php(15): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Tutor_Tests->action_index()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Tests))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:35:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 10:35:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 10:35:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 10:35:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:35:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 10:35:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:37:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 10:37:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:38:06 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
2013-02-04 10:38:06 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH\orm\classes\kohana\orm.php [ 333 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(333): Kohana_Core::error_handler(Array, 'user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(42): Kohana_ORM::factory('test')
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:38:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 10:38:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:38:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 10:38:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:40:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 10:40:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 10:46:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-04 10:46:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-04 11:13:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\views\index\courses\view.php [ 34 ]
2013-02-04 11:13:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\views\index\courses\view.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\courses\view.php(34): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Courses))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-04 11:22:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH\views\index\courses\view.php [ 31 ]
2013-02-04 11:22:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH\views\index\courses\view.php [ 31 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\courses\view.php(31): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Courses))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-04 11:22:41 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\views\index\courses\view.php [ 34 ]
2013-02-04 11:22:41 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\views\index\courses\view.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\courses\view.php(34): Kohana_Core::error_handler('1', Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-04 11:37:44 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\views\index\courses\view.php [ 34 ]
2013-02-04 11:37:44 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\views\index\courses\view.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\courses\view.php(34): Kohana_Core::error_handler('1', Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-04 11:42:31 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\views\index\courses\view.php [ 34 ]
2013-02-04 11:42:31 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\views\index\courses\view.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\courses\view.php(34): Kohana_Core::error_handler('1', Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-04 11:42:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: usercourses_array ~ APPPATH\classes\controller\index\courses.php [ 64 ]
2013-02-04 11:42:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: usercourses_array ~ APPPATH\classes\controller\index\courses.php [ 64 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(64): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Courses->action_view(Object(Controller_Index_Courses))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 11:43:18 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\views\index\courses\view.php [ 34 ]
2013-02-04 11:43:18 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\views\index\courses\view.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\courses\view.php(34): Kohana_Core::error_handler('1', Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-04 11:46:32 --- ERROR: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\views\index\courses\view.php [ 34 ]
2013-02-04 11:46:32 --- STRACE: ErrorException [ 2 ]: in_array() [function.in-array]: Wrong datatype for second argument ~ APPPATH\views\index\courses\view.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\courses\view.php(34): Kohana_Core::error_handler('1', Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-04 12:47:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 12:47:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 12:54:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/1 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 12:54:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/1 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 12:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/1 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 12:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/1 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 12:58:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 12:58:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 12:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 12:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 13:03:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 13:03:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 13:03:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 13:03:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 13:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 13:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 13:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 13:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 13:05:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 13:05:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 13:06:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 13:06:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 13:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-04 13:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tests/index/done/2 ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-04 13:06:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-04 13:06:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-04 13:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-04 13:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/done/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-04 13:15:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 13:15:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 13:21:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 13:21:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:34:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 14:34:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:35:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 14:35:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:37:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 14:37:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:38:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 14:38:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:38:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 14:38:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:38:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 14:38:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:39:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 14:39:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:39:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 14:39:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:40:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 14:40:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:40:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 14:40:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:41:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 14:41:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:48:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 14:48:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:48:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 14:48:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:48:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 14:48:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:49:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 14:49:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:50:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 14:50:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:50:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 14:50:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 14:51:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 43 ]
2013-02-04 14:51:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 43 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:00:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\tutor\rating.php [ 55 ]
2013-02-04 15:00:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\tutor\rating.php [ 55 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(55): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:02:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2013-02-04 15:02:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:03:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
2013-02-04 15:03:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:03:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
2013-02-04 15:03:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:06:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:06:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:10:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:10:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:11:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:11:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:11:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:11:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:11:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:11:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:11:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:11:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:17:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:17:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:17:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:17:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:20:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:20:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:20:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:20:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:21:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:21:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:23:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:23:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-04 15:23:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-02-04 15:23:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}