<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-11 11:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-11 11:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-11 11:01:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:01:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:01:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-11 11:01:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-11 11:03:57 --- ERROR: View_Exception [ 0 ]: The requested view tutor/questions/list could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-04-11 11:03:57 --- STRACE: View_Exception [ 0 ]: The requested view tutor/questions/list could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(137): Kohana_View->set_filename('tutor/questions...')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(30): Kohana_View->__construct('tutor/questions...', Array)
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(21): Kohana_View::factory('tutor/questions...', Array)
#3 [internal function]: Controller_Tutor_Questions->action_index()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-11 11:04:03 --- ERROR: View_Exception [ 0 ]: The requested view tutor/questions/list could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-04-11 11:04:03 --- STRACE: View_Exception [ 0 ]: The requested view tutor/questions/list could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(137): Kohana_View->set_filename('tutor/questions...')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(30): Kohana_View->__construct('tutor/questions...', Array)
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(21): Kohana_View::factory('tutor/questions...', Array)
#3 [internal function]: Controller_Tutor_Questions->action_index()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-11 11:05:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/labs/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:05:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/labs/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:05:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-11 11:05:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-11 11:06:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-11 11:06:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-11 11:06:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\views\tutor\exercise\edit.php [ 24 ]
2013-04-11 11:06:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\views\tutor\exercise\edit.php [ 24 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\exercise\edit.php(24): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Exercise))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-11 11:15:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\views\tutor\exercise\edit.php [ 48 ]
2013-04-11 11:15:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\views\tutor\exercise\edit.php [ 48 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\exercise\edit.php(48): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Exercise))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-11 11:16:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:16:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:18:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:18:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:19:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:19:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:25:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:25:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:26:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:26:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:30:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:30:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:31:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:31:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:32:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:32:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:33:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:33:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:33:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:33:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:42:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:42:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:47:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:47:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:48:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:48:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:49:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:49:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:49:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:49:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:52:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:52:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:53:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:53:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:54:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:54:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:55:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:55:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 11:56:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 11:56:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 12:28:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 12:28:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 12:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 12:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 12:30:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 12:30:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-11 12:30:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-11 12:30:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}