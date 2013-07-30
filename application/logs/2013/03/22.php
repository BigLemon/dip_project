<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-22 08:40:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-22 08:40:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-22 08:52:02 --- ERROR: ErrorException [ 2 ]: fopen(user_1/abc.php) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\index\inc.php [ 39 ]
2013-03-22 08:52:02 --- STRACE: ErrorException [ 2 ]: fopen(user_1/abc.php) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\index\inc.php [ 39 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(39): Kohana_Core::error_handler('user_1/abc.php', 'w')
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 08:55:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 47 ]
2013-03-22 08:55:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 08:59:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 47 ]
2013-03-22 08:59:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 09:00:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 47 ]
2013-03-22 09:00:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 09:01:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 47 ]
2013-03-22 09:01:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 09:02:41 --- ERROR: ErrorException [ 1 ]: Call to undefined function  file_exist() ~ APPPATH\classes\controller\index\inc.php [ 38 ]
2013-03-22 09:02:41 --- STRACE: ErrorException [ 1 ]: Call to undefined function  file_exist() ~ APPPATH\classes\controller\index\inc.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-03-22 09:03:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 47 ]
2013-03-22 09:03:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 09:03:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_{$id}/abc.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-22 09:03:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user_{$id}/abc.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-22 09:12:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 48 ]
2013-03-22 09:12:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 48 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(48): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 09:43:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: ex ~ APPPATH\views\inc\outresult.php [ 23 ]
2013-03-22 09:43:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: ex ~ APPPATH\views\inc\outresult.php [ 23 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\inc\outresult.php(23): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\admin\base.php(96): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Inc))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-22 09:45:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: ex ~ APPPATH\views\inc\outresult.php [ 23 ]
2013-03-22 09:45:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: ex ~ APPPATH\views\inc\outresult.php [ 23 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\inc\outresult.php(23): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\admin\base.php(96): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Inc))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-22 09:46:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: ex ~ APPPATH\views\inc\outresult.php [ 23 ]
2013-03-22 09:46:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: ex ~ APPPATH\views\inc\outresult.php [ 23 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\inc\outresult.php(23): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\admin\base.php(96): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Inc))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-22 09:46:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: lab_id ~ APPPATH\views\inc\outresult.php [ 51 ]
2013-03-22 09:46:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: lab_id ~ APPPATH\views\inc\outresult.php [ 51 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\inc\outresult.php(51): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\admin\base.php(96): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Inc))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-22 10:10:52 --- ERROR: ErrorException [ 2 ]: fclose(): supplied argument is not a valid stream resource ~ APPPATH\classes\controller\index\inc.php [ 43 ]
2013-03-22 10:10:52 --- STRACE: ErrorException [ 2 ]: fclose(): supplied argument is not a valid stream resource ~ APPPATH\classes\controller\index\inc.php [ 43 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(43): Kohana_Core::error_handler('user_1/lab_1.ph...')
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 11:53:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-22 11:53:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-22 13:35:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-03-22 13:35:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-03-22 14:07:01 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\index\user\profile.php [ 85 ]
2013-03-22 14:07:01 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\index\user\profile.php [ 85 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-03-22 14:14:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\controller\index\user.php [ 34 ]
2013-03-22 14:14:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\classes\controller\index\user.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(34): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:20:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 37 ]
2013-03-22 14:20:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(37): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:21:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 40 ]
2013-03-22 14:21:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 40 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(40): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:23:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\views\index\user\profile.php [ 82 ]
2013-03-22 14:23:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH\views\index\user\profile.php [ 82 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\user\profile.php(82): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_User))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-22 14:26:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-22 14:26:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-22 14:27:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\user\profile.php [ 85 ]
2013-03-22 14:27:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\user\profile.php [ 85 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\user\profile.php(85): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_User))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-22 14:27:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\user\profile.php [ 85 ]
2013-03-22 14:27:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\user\profile.php [ 85 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\user\profile.php(85): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_User))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-22 14:28:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-22 14:28:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-22 14:30:41 --- ERROR: ErrorException [ 2 ]: opendir(user_2) [function.opendir]: failed to open dir: No error ~ APPPATH\classes\controller\index\user.php [ 19 ]
2013-03-22 14:30:41 --- STRACE: ErrorException [ 2 ]: opendir(user_2) [function.opendir]: failed to open dir: No error ~ APPPATH\classes\controller\index\user.php [ 19 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(19): Kohana_Core::error_handler('user_2')
#1 [internal function]: Controller_Index_User->action_index()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:35:18 --- ERROR: ErrorException [ 2 ]: opendir(user_2) [function.opendir]: failed to open dir: No error ~ APPPATH\classes\controller\index\user.php [ 18 ]
2013-03-22 14:35:18 --- STRACE: ErrorException [ 2 ]: opendir(user_2) [function.opendir]: failed to open dir: No error ~ APPPATH\classes\controller\index\user.php [ 18 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(18): Kohana_Core::error_handler('user_2')
#1 [internal function]: Controller_Index_User->action_index()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:36:01 --- ERROR: ErrorException [ 2 ]: opendir(user_2) [function.opendir]: failed to open dir: No error ~ APPPATH\classes\controller\index\user.php [ 19 ]
2013-03-22 14:36:01 --- STRACE: ErrorException [ 2 ]: opendir(user_2) [function.opendir]: failed to open dir: No error ~ APPPATH\classes\controller\index\user.php [ 19 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(19): Kohana_Core::error_handler('user_2')
#1 [internal function]: Controller_Index_User->action_index()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:37:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 30 ]
2013-03-22 14:37:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 30 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(30): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:37:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 30 ]
2013-03-22 14:37:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 30 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(30): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:37:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 30 ]
2013-03-22 14:37:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 30 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(30): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:38:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 34 ]
2013-03-22 14:38:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: files ~ APPPATH\classes\controller\index\user.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(34): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:38:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
2013-03-22 14:38:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(35): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:40:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
2013-03-22 14:40:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(35): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:40:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
2013-03-22 14:40:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(35): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:40:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
2013-03-22 14:40:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(35): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:40:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
2013-03-22 14:40:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(35): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:43:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
2013-03-22 14:43:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(35): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:43:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
2013-03-22 14:43:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(35): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:43:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
2013-03-22 14:43:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\user.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\user.php(35): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_User->action_index(Object(Controller_Index_User))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-22 14:43:44 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\user\profile.php [ 90 ]
2013-03-22 14:43:44 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\user\profile.php [ 90 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\user\profile.php(90): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_User))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-22 14:44:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\index\user\profile.php [ 90 ]
2013-03-22 14:44:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\index\user\profile.php [ 90 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-03-22 15:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-22 15:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}