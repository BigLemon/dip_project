<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-28 02:18:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: lection ~ APPPATH\views\index\lection\view.php [ 17 ]
2012-03-28 02:18:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: lection ~ APPPATH\views\index\lection\view.php [ 17 ]
--
#0 W:\html\kohana\www\application\views\index\lection\view.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 17, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\base.php(116): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Lection))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-28 02:30:32 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2012-03-28 02:30:32 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\lection.php(47): Kohana_ORM->find()
#1 [internal function]: Controller_Index_Lection->action_view()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Lection))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-28 02:31:04 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2012-03-28 02:31:04 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\lection.php(47): Kohana_ORM->find()
#1 [internal function]: Controller_Index_Lection->action_view()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Lection))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-28 02:31:05 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2012-03-28 02:31:05 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\lection.php(47): Kohana_ORM->find()
#1 [internal function]: Controller_Index_Lection->action_view()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Lection))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-28 02:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 02:41:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:41:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 02:42:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:42:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 02:42:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL course/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 02:42:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL course/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 02:42:40 --- ERROR: ErrorException [ 8 ]: Use of undefined constant lections - assumed 'lections' ~ APPPATH\views\index\courses\view.php [ 19 ]
2012-03-28 02:42:40 --- STRACE: ErrorException [ 8 ]: Use of undefined constant lections - assumed 'lections' ~ APPPATH\views\index\courses\view.php [ 19 ]
--
#0 W:\html\kohana\www\application\views\index\courses\view.php(19): Kohana_Core::error_handler(8, 'Use of undefine...', 'W:\html\kohana\...', 19, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\base.php(116): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-28 02:43:26 --- ERROR: ErrorException [ 8 ]: Use of undefined constant lections - assumed 'lections' ~ APPPATH\views\index\courses\view.php [ 19 ]
2012-03-28 02:43:26 --- STRACE: ErrorException [ 8 ]: Use of undefined constant lections - assumed 'lections' ~ APPPATH\views\index\courses\view.php [ 19 ]
--
#0 W:\html\kohana\www\application\views\index\courses\view.php(19): Kohana_Core::error_handler(8, 'Use of undefine...', 'W:\html\kohana\...', 19, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\base.php(116): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-28 02:44:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:44:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 02:44:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:44:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 02:44:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:44:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 02:44:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:44:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 02:45:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:45:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 02:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 02:46:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:46:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 02:46:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 02:46:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 03:18:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 03:18:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 03:18:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 03:18:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 03:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/contacts2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-28 03:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/contacts2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 03:39:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/contacts2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-28 03:39:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/contacts2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 03:39:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/contacts2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-28 03:39:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/contacts2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 03:39:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/contacts2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-28 03:39:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/contacts2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 03:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages/contacts2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-28 03:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages/contacts2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:46:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:46:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:46:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:46:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:46:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:46:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:46:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:46:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:46:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:46:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:48:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:48:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:48:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:48:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:51:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 04:51:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 04:51:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index/index/index/index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 04:51:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/index/index/index/index ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 05:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 05:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 05:05:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 05:05:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 05:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 05:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 05:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 05:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 05:05:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 05:05:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 05:05:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 05:05:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 05:12:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 05:12:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 05:12:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 05:12:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 05:12:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 05:12:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 05:13:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-28 05:13:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 07:14:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-28 07:14:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-28 07:14:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-28 07:14:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-28 07:14:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-28 07:14:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-28 07:14:34 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-28 07:14:34 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-28 07:14:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-28 07:14:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-28 07:14:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\views\admin\pages\list.php [ 29 ]
2012-03-28 07:14:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\views\admin\pages\list.php [ 29 ]
--
#0 W:\html\kohana\www\application\views\admin\pages\list.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 29, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\admin\base.php(96): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-28 07:15:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 07:15:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 07:15:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 07:15:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 07:15:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-28 07:15:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/pages/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-28 07:16:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 07:16:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 07:31:50 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete usercourse model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-03-28 07:31:50 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete usercourse model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\user.php(227): Kohana_ORM->delete()
#1 [internal function]: Controller_Index_User->action_delcourse()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-28 07:32:53 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2012-03-28 07:32:53 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 W:\html\kohana\www\application\classes\controller\admin\pages.php(32): Kohana_ORM->find()
#1 [internal function]: Controller_Admin_Pages->action_edit()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-28 07:33:25 --- ERROR: Kohana_Exception [ 0 ]: The topic property does not exist in the Model_Page class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-03-28 07:33:25 --- STRACE: Kohana_Exception [ 0 ]: The topic property does not exist in the Model_Page class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 W:\html\kohana\www\application\views\admin\pages\edit.php(24): Kohana_ORM->__get('topic')
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\admin\base.php(96): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-28 07:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 07:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 07:35:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 07:35:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 07:35:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 07:35:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 08:02:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 08:02:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 08:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 08:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 08:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 08:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 08:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 08:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 08:03:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 08:03:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 08:05:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 08:05:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 08:05:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 08:05:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 08:06:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 08:06:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-28 08:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-28 08:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}