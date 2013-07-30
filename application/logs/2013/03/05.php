<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-05 08:53:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-05 08:53:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-05 09:21:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-05 09:21:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-05 09:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 09:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:36:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 09:36:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:39:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 09:39:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 09:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 09:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-05 10:31:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-05 10:31:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-05 11:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-05 11:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}