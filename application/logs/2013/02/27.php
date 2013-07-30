<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-27 09:13:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\controller\tutor\rating.php [ 92 ]
2013-02-27 09:13:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\controller\tutor\rating.php [ 92 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(92): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 09:15:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 40 ]
2013-02-27 09:15:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 40 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(40): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-27 09:15:33 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 40 ]
2013-02-27 09:15:33 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 40 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(40): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-27 09:33:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 09:33:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 09:38:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\index\tests.php [ 47 ]
2013-02-27 09:38:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\index\tests.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Tests->action_go(Object(Controller_Index_Tests))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 09:38:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresults ~ APPPATH\classes\controller\index\tests.php [ 47 ]
2013-02-27 09:38:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresults ~ APPPATH\classes\controller\index\tests.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Tests->action_go(Object(Controller_Index_Tests))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 09:38:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$qanswer ~ APPPATH\classes\controller\index\tests.php [ 47 ]
2013-02-27 09:38:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$qanswer ~ APPPATH\classes\controller\index\tests.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Tests->action_go(Object(Controller_Index_Tests))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 09:38:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$qanswers ~ APPPATH\classes\controller\index\tests.php [ 47 ]
2013-02-27 09:38:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$qanswers ~ APPPATH\classes\controller\index\tests.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Tests->action_go(Object(Controller_Index_Tests))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 09:39:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answers ~ APPPATH\classes\controller\index\tests.php [ 47 ]
2013-02-27 09:39:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answers ~ APPPATH\classes\controller\index\tests.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Tests->action_go(Object(Controller_Index_Tests))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 10:02:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 10:02:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 10:03:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$right ~ APPPATH\classes\controller\index\tests.php [ 54 ]
2013-02-27 10:03:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$right ~ APPPATH\classes\controller\index\tests.php [ 54 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(54): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Tests->action_go(Object(Controller_Index_Tests))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 10:07:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$right ~ APPPATH\classes\controller\index\tests.php [ 55 ]
2013-02-27 10:07:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$right ~ APPPATH\classes\controller\index\tests.php [ 55 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(55): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Tests->action_go(Object(Controller_Index_Tests))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 10:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 10:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 10:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 10:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 10:23:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 10:23:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 10:25:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: countres ~ APPPATH\classes\controller\index\tests.php [ 63 ]
2013-02-27 10:25:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: countres ~ APPPATH\classes\controller\index\tests.php [ 63 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Tests->action_go(Object(Controller_Index_Tests))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 10:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 10:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 10:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 10:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 10:44:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\classes\controller\index\courses.php [ 55 ]
2013-02-27 10:44:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\classes\controller\index\courses.php [ 55 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(55): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Courses->action_view(Object(Controller_Index_Courses))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 10:46:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\classes\controller\index\courses.php [ 60 ]
2013-02-27 10:46:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\classes\controller\index\courses.php [ 60 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Courses->action_view(Object(Controller_Index_Courses))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 10:46:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\views\index\courses\view.php [ 34 ]
2013-02-27 10:46:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\views\index\courses\view.php [ 34 ]
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
2013-02-27 10:46:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH\views\index\courses\view.php [ 37 ]
2013-02-27 10:46:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH\views\index\courses\view.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-27 10:47:01 --- ERROR: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\index\courses\view.php [ 40 ]
2013-02-27 10:47:01 --- STRACE: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\index\courses\view.php [ 40 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\courses\view.php(40): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-27 10:47:22 --- ERROR: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\index\courses\view.php [ 40 ]
2013-02-27 10:47:22 --- STRACE: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\index\courses\view.php [ 40 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\courses\view.php(40): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-27 10:49:32 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-27 10:49:32 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(19): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 10:49:39 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-27 10:49:39 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(19): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 11:04:21 --- ERROR: Kohana_Exception [ 0 ]: The norepeat property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-27 11:04:21 --- STRACE: Kohana_Exception [ 0 ]: The norepeat property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(31): Kohana_ORM->__get('norepeat')
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 11:04:39 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\classes\controller\index\tests.php [ 31 ]
2013-02-27 11:04:39 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Test as array ~ APPPATH\classes\controller\index\tests.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-27 11:13:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\index\tests\index.php [ 19 ]
2013-02-27 11:13:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH\views\index\tests\index.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-27 11:17:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 11:17:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 11:17:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2013-02-27 11:17:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(6): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Tests))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-27 11:20:54 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.test' doesn't exist [ SELECT * FROM `testresults` JOIN `test` ON (`test`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 11:20:54 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.test' doesn't exist [ SELECT * FROM `testresults` JOIN `test` ON (`test`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(29): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 11:21:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT * FROM `testresults` JOIN `tests` ON (`tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 11:21:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT * FROM `testresults` JOIN `tests` ON (`tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(29): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 11:21:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT * FROM `testresults` JOIN `tests` ON (`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 11:21:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT * FROM `testresults` JOIN `tests` ON (`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(29): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 11:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 11:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 11:54:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 11:54:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 11:54:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 11:54:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 11:54:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 11:54:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 11:55:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 11:55:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 11:57:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 11:57:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 11:57:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 11:57:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'norepeat' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test` AND `tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(31): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 11:59:07 --- ERROR: Database_Exception [ 1066 ]: Not unique table/alias: 'tests' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) JOIN `tests` ON (`tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 11:59:07 --- STRACE: Database_Exception [ 1066 ]: Not unique table/alias: 'tests' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) JOIN `tests` ON (`tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(32): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 12:00:05 --- ERROR: Database_Exception [ 1066 ]: Not unique table/alias: 'tests' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) JOIN `tests` ON (`tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 12:00:05 --- STRACE: Database_Exception [ 1066 ]: Not unique table/alias: 'tests' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) JOIN `tests` ON (`tests`.`type` = `norepeat`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(32): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 12:00:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 12:00:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 12:08:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 12:08:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 12:09:09 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 12:09:09 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 12:11:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 12:11:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 12:16:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 12:16:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 12:17:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 12:17:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresults`.`id_user`, `testresults`.`id_test`, `testresults`.`result`, `tests`.`type` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `1`) WHERE `id_user` = '1' AND `id_test` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Tests->action_index()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 12:22:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2013-02-27 12:22:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(6): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Tests))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-27 12:23:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2013-02-27 12:23:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(6): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Tests))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-27 12:23:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2013-02-27 12:23:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(6): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Tests))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-27 12:23:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 129 ]
2013-02-27 12:23:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 129 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Tests))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-27 12:23:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 129 ]
2013-02-27 12:23:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 129 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Tests))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-27 12:32:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 129 ]
2013-02-27 12:32:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 129 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Tests))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-27 12:34:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 12:34:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 12:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-27 12:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-27 13:02:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::and() ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
2013-02-27 13:02:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::and() ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-27 13:02:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tests.course_id' in 'having clause' [ SELECT `result` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) HAVING `tests`.`course_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 13:02:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tests.course_id' in 'having clause' [ SELECT `result` FROM `testresults` JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) HAVING `tests`.`course_id` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(49): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 13:04:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::and() ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
2013-02-27 13:04:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::and() ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-27 13:16:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\view.php [ 41 ]
2013-02-27 13:16:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\view.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(41): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-27 13:20:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\tutor\rating\view.php [ 117 ]
2013-02-27 13:20:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\tutor\rating\view.php [ 117 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-27 13:21:04 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131072001 bytes) ~ APPPATH\views\tutor\rating\view.php [ 46 ]
2013-02-27 13:21:04 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131072001 bytes) ~ APPPATH\views\tutor\rating\view.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-27 13:22:08 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131072001 bytes) ~ APPPATH\views\tutor\rating\view.php [ 46 ]
2013-02-27 13:22:08 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131072001 bytes) ~ APPPATH\views\tutor\rating\view.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-27 13:22:19 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\view.php [ 52 ]
2013-02-27 13:22:19 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\view.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-27 13:23:49 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131072001 bytes) ~ APPPATH\views\tutor\rating\view.php [ 46 ]
2013-02-27 13:23:49 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 131072001 bytes) ~ APPPATH\views\tutor\rating\view.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-27 14:00:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 14:00:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-27 14:01:04 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 516 ]
2013-02-27 14:01:04 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 516 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database.php(516): Kohana_Core::error_handler(Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder\join.php(126): Kohana_Database->quote_column(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder.php(27): Kohana_Database_Query_Builder_Join->compile(Object(Database_MySQL), Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder\select.php(364): Kohana_Database_Query_Builder->_compile_join(Object(Database_MySQL))
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile()
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#6 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-02-27 14:02:16 --- ERROR: ErrorException [ 8 ]: Use of undefined constant users - assumed 'users' ~ APPPATH\classes\controller\tutor\rating.php [ 47 ]
2013-02-27 14:02:16 --- STRACE: ErrorException [ 8 ]: Use of undefined constant users - assumed 'users' ~ APPPATH\classes\controller\tutor\rating.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-27 14:02:28 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 516 ]
2013-02-27 14:02:28 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 516 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database.php(516): Kohana_Core::error_handler(Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder\join.php(126): Kohana_Database->quote_column(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder.php(27): Kohana_Database_Query_Builder_Join->compile(Object(Database_MySQL), Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder\select.php(364): Kohana_Database_Query_Builder->_compile_join(Object(Database_MySQL))
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile()
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#6 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-02-27 14:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL openserver was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-02-27 14:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL openserver was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-27 14:04:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-27 14:04:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) JOIN `tests` ON (`tests`.`id` = `testresults`.`id_test`) WHERE `usercourses`.`course_id` = '1' AND `tests`.`course_id` = '1' AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}