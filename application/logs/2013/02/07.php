<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-07 08:57:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\inc\index.php [ 35 ]
2013-02-07 08:57:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\inc\index.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\inc\index.php(35): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-07 08:59:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: id_lab ~ APPPATH\views\inc\index.php [ 35 ]
2013-02-07 08:59:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: id_lab ~ APPPATH\views\inc\index.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\inc\index.php(35): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-07 08:59:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: id_lab ~ APPPATH\classes\controller\index\inc.php [ 23 ]
2013-02-07 08:59:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: id_lab ~ APPPATH\classes\controller\index\inc.php [ 23 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(23): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_index(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-07 09:00:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\inc\index.php [ 35 ]
2013-02-07 09:00:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\inc\index.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\inc\index.php(35): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-07 09:03:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\inc\index.php [ 35 ]
2013-02-07 09:03:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\inc\index.php [ 35 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\inc\index.php(35): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-07 09:03:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inc/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-02-07 09:03:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inc/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-02-07 09:06:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 09:06:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-07 09:23:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\lab\outresult.php [ 19 ]
2013-02-07 09:23:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\lab\outresult.php [ 19 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\lab\outresult.php(19): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-07 09:23:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\inc\outresult.php [ 17 ]
2013-02-07 09:23:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\inc\outresult.php [ 17 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\inc\outresult.php(17): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-07 09:24:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\inc\outresult.php [ 21 ]
2013-02-07 09:24:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\inc\outresult.php [ 21 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\inc\outresult.php(21): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-07 09:57:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 09:57:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-07 10:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codemirror/theme/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 10:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codemirror/theme/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-07 10:23:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 10:23:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-07 10:23:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codemirror/theme/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 10:23:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codemirror/theme/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-07 10:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 10:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-07 10:23:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 10:23:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-07 10:23:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codemirror/theme/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 10:23:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codemirror/theme/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-07 10:26:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codemirror/theme/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 10:26:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: codemirror/theme/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-07 10:34:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 10:34:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-07 10:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-07 10:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}