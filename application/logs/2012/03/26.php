<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-26 02:23:22 --- ERROR: Kohana_Exception [ 0 ]: The author property does not exist in the Model_New class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-03-26 02:23:22 --- STRACE: Kohana_Exception [ 0 ]: The author property does not exist in the Model_New class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 W:\html\kohana\www\application\views\index\news\allnews.php(25): Kohana_ORM->__get('author')
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\base.php(126): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_News))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-26 02:26:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:26:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:28:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:28:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:28:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:28:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:28:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: pageclass ~ APPPATH\views\index\base.php [ 43 ]
2012-03-26 02:28:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: pageclass ~ APPPATH\views\index\base.php [ 43 ]
--
#0 W:\html\kohana\www\application\views\index\base.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 43, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_News))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-26 02:39:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\index\news.php [ 44 ]
2012-03-26 02:39:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\controller\index\news.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-26 02:40:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:40:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:40:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH\views\index\news\fullnews.php [ 25 ]
2012-03-26 02:40:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH\views\index\news\fullnews.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-26 02:45:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: entry ~ APPPATH\views\index\news\fullnews.php [ 39 ]
2012-03-26 02:45:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: entry ~ APPPATH\views\index\news\fullnews.php [ 39 ]
--
#0 W:\html\kohana\www\application\views\index\news\fullnews.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 39, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\base.php(126): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_News))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-26 02:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/pagination_sep.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/pagination_sep.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/pagination_sep.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: css/images/pagination_sep.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:45:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:45:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:52:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:52:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:53:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:53:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:53:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: entry ~ APPPATH\views\index\news\fullnews.php [ 27 ]
2012-03-26 02:53:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: entry ~ APPPATH\views\index\news\fullnews.php [ 27 ]
--
#0 W:\html\kohana\www\application\views\index\news\fullnews.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 27, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\base.php(126): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_News))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-26 02:54:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: entry ~ APPPATH\views\index\news\fullnews.php [ 31 ]
2012-03-26 02:54:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: entry ~ APPPATH\views\index\news\fullnews.php [ 31 ]
--
#0 W:\html\kohana\www\application\views\index\news\fullnews.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 31, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\base.php(126): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_News))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-26 02:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:56:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:56:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:56:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:56:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:59:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:59:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:59:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:59:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 02:59:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 02:59:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 03:03:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 03:03:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 03:04:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/view/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-26 03:04:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/view/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-26 03:34:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lection was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-26 03:34:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lection was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-26 03:35:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lection was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-26 03:35:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lection was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-26 03:36:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 126 ]
2012-03-26 03:36:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 126 ]
--
#0 W:\html\kohana\www\application\views\index\base.php(126): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 126, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Lection))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-26 08:05:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-26 08:05:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-26 08:21:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 08:21:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 08:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 08:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 08:23:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 08:23:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 10:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 10:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 10:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 10:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 10:45:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/no_avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 10:45:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/no_avatar.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 10:47:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-26 10:47:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-26 11:03:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 11:03:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 11:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 11:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 11:03:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 11:03:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 12:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 12:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 12:12:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 12:12:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 12:42:40 --- ERROR: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\index\user.php [ 114 ]
2012-03-26 12:42:40 --- STRACE: ErrorException [ 1 ]: Class 'Validate' not found ~ APPPATH\classes\controller\index\user.php [ 114 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-26 12:45:00 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
2012-03-26 12:45:00 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ SYSPATH\classes\kohana\validation.php [ 228 ]
--
#0 W:\html\kohana\www\system\classes\kohana\validation.php(228): Kohana_Core::error_handler(8, 'Undefined offse...', 'W:\html\kohana\...', 228, Array)
#1 W:\html\kohana\www\application\classes\controller\index\user.php(121): Kohana_Validation->rules('picture', Array)
#2 [internal function]: Controller_Index_User->action_updateavatar()
#3 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#4 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-26 12:48:16 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 129 ]
2012-03-26 12:48:16 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 129 ]
--
#0 W:\html\kohana\www\system\classes\kohana\upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'W:\html\kohana\...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 W:\html\kohana\www\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 W:\html\kohana\www\application\classes\controller\index\user.php(119): Kohana_Validation->check()
#4 [internal function]: Controller_Index_User->action_updateavatar()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-26 12:49:56 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 129 ]
2012-03-26 12:49:56 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::not_empty() must be an array, null given ~ SYSPATH\classes\kohana\upload.php [ 129 ]
--
#0 W:\html\kohana\www\system\classes\kohana\upload.php(129): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'W:\html\kohana\...', 129, Array)
#1 [internal function]: Kohana_Upload::not_empty(NULL)
#2 W:\html\kohana\www\system\classes\kohana\validation.php(364): call_user_func_array(Array, Array)
#3 W:\html\kohana\www\application\classes\controller\index\user.php(119): Kohana_Validation->check()
#4 [internal function]: Controller_Index_User->action_updateavatar()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-26 12:51:31 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Upload::type() must be an array, none given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
2012-03-26 12:51:31 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Upload::type() must be an array, none given ~ SYSPATH\classes\kohana\upload.php [ 146 ]
--
#0 W:\html\kohana\www\system\classes\kohana\upload.php(146): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'W:\html\kohana\...', 146, Array)
#1 [internal function]: Kohana_Upload::type(Array)
#2 W:\html\kohana\www\system\classes\kohana\validation.php(397): ReflectionMethod->invokeArgs(NULL, Array)
#3 W:\html\kohana\www\application\classes\controller\index\user.php(119): Kohana_Validation->check()
#4 [internal function]: Controller_Index_User->action_updateavatar()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-26 12:53:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2012-03-26 12:53:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 W:\html\kohana\www\application\views\index\base.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 6, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-26 13:02:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\classes\controller\index\user.php [ 126 ]
2012-03-26 13:02:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PAAMAYIM_NEKUDOTAYIM ~ APPPATH\classes\controller\index\user.php [ 126 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-26 13:03:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2012-03-26 13:03:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 W:\html\kohana\www\application\views\index\base.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 6, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-26 13:05:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2012-03-26 13:05:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 W:\html\kohana\www\application\views\index\base.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 6, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-26 13:06:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2012-03-26 13:06:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 W:\html\kohana\www\application\views\index\base.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 6, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-26 13:09:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2012-03-26 13:09:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 W:\html\kohana\www\application\views\index\base.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 6, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-26 13:12:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-26 13:12:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/settings was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-26 13:15:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 13:15:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 13:15:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 13:15:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 13:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 13:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 13:15:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 13:15:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 13:19:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 13:19:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 13:19:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 13:19:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 13:20:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 13:20:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-26 13:21:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-26 13:21:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}