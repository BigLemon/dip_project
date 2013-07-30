<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-29 06:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 06:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 07:27:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 07:27:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 07:29:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\base.php [ 96 ]
2013-01-29 07:29:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\base.php [ 96 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 96, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2013-01-29 07:30:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\classes\controller\lab\index.php [ 22 ]
2013-01-29 07:30:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\classes\controller\lab\index.php [ 22 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 22, Array)
#1 [internal function]: Controller_Lab_Index->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 07:33:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: lab ~ APPPATH\views\index\courses\view.php [ 28 ]
2013-01-29 07:33:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: lab ~ APPPATH\views\index\courses\view.php [ 28 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 07:37:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 28 ]
2013-01-29 07:37:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 28 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(28): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 07:39:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 28 ]
2013-01-29 07:39:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 28 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(28): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 07:44:21 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index\courses\view.php [ 28 ]
2013-01-29 07:44:21 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index\courses\view.php [ 28 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(28): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 07:44:57 --- ERROR: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\controller\index\courses.php [ 50 ]
2013-01-29 07:44:57 --- STRACE: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH\classes\controller\index\courses.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\courses.php(50): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 07:45:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 07:45:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 07:45:24 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index\courses\view.php [ 28 ]
2013-01-29 07:45:24 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index\courses\view.php [ 28 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(28): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 07:45:28 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index\courses\view.php [ 28 ]
2013-01-29 07:45:28 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index\courses\view.php [ 28 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(28): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 07:48:25 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 29 ]
2013-01-29 07:48:25 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 07:48:59 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 28 ]
2013-01-29 07:48:59 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 28 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(28): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 07:49:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 28 ]
2013-01-29 07:49:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 28 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(28): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 07:52:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\courses.php [ 47 ]
2013-01-29 07:52:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\courses.php [ 47 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\courses.php(47): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 47, Array)
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 07:53:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\classes\controller\index\courses.php [ 54 ]
2013-01-29 07:53:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\classes\controller\index\courses.php [ 54 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\courses.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 54, Array)
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 07:54:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\classes\controller\index\courses.php [ 57 ]
2013-01-29 07:54:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\classes\controller\index\courses.php [ 57 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\courses.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 57, Array)
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 08:04:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\index\courses\view.php [ 38 ]
2013-01-29 08:04:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\index\courses\view.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 08:10:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\index\courses\view.php [ 29 ]
2013-01-29 08:10:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\index\courses\view.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 08:10:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\index\courses\view.php [ 29 ]
2013-01-29 08:10:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\index\courses\view.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 08:11:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\index\courses\view.php [ 29 ]
2013-01-29 08:11:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\index\courses\view.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 08:12:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\index\courses\view.php [ 29 ]
2013-01-29 08:12:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\index\courses\view.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 08:12:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 29 ]
2013-01-29 08:12:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 08:12:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 29 ]
2013-01-29 08:12:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 08:12:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 29 ]
2013-01-29 08:12:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 08:14:30 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\index\courses.php [ 45 ]
2013-01-29 08:14:30 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\index\courses.php [ 45 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 45, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\index\courses.php(45): simplexml_load_file(Array)
#2 [internal function]: Controller_Index_Courses->action_view()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 08:14:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 29 ]
2013-01-29 08:14:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 29 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 29, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 08:15:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 30 ]
2013-01-29 08:15:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 30 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(30): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 30, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 08:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:28:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:28:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:30:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:30:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:32:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:32:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:32:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:32:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:35:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:35:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:35:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:35:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:36:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:36:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:38:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:38:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:38:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:38:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:38:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:38:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:46:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:46:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:48:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:48:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:48:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:48:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:48:53 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 91 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2013-01-29 08:48:53 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 91 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\xampp\htdocs...', 392, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\route.php(392): preg_match('#^lab/(?:(?P<co...', 'lab/index/examp...', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(567): Kohana_Route->matches('lab/index/examp...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(785): Kohana_Request::process_uri('lab/index/examp...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(198): Kohana_Request->__construct('/lab/index/exam...', NULL)
#5 D:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-29 08:49:04 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 91 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2013-01-29 08:49:04 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 91 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\xampp\htdocs...', 392, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\route.php(392): preg_match('#^lab/(?:(?P<co...', 'lab/index/examp...', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(567): Kohana_Route->matches('lab/index/examp...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(785): Kohana_Request::process_uri('lab/index/examp...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(198): Kohana_Request->__construct('/lab/index/exam...', NULL)
#5 D:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-29 08:53:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:53:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:54:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:54:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:57:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 08:57:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 08:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/e was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 08:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/e was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 08:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/e was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 08:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/e was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 08:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/e was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 08:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/e was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 08:59:40 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 35 ]
2013-01-29 08:59:40 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 35 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(35): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 35, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:02:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:02:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:02:53 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:02:53 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:02:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:02:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:02:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:02:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:03:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:03:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:03:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:03:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:03:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:03:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 09:06:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:06:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 09:07:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:07:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 09:07:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:07:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example_1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 09:07:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:07:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 09:14:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:14:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:16:06 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:16:06 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): simplexml_load_file(Array)
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-29 09:16:30 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:16:30 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): simplexml_load_file(Array)
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-29 09:16:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:16:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:16:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
2013-01-29 09:16:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:16:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:16:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 09:17:15 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 34 ]
2013-01-29 09:17:15 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 34 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 34, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:21:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 35 ]
2013-01-29 09:21:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 35 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(35): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 35, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:21:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 09:21:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 09:21:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 09:21:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 09:21:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 09:21:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 09:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 09:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 09:24:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 09:24:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 09:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 09:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 09:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 09:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 09:29:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 09:29:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 09:40:58 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2013-01-29 09:40:58 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\xampp\htdocs...', 392, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\route.php(392): preg_match('#^lab/(?:(?P<co...', 'courses/view/1', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(567): Kohana_Route->matches('courses/view/1')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(785): Kohana_Request::process_uri('courses/view/1', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(198): Kohana_Request->__construct('/courses/view/1', NULL)
#5 D:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-29 09:41:05 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2013-01-29 09:41:05 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\xampp\htdocs...', 392, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\route.php(392): preg_match('#^lab/(?:(?P<co...', 'courses/view/1', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(567): Kohana_Route->matches('courses/view/1')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(785): Kohana_Request::process_uri('courses/view/1', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(198): Kohana_Request->__construct('/courses/view/1', NULL)
#5 D:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-29 09:41:35 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2013-01-29 09:41:35 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\xampp\htdocs...', 392, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\route.php(392): preg_match('#^lab/(?:(?P<co...', 'courses/view/1', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(567): Kohana_Route->matches('courses/view/1')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(785): Kohana_Request::process_uri('courses/view/1', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(198): Kohana_Request->__construct('/courses/view/1', NULL)
#5 D:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-29 09:41:38 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2013-01-29 09:41:38 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\xampp\htdocs...', 392, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\route.php(392): preg_match('#^lab/(?:(?P<co...', 'courses/view/1', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(567): Kohana_Route->matches('courses/view/1')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(785): Kohana_Request::process_uri('courses/view/1', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(198): Kohana_Request->__construct('/courses/view/1', NULL)
#5 D:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-29 09:42:10 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2013-01-29 09:42:10 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\xampp\htdocs...', 392, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\route.php(392): preg_match('#^lab/(?:(?P<co...', 'courses/view/1', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(567): Kohana_Route->matches('courses/view/1')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(785): Kohana_Request::process_uri('courses/view/1', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(198): Kohana_Request->__construct('/courses/view/1', NULL)
#5 D:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-29 09:42:11 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
2013-01-29 09:42:11 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Compilation failed: unmatched parentheses at offset 68 ~ SYSPATH\classes\kohana\route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match() [<...', 'D:\xampp\htdocs...', 392, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\route.php(392): preg_match('#^lab/(?:(?P<co...', 'courses/view/1', NULL)
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(567): Kohana_Route->matches('courses/view/1')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(785): Kohana_Request::process_uri('courses/view/1', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(198): Kohana_Request->__construct('/courses/view/1', NULL)
#5 D:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#6 {main}
2013-01-29 09:49:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 09:49:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 09:51:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: f ~ APPPATH\classes\controller\lab\index.php [ 14 ]
2013-01-29 09:51:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: f ~ APPPATH\classes\controller\lab\index.php [ 14 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 14, Array)
#1 [internal function]: Controller_Lab_Index->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 09:51:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\lab\index.php [ 19 ]
2013-01-29 09:51:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\lab\index.php [ 19 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\index.php(19): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 19, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 09:52:13 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-29 09:52:13 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): simplexml_load_file(Array)
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 09:52:21 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-29 09:52:21 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): simplexml_load_file(Array)
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 09:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 09:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 09:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 09:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 09:58:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 09:58:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:04:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 10:04:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:04:05 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-29 10:04:05 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): simplexml_load_file(Array)
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 10:04:20 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;&quot; ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-29 10:04:20 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;&quot; ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): simplexml_load_file('')
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 10:05:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: f ~ APPPATH\classes\controller\lab\index.php [ 14 ]
2013-01-29 10:05:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: f ~ APPPATH\classes\controller\lab\index.php [ 14 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 14, Array)
#1 [internal function]: Controller_Lab_Index->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 10:05:47 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-29 10:05:47 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): simplexml_load_file(Array)
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 10:06:15 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-29 10:06:15 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): simplexml_load_file(Array)
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 10:06:18 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-29 10:06:18 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() expects parameter 1 to be string, array given ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): simplexml_load_file(Array)
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 10:08:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 10:08:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 10:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:09:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:09:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:09:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:09:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:10:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 10:10:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/example.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:10:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:10:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:11:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:11:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:11:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:11:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:11:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example_1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:11:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example_1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:12:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example_1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:12:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example_1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example_1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example_1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:12:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example_1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:12:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example_1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:13:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:13:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:15:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:15:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:16:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:16:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/example.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/�������� �����.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/�������� �����.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:22:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\index\courses\view.php [ 36 ]
2013-01-29 10:22:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\index\courses\view.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 10:22:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\index\courses\view.php [ 36 ]
2013-01-29 10:22:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\index\courses\view.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 10:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:25:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:25:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:28:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:28:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:30:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant xml - assumed 'xml' ~ APPPATH\views\index\courses\view.php [ 37 ]
2013-01-29 10:30:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant xml - assumed 'xml' ~ APPPATH\views\index\courses\view.php [ 37 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(37): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 37, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 10:32:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 36 ]
2013-01-29 10:32:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\courses\view.php [ 36 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\courses\view.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 36, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 10:32:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:32:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:34:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:34:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:34:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:34:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:34:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 10:34:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:34:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:34:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:35:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:35:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:35:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:35:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:35:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:35:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:38:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:38:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:40:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:40:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:40:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:40:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:42:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:42:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:44:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:44:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:44:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:44:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:47:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:47:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:48:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:48:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:49:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:49:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:52:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 10:52:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 10:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:52:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 10:52:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 10:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:52:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 10:52:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:52:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 10:52:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: labs/index/1.xml ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 10:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:54:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:54:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:54:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:54:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:54:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\lab\index.php [ 14 ]
2013-01-29 10:54:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\lab\index.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 10:54:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:54:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:57:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:57:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:58:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:58:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:58:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:58:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:58:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:58:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 10:59:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 10:59:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:00:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 11:00:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:05:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 11:05:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/1.xml was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:07:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:07:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:09:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:09:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:10:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 11:10:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 11:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:11:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:11:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:11:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:11:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:19:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:19:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:19:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:19:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:19:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:19:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:20:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:20:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL labs/index/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:20:44 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;2xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 21 ]
2013-01-29 11:20:44 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;2xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 21, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\index\labs.php(21): simplexml_load_file('2xml')
#2 [internal function]: Controller_Index_Labs->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 11:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/outresult was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/outresult was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:23:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/outresult was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:23:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/outresult was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/outresult was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/outresult was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/outresult was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 11:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index/outresult was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 11:25:53 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 36 ]
2013-01-29 11:25:53 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 36, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\index\labs.php(36): simplexml_load_file('example.xml')
#2 [internal function]: Controller_Index_Labs->action_outresult()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 11:27:44 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 39 ]
2013-01-29 11:27:44 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 39 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 39, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\index\labs.php(39): simplexml_load_file('example.xml')
#2 [internal function]: Controller_Index_Labs->action_outresult()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 11:28:07 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 39 ]
2013-01-29 11:28:07 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 39 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 39, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\index\labs.php(39): simplexml_load_file('example.xml')
#2 [internal function]: Controller_Index_Labs->action_outresult()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 11:30:25 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 39 ]
2013-01-29 11:30:25 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 39 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 39, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\index\labs.php(39): simplexml_load_file('example.xml')
#2 [internal function]: Controller_Index_Labs->action_outresult()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 11:31:01 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 39 ]
2013-01-29 11:31:01 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 39 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 39, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\index\labs.php(39): simplexml_load_file('example.xml')
#2 [internal function]: Controller_Index_Labs->action_outresult()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 11:31:07 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 39 ]
2013-01-29 11:31:07 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\index\labs.php [ 39 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 39, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\index\labs.php(39): simplexml_load_file('example.xml')
#2 [internal function]: Controller_Index_Labs->action_outresult()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 11:32:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:32:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:33:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:33:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:34:14 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:34:14 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:34:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:34:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:35:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:35:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:35:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:35:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:39:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:39:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:47:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:47:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:47:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:47:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:48:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:48:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 11:57:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 11:57:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 11:57:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting ',' or ';' ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 11:57:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting ',' or ';' ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 12:07:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 12:07:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 12:19:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-29 12:19:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 12:20:05 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 21 ]
2013-01-29 12:20:05 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 21, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(21): simplexml_load_file('.xml')
#2 [internal function]: Controller_Tutor_Labs->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 12:21:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 12:21:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 12:21:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\labs\list.php [ 24 ]
2013-01-29 12:21:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\labs\list.php [ 24 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\labs\list.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 24, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 12:24:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: f ~ APPPATH\views\tutor\labs\list.php [ 26 ]
2013-01-29 12:24:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: f ~ APPPATH\views\tutor\labs\list.php [ 26 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\labs\list.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 26, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 12:24:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: f ~ APPPATH\views\tutor\labs\list.php [ 26 ]
2013-01-29 12:24:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: f ~ APPPATH\views\tutor\labs\list.php [ 26 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\labs\list.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 26, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 12:25:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\labs\list.php [ 27 ]
2013-01-29 12:25:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\labs\list.php [ 27 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\labs\list.php(27): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 27, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 12:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 12:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 12:30:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 12:30:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 12:31:00 --- ERROR: ErrorException [ 8 ]: Use of undefined constant xgyjx - assumed 'xgyjx' ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-29 12:31:00 --- STRACE: ErrorException [ 8 ]: Use of undefined constant xgyjx - assumed 'xgyjx' ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\outresult.php(34) : eval()'d code(1): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 1, Array)
#1 D:\xampp\htdocs\kohana\application\views\lab\outresult.php(34): eval()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Labs))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-29 12:35:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 12:35:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-29 12:38:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: id_test ~ APPPATH\views\tutor\labs\view.php [ 50 ]
2013-01-29 12:38:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: id_test ~ APPPATH\views\tutor\labs\view.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\labs\view.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 50, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 12:40:59 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;
	
			
    &quot; ~ APPPATH\views\tutor\labs\view.php [ 26 ]
2013-01-29 12:40:59 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;
	
			
    &quot; ~ APPPATH\views\tutor\labs\view.php [ 26 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 26, Array)
#1 D:\xampp\htdocs\kohana\application\views\tutor\labs\view.php(26): simplexml_load_file('???????    ')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-29 12:41:29 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;
	
			
    &quot; ~ APPPATH\views\tutor\labs\view.php [ 26 ]
2013-01-29 12:41:29 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;
	
			
    &quot; ~ APPPATH\views\tutor\labs\view.php [ 26 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 26, Array)
#1 D:\xampp\htdocs\kohana\application\views\tutor\labs\view.php(26): simplexml_load_file('???????    ')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-29 12:42:23 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;
	
			
    &quot; ~ APPPATH\views\tutor\labs\view.php [ 26 ]
2013-01-29 12:42:23 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;
	
			
    &quot; ~ APPPATH\views\tutor\labs\view.php [ 26 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 26, Array)
#1 D:\xampp\htdocs\kohana\application\views\tutor\labs\view.php(26): simplexml_load_file('???????    ')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-29 12:43:34 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\labs\view.php [ 25 ]
2013-01-29 12:43:34 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\labs\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\labs\view.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 12:44:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\controller\tutor\labs.php [ 58 ]
2013-01-29 12:44:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH\classes\controller\tutor\labs.php [ 58 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 58, Array)
#1 [internal function]: Controller_Tutor_Labs->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 12:44:36 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\labs\view.php [ 25 ]
2013-01-29 12:44:36 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\labs\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\labs\view.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 12:45:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\labs\view.php [ 25 ]
2013-01-29 12:45:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\labs\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\labs\view.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 12:45:40 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\labs\view.php [ 25 ]
2013-01-29 12:45:40 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\tutor\labs\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\labs\view.php(25): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 12:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs/edit/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-01-29 12:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs/edit/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-29 13:12:11 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
2013-01-29 13:12:11 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 93, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(93): simplexml_load_file('.xml')
#2 [internal function]: Controller_Tutor_Labs->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 13:13:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
2013-01-29 13:13:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 93, Array)
#1 [internal function]: Controller_Tutor_Labs->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 13:13:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
2013-01-29 13:13:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 93, Array)
#1 [internal function]: Controller_Tutor_Labs->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 13:13:59 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
2013-01-29 13:13:59 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 93, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(93): simplexml_load_file('.xml')
#2 [internal function]: Controller_Tutor_Labs->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 13:14:42 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
2013-01-29 13:14:42 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 93, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(93): simplexml_load_file('.xml')
#2 [internal function]: Controller_Tutor_Labs->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 13:15:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method SimpleXMLElement::file_put_contents() ~ APPPATH\classes\controller\tutor\labs.php [ 86 ]
2013-01-29 13:15:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method SimpleXMLElement::file_put_contents() ~ APPPATH\classes\controller\tutor\labs.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 13:16:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method SimpleXMLElement::file_put_contents() ~ APPPATH\classes\controller\tutor\labs.php [ 86 ]
2013-01-29 13:16:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method SimpleXMLElement::file_put_contents() ~ APPPATH\classes\controller\tutor\labs.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 13:17:03 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
2013-01-29 13:17:03 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 93, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(93): simplexml_load_file('.xml')
#2 [internal function]: Controller_Tutor_Labs->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 13:19:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\tutor\labs\edit.php [ 17 ]
2013-01-29 13:19:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\tutor\labs\edit.php [ 17 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\labs\edit.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 17, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-29 13:20:36 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\views\tutor\labs\edit.php [ 17 ]
2013-01-29 13:20:36 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;.xml&quot; ~ APPPATH\views\tutor\labs\edit.php [ 17 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 17, Array)
#1 D:\xampp\htdocs\kohana\application\views\tutor\labs\edit.php(17): simplexml_load_file('.xml')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-29 13:24:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\tutor\labs.php [ 101 ]
2013-01-29 13:24:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\tutor\labs.php [ 101 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-29 13:33:59 --- ERROR: ErrorException [ 2 ]: unlink(test.html) [function.unlink]: No such file or directory ~ APPPATH\classes\controller\tutor\labs.php [ 108 ]
2013-01-29 13:33:59 --- STRACE: ErrorException [ 2 ]: unlink(test.html) [function.unlink]: No such file or directory ~ APPPATH\classes\controller\tutor\labs.php [ 108 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'unlink(test.htm...', 'D:\xampp\htdocs...', 108, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(108): unlink('test.html')
#2 [internal function]: Controller_Tutor_Labs->action_delete()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 13:34:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\tutor\labs.php [ 111 ]
2013-01-29 13:34:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\tutor\labs.php [ 111 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(111): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 111, Array)
#1 [internal function]: Controller_Tutor_Labs->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-29 13:35:55 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;2.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 120 ]
2013-01-29 13:35:55 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;2.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 120, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(120): simplexml_load_file('2.xml')
#2 [internal function]: Controller_Tutor_Labs->action_delete()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 13:36:21 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;2.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 120 ]
2013-01-29 13:36:21 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;2.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 120 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 120, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(120): simplexml_load_file('2.xml')
#2 [internal function]: Controller_Tutor_Labs->action_delete()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 13:36:27 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;2.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 59 ]
2013-01-29 13:36:27 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;2.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 59 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 59, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(59): simplexml_load_file('2.xml')
#2 [internal function]: Controller_Tutor_Labs->action_view()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 13:36:54 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;2.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 59 ]
2013-01-29 13:36:54 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;2.xml&quot; ~ APPPATH\classes\controller\tutor\labs.php [ 59 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 59, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\tutor\labs.php(59): simplexml_load_file('2.xml')
#2 [internal function]: Controller_Tutor_Labs->action_view()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-29 13:37:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-29 13:37:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}