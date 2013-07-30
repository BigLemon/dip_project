<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-03 05:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-03 05:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-03 05:01:23 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('fghfg', 'fghfg', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 05:01:23 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('fghfg', 'fghfg', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\courses.php(102): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-03 05:10:58 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('fghfg', 'fghfg', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 05:10:58 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('fghfg', 'fghfg', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\courses.php(102): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-03 05:11:13 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('fghfg', 'fghfg', '7', '2', '0') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 05:11:13 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('fghfg', 'fghfg', '7', '2', '0') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\courses.php(102): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-03 05:20:35 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('укеукеукеуке', 'fghfg', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 05:20:35 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('укеукеукеуке', 'fghfg', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\courses.php(102): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-02-03 05:24:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-03 05:24:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-03 05:27:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-03 05:27:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-03 05:56:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-03 05:56:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-03 05:56:35 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-03 05:56:35 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-03 05:56:46 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-03 05:56:46 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-03 06:02:39 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-03 06:02:39 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-03 06:06:55 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-03 06:06:55 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-03 06:07:03 --- ERROR: Kohana_Exception [ 0 ]: The test property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-03 06:07:03 --- STRACE: Kohana_Exception [ 0 ]: The test property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->__get('test')
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-03 07:08:15 --- ERROR: Kohana_Exception [ 0 ]: The test property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-03 07:08:15 --- STRACE: Kohana_Exception [ 0 ]: The test property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(48): Kohana_ORM->__get('test')
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-03 07:08:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 07:08:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 07:11:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 07:11:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 07:19:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\index\courses.php [ 49 ]
2013-02-03 07:19:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\index\courses.php [ 49 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(49): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Courses->action_view(Object(Controller_Index_Courses))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-03 07:20:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 07:20:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 07:21:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 07:21:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 07:23:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 07:23:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 07:23:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 07:23:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 07:23:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 07:23:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 07:24:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 07:24:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 07:26:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 07:26:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 07:27:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\index\courses.php [ 45 ]
2013-02-03 07:27:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\index\courses.php [ 45 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(45): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Courses->action_view(Object(Controller_Index_Courses))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-03 07:27:37 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\index\courses.php [ 45 ]
2013-02-03 07:27:37 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\index\courses.php [ 45 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(45): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Courses->action_view(Object(Controller_Index_Courses))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-03 07:27:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\index\courses.php [ 45 ]
2013-02-03 07:27:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\index\courses.php [ 45 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(45): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Courses->action_view(Object(Controller_Index_Courses))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-03 07:33:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH\views\index\courses\view.php [ 29 ]
2013-02-03 07:33:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH\views\index\courses\view.php [ 29 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\courses\view.php(29): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-03 08:05:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-02-03 08:05:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-03 08:32:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 08:32:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 08:33:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 08:33:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 12:41:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 12:41:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 12:41:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 12:41:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 12:43:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 12:43:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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
2013-02-03 12:43:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-03 12:43:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.user_id' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` JOIN `testresults` ON (`testresults`.`test_id` = `test`.`id`) WHERE `testresults`.`user_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
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