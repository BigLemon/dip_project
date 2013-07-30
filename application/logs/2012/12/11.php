<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-11 08:53:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
2012-12-11 08:53:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 45, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 08:55:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\tutor\rating.php [ 40 ]
2012-12-11 08:55:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\tutor\rating.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:00:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\views\tutor\rating\view.php [ 39 ]
2012-12-11 09:00:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\views\tutor\rating\view.php [ 39 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 39, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 09:02:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH\views\tutor\rating\view.php [ 50 ]
2012-12-11 09:02:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH\views\tutor\rating\view.php [ 50 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 09:02:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:02:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:03:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:03:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:04:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:04:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$courses ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:04:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\classes\controller\tutor\rating.php [ 52 ]
2012-12-11 09:04:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\classes\controller\tutor\rating.php [ 52 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 52, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:18:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2012-12-11 09:18:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 41, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:25:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2012-12-11 09:25:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 41, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:25:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2012-12-11 09:25:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 41, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:27:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2012-12-11 09:27:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 41, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 09:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 09:29:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2012-12-11 09:29:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 41, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:36:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\tutor\rating.php [ 40 ]
2012-12-11 09:36:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\tutor\rating.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:47:13 --- ERROR: ErrorException [ 8 ]: Use of undefined constant course_id - assumed 'course_id' ~ APPPATH\classes\controller\tutor\rating.php [ 40 ]
2012-12-11 09:47:13 --- STRACE: ErrorException [ 8 ]: Use of undefined constant course_id - assumed 'course_id' ~ APPPATH\classes\controller\tutor\rating.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(40): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 40, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:48:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:48:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:48:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:48:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:48:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:48:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:48:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:48:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:50:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:50:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:50:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:50:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:50:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:50:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:51:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 40 ]
2012-12-11 09:51:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 09:51:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 09:51:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:55:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-11 09:55:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:56:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-11 09:56:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:56:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 40 ]
2012-12-11 09:56:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 09:57:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 40 ]
2012-12-11 09:57:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 09:58:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2012-12-11 09:58:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 41, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 09:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 09:59:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\index\tests.php [ 19 ]
2012-12-11 09:59:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\index\tests.php [ 19 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 19, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 09:59:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 40 ]
2012-12-11 09:59:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 10:00:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:00:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:00:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:00:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:00:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:00:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:03:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:03:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:03:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:03:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:03:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:03:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:03:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:03:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:06:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:06:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:07:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:07:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:09:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:09:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:09:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:09:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:11:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\tutor\rating.php [ 43 ]
2012-12-11 10:11:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\tutor\rating.php [ 43 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 43, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:11:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\tutor\rating.php [ 43 ]
2012-12-11 10:11:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\tutor\rating.php [ 43 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 43, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:13:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:13:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:13:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
2012-12-11 10:13:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 42 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 42, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:14:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\classes\controller\tutor\rating.php [ 54 ]
2012-12-11 10:14:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\classes\controller\tutor\rating.php [ 54 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 54, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 10:14:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 40 ]
2012-12-11 10:14:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 10:15:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\views\tutor\rating\view.php [ 40 ]
2012-12-11 10:15:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\views\tutor\rating\view.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 10:15:54 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-11 10:15:54 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(42): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 10:16:07 --- ERROR: Kohana_Exception [ 0 ]: The student property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-11 10:16:07 --- STRACE: Kohana_Exception [ 0 ]: The student property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(42): Kohana_ORM->__get('student')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 10:16:49 --- ERROR: Kohana_Exception [ 0 ]: The student property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-11 10:16:49 --- STRACE: Kohana_Exception [ 0 ]: The student property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(42): Kohana_ORM->__get('student')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 10:17:04 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-11 10:17:04 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(42): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 10:18:51 --- ERROR: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-11 10:18:51 --- STRACE: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(42): Kohana_ORM->__get('users')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 10:21:37 --- ERROR: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-11 10:21:37 --- STRACE: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(42): Kohana_ORM->__get('users')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 10:23:42 --- ERROR: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-11 10:23:42 --- STRACE: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(42): Kohana_ORM->__get('users')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 10:28:18 --- ERROR: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-11 10:28:18 --- STRACE: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(42): Kohana_ORM->__get('users')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 11:00:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2012-12-11 11:00:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 41, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 11:00:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2012-12-11 11:00:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 41, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 11:39:27 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.question' doesn't exist [ SHOW FULL COLUMNS FROM `question` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-12-11 11:39:27 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.question' doesn't exist [ SHOW FULL COLUMNS FROM `question` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('question')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(18): Kohana_ORM::factory('question')
#7 [internal function]: Controller_Index_Tests->action_index()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2012-12-11 11:44:18 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.question' doesn't exist [ SHOW FULL COLUMNS FROM `question` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-12-11 11:44:18 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.question' doesn't exist [ SHOW FULL COLUMNS FROM `question` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('question')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(18): Kohana_ORM::factory('question')
#7 [internal function]: Controller_Index_Tests->action_index()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2012-12-11 11:44:21 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.question' doesn't exist [ SHOW FULL COLUMNS FROM `question` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-12-11 11:44:21 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.question' doesn't exist [ SHOW FULL COLUMNS FROM `question` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('question')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(18): Kohana_ORM::factory('question')
#7 [internal function]: Controller_Index_Tests->action_index()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2012-12-11 11:44:22 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.question' doesn't exist [ SHOW FULL COLUMNS FROM `question` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-12-11 11:44:22 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.question' doesn't exist [ SHOW FULL COLUMNS FROM `question` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('question')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(18): Kohana_ORM::factory('question')
#7 [internal function]: Controller_Index_Tests->action_index()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2012-12-11 11:44:25 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.question' doesn't exist [ SHOW FULL COLUMNS FROM `question` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-12-11 11:44:25 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.question' doesn't exist [ SHOW FULL COLUMNS FROM `question` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('question')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(18): Kohana_ORM::factory('question')
#7 [internal function]: Controller_Index_Tests->action_index()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2012-12-11 11:44:40 --- ERROR: ErrorException [ 1 ]: Class 'Model_Questions' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-12-11 11:44:40 --- STRACE: ErrorException [ 1 ]: Class 'Model_Questions' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 11:45:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH\classes\controller\index\tests.php [ 40 ]
2012-12-11 11:45:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: question ~ APPPATH\classes\controller\index\tests.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 11:45:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\index\tests\index.php [ 20 ]
2012-12-11 11:45:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\index\tests\index.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 11:45:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\index\tests\index.php [ 21 ]
2012-12-11 11:45:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\index\tests\index.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 11:46:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\index\tests.php [ 19 ]
2012-12-11 11:46:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\index\tests.php [ 19 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 19, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 11:46:51 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.qanswer' doesn't exist [ SELECT `answer`.* FROM `answers` AS `answer` JOIN `qanswer` ON (`qanswer`.`answer_id` = `answer`.`id`) WHERE `qanswer`.`question_id` = '5' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-12-11 11:46:51 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.qanswer' doesn't exist [ SELECT `answer`.* FROM `answers` AS `answer` JOIN `qanswer` ON (`qanswer`.`answer_id` = `answer`.`id`) WHERE `qanswer`.`question_id` = '5' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `answer`...', 'Model_Answer', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\views\index\tests\index.php(20): Kohana_ORM->find_all()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#9 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#10 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#13 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#16 {main}
2012-12-11 11:56:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 11:56:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 11:58:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 11:58:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 12:01:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 12:01:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 12:26:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2012-12-11 12:26:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\base.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 6, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-11 12:27:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
2012-12-11 12:27:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\result.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 12:27:58 --- ERROR: ErrorException [ 8 ]: Undefined index: question ~ APPPATH\classes\controller\index\tests.php [ 63 ]
2012-12-11 12:27:58 --- STRACE: ErrorException [ 8 ]: Undefined index: question ~ APPPATH\classes\controller\index\tests.php [ 63 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 63, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 12:28:06 --- ERROR: ErrorException [ 8 ]: Undefined index: questions ~ APPPATH\classes\controller\index\tests.php [ 63 ]
2012-12-11 12:28:06 --- STRACE: ErrorException [ 8 ]: Undefined index: questions ~ APPPATH\classes\controller\index\tests.php [ 63 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(63): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 63, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 12:29:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH\classes\controller\index\tests.php [ 63 ]
2012-12-11 12:29:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: questions ~ APPPATH\classes\controller\index\tests.php [ 63 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 63, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 12:30:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
2012-12-11 12:30:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\result.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 12:36:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\classes\controller\index\tests.php [ 64 ]
2012-12-11 12:36:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH\classes\controller\index\tests.php [ 64 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 64, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 12:36:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
2012-12-11 12:36:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\result.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 12:40:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
2012-12-11 12:40:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\result.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 12:41:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
2012-12-11 12:41:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\result.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 12:44:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
2012-12-11 12:44:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\result.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 12:46:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\classes\controller\index\tests.php [ 46 ]
2012-12-11 12:46:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\classes\controller\index\tests.php [ 46 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 46, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 12:52:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_Qanswer' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-12-11 12:52:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_Qanswer' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 13:18:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'rightv' in 'where clause' [ SELECT `answer`.* FROM `answers` AS `answer` WHERE `rightv` = 1 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-12-11 13:18:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'rightv' in 'where clause' [ SELECT `answer`.* FROM `answers` AS `answer` WHERE `rightv` = 1 LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `answer`...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(37): Kohana_ORM->find()
#4 [internal function]: Controller_Index_Tests->action_go()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-11 13:21:12 --- ERROR: ErrorException [ 8 ]: Undefined index: question ~ APPPATH\classes\controller\index\tests.php [ 33 ]
2012-12-11 13:21:12 --- STRACE: ErrorException [ 8 ]: Undefined index: question ~ APPPATH\classes\controller\index\tests.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 33, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 13:21:21 --- ERROR: ErrorException [ 8 ]: Undefined index: questions ~ APPPATH\classes\controller\index\tests.php [ 33 ]
2012-12-11 13:21:21 --- STRACE: ErrorException [ 8 ]: Undefined index: questions ~ APPPATH\classes\controller\index\tests.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 33, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 13:29:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
2012-12-11 13:29:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: points ~ APPPATH\views\index\tests\result.php [ 16 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\result.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 13:35:17 --- ERROR: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\classes\controller\index\tests.php [ 39 ]
2012-12-11 13:35:17 --- STRACE: ErrorException [ 8 ]: Undefined index: value ~ APPPATH\classes\controller\index\tests.php [ 39 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 13:43:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 13:43:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 13:45:36 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\index\tests.php [ 39 ]
2012-12-11 13:45:36 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\index\tests.php [ 39 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 13:48:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\index\tests.php [ 40 ]
2012-12-11 13:48:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\index\tests.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 13:52:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\index\tests.php [ 40 ]
2012-12-11 13:52:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\index\tests.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 13:58:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\classes\controller\index\tests.php [ 33 ]
2012-12-11 13:58:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\classes\controller\index\tests.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 33, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 13:58:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\classes\controller\index\tests.php [ 33 ]
2012-12-11 13:58:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\classes\controller\index\tests.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 33, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 13:58:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\classes\controller\index\tests.php [ 33 ]
2012-12-11 13:58:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\classes\controller\index\tests.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 33, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-11 14:15:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\views\index\tests\index.php [ 21 ]
2012-12-11 14:15:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\views\index\tests\index.php [ 21 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\index.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 21, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 14:15:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\views\index\tests\index.php [ 21 ]
2012-12-11 14:15:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: ans ~ APPPATH\views\index\tests\index.php [ 21 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\index.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 21, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-11 14:37:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 14:37:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 14:37:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 14:37:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 14:39:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 14:39:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 14:39:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 14:39:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 14:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 14:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 14:42:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-11 14:42:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 15:02:12 --- ERROR: ErrorException [ 1 ]: Class 'Model_Qanswer' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-12-11 15:02:12 --- STRACE: ErrorException [ 1 ]: Class 'Model_Qanswer' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 15:09:04 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete question model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-12-11 15:09:04 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete question model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(96): Kohana_ORM->delete()
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}