<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-10 03:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-10 03:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-10 04:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-10 04:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-10 12:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-10 12:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-10 12:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-10 12:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-10 12:11:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-10 12:11:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-10 12:11:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\tutor\labs\list.php [ 24 ]
2013-04-10 12:11:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\tutor\labs\list.php [ 24 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\labs\list.php(24): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-10 12:16:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\tutor\labs\list.php [ 24 ]
2013-04-10 12:16:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\tutor\labs\list.php [ 24 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\labs\list.php(24): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-10 12:16:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH\views\tutor\labs\list.php [ 29 ]
2013-04-10 12:16:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH\views\tutor\labs\list.php [ 29 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\labs\list.php(29): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-10 12:17:09 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Lab as array ~ APPPATH\views\tutor\labs\list.php [ 29 ]
2013-04-10 12:17:09 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Lab as array ~ APPPATH\views\tutor\labs\list.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-10 12:22:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
2013-04-10 12:22:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\courses\view.php(23): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-10 12:23:10 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Exercise as array ~ APPPATH\views\tutor\labs\view.php [ 36 ]
2013-04-10 12:23:10 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Exercise as array ~ APPPATH\views\tutor\labs\view.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-10 12:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/labs/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-10 12:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/labs/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-10 12:40:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/labs/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-10 12:40:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/labs/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-10 12:48:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/labs/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-10 12:48:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/labs/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-10 12:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-10 12:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-10 12:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-10 12:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-10 12:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-10 12:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-10 12:59:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-10 12:59:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-10 12:59:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-10 12:59:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-10 13:00:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-10 13:00:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-10 13:10:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-10 13:10:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/exercise/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}