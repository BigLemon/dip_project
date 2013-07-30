<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-08 10:33:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 10:33:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 10:36:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 10:36:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:31:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:31:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:31:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:31:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:32:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:32:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:35:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:35:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:35:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:35:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:36:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:36:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:38:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:38:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:43:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:43:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:44:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'usersid' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:44:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'usersid' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:45:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users//id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:45:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users//id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:45:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = '/users.id/' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:45:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = '/users.id/' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:45:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-08 11:45:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_tuto...')
#1 {main}
2013-04-08 11:45:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'usersid' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:45:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'usersid' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:46:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:46:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 11:46:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 11:46:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 12:03:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\classes\controller\tutor\rating.php [ 70 ]
2013-04-08 12:03:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\classes\controller\tutor\rating.php [ 70 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(70): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:04:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: qu ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
2013-04-08 12:04:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: qu ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:05:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: qu ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
2013-04-08 12:05:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: qu ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:37:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: qu ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
2013-04-08 12:37:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: qu ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:40:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: qu ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
2013-04-08 12:40:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: qu ~ APPPATH\classes\controller\tutor\rating.php [ 46 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(46): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:42:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: qu ~ APPPATH\classes\controller\tutor\rating.php [ 47 ]
2013-04-08 12:42:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: qu ~ APPPATH\classes\controller\tutor\rating.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:42:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\classes\controller\tutor\rating.php [ 73 ]
2013-04-08 12:42:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\classes\controller\tutor\rating.php [ 73 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(73): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:43:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\classes\controller\tutor\rating.php [ 73 ]
2013-04-08 12:43:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\classes\controller\tutor\rating.php [ 73 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(73): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:43:36 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-08 12:43:36 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
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
2013-04-08 12:44:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\tutor\rating\view.php [ 50 ]
2013-04-08 12:44:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\tutor\rating\view.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-08 12:45:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\tutor\rating\view.php [ 115 ]
2013-04-08 12:45:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\tutor\rating\view.php [ 115 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-08 12:49:13 --- ERROR: ErrorException [ 2 ]: mysqli_fetch_array() expects parameter 1 to be mysqli_result, string given ~ APPPATH\classes\controller\tutor\rating.php [ 55 ]
2013-04-08 12:49:13 --- STRACE: ErrorException [ 2 ]: mysqli_fetch_array() expects parameter 1 to be mysqli_result, string given ~ APPPATH\classes\controller\tutor\rating.php [ 55 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(55): Kohana_Core::error_handler('       <???    ...')
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:49:25 --- ERROR: ErrorException [ 2 ]: mysql_fetch_array(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 55 ]
2013-04-08 12:49:25 --- STRACE: ErrorException [ 2 ]: mysql_fetch_array(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 55 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(55): Kohana_Core::error_handler('       <???    ...')
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:50:02 --- ERROR: ErrorException [ 2 ]: mysql_fetch_array(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 55 ]
2013-04-08 12:50:02 --- STRACE: ErrorException [ 2 ]: mysql_fetch_array(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 55 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(55): Kohana_Core::error_handler('       <???    ...')
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 12:50:58 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\controller\tutor\rating.php [ 57 ]
2013-04-08 12:50:58 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\controller\tutor\rating.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-08 12:58:30 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\controller\tutor\rating.php [ 59 ]
2013-04-08 12:58:30 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\controller\tutor\rating.php [ 59 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-08 12:58:30 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Course as array ~ APPPATH\views\tutor\rating\view.php [ 40 ]
2013-04-08 12:58:30 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Course as array ~ APPPATH\views\tutor\rating\view.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-08 12:58:31 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Course as array ~ APPPATH\views\tutor\rating\view.php [ 40 ]
2013-04-08 12:58:31 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Course as array ~ APPPATH\views\tutor\rating\view.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-08 12:59:07 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-08 12:59:07 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
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
2013-04-08 13:04:29 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-08 13:04:29 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
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
2013-04-08 13:06:48 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-08 13:06:48 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
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
2013-04-08 13:07:23 --- ERROR: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\kohana\database\result.php [ 252 ]
2013-04-08 13:07:23 --- STRACE: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\kohana\database\result.php [ 252 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(44): Kohana_Database_Result->offsetSet(NULL, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 13:07:51 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-08 13:07:51 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
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
2013-04-08 13:09:01 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-08 13:09:01 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
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
2013-04-08 13:12:46 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-08 13:12:46 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\view.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-08 13:16:30 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-08 13:16:30 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\view.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-08 13:22:24 --- ERROR: ErrorException [ 1 ]: Call to undefined function  var_dup() ~ APPPATH\views\tutor\rating\view.php [ 38 ]
2013-04-08 13:22:24 --- STRACE: ErrorException [ 1 ]: Call to undefined function  var_dup() ~ APPPATH\views\tutor\rating\view.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-08 13:30:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-08 13:30:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
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
2013-04-08 13:31:01 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-08 13:31:01 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\rating\view.php [ 37 ]
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
2013-04-08 13:48:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 13:48:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(70): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 13:54:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 13:54:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`course_id` = `1`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`student_id` = 'users.id' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(70): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 13:57:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 13:57:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(70): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 13:59:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 13:59:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(70): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 13:59:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 13:59:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = `1`) WHERE `usercourses`.`course_id` = '1' AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(70): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 14:03:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `usercourses`.`course_id` = 1 AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-08 14:03:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `usercourses`.`course_id` = 1 AND `testresults`.`id_test` = 'test.id' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(70): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-08 14:04:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: row ~ APPPATH\classes\controller\tutor\rating.php [ 77 ]
2013-04-08 14:04:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: row ~ APPPATH\classes\controller\tutor\rating.php [ 77 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(77): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 14:09:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$lastname ~ APPPATH\classes\controller\tutor\rating.php [ 72 ]
2013-04-08 14:09:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$lastname ~ APPPATH\classes\controller\tutor\rating.php [ 72 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(72): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 14:23:52 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\tutor\rating.php [ 75 ]
2013-04-08 14:23:52 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\tutor\rating.php [ 75 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(75): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-08 14:25:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\views\tutor\rating\view.php [ 41 ]
2013-04-08 14:25:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH\views\tutor\rating\view.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}