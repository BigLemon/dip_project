<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-26 08:47:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-26 08:47:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 08:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-26 08:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 08:52:25 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-11-26 08:52:25 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#2 [internal function]: Controller_Admin_Users->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-26 08:54:08 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-11-26 08:54:08 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#2 [internal function]: Controller_Admin_Users->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-26 08:55:27 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-11-26 08:55:27 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#2 [internal function]: Controller_Admin_Users->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-26 08:57:14 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-11-26 08:57:14 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(42): Kohana_ORM->update()
#2 [internal function]: Controller_Admin_Users->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-26 08:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-26 08:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 08:57:26 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-11-26 08:57:26 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(42): Kohana_ORM->update()
#2 [internal function]: Controller_Admin_Users->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-26 08:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-26 08:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 08:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-26 08:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 09:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-26 09:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 09:21:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_News' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-26 09:21:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_News' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-26 09:23:12 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\news.php [ 36 ]
2012-11-26 09:23:12 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\admin\news.php [ 36 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\news.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 36, Array)
#1 [internal function]: Controller_Admin_News->action_add()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_News))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-26 09:28:31 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\controller\admin\news.php [ 39 ]
2012-11-26 09:28:31 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\controller\admin\news.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-26 09:29:02 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\controller\admin\news.php [ 39 ]
2012-11-26 09:29:02 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\controller\admin\news.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-26 09:29:40 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\controller\admin\news.php [ 39 ]
2012-11-26 09:29:40 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\controller\admin\news.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-26 09:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/edit/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-11-26 09:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/edit/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-26 09:38:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\admin\news\edit.php [ 21 ]
2012-11-26 09:38:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\admin\news\edit.php [ 21 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\news\edit.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 21, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_News))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-26 09:39:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\admin\news\edit.php [ 21 ]
2012-11-26 09:39:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH\views\admin\news\edit.php [ 21 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\news\edit.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 21, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_News))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-26 09:46:39 --- ERROR: View_Exception [ 0 ]: The requested view tutor/news/delete could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-11-26 09:46:39 --- STRACE: View_Exception [ 0 ]: The requested view tutor/news/delete could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('tutor/news/dele...')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('tutor/news/dele...', Array)
#2 D:\xampp\htdocs\kohana\application\classes\controller\admin\news.php(106): Kohana_View::factory('tutor/news/dele...', Array)
#3 [internal function]: Controller_Admin_News->action_delete()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 09:47:12 --- ERROR: View_Exception [ 0 ]: The requested view admin/news/delete could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-11-26 09:47:12 --- STRACE: View_Exception [ 0 ]: The requested view admin/news/delete could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/news/dele...')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/news/dele...', Array)
#2 D:\xampp\htdocs\kohana\application\classes\controller\admin\news.php(106): Kohana_View::factory('admin/news/dele...', Array)
#3 [internal function]: Controller_Admin_News->action_delete()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 09:53:23 --- ERROR: Kohana_Exception [ 0 ]: Cannot update new model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-26 09:53:23 --- STRACE: Kohana_Exception [ 0 ]: Cannot update new model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\news.php(73): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_News->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_News))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-26 09:55:00 --- ERROR: Kohana_Exception [ 0 ]: Cannot update new model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-26 09:55:00 --- STRACE: Kohana_Exception [ 0 ]: Cannot update new model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\news.php(73): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_News->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_News))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-26 09:55:19 --- ERROR: Kohana_Exception [ 0 ]: Cannot update new model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-26 09:55:19 --- STRACE: Kohana_Exception [ 0 ]: Cannot update new model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\news.php(73): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_News->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_News))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-26 10:01:02 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\admin\news.php [ 66 ]
2012-11-26 10:01:02 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\admin\news.php [ 66 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\news.php(66): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 66, Array)
#1 [internal function]: Controller_Admin_News->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_News))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-26 10:02:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-26 10:02:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 10:39:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH\views\index\base.php [ 119 ]
2012-11-26 10:39:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH\views\index\base.php [ 119 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\base.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 119, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Main))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-26 10:41:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-26 10:41:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 10:44:08 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\xampp\htdocs\kohana\application\classes\controller\admin\pages.php on line 21 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-11-26 10:44:08 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, string given, called in D:\xampp\htdocs\kohana\application\classes\controller\admin\pages.php on line 21 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\admin\pages.php(21): Kohana_View::factory('admin/pages/lis...', 'index/base', Array)
#2 [internal function]: Controller_Admin_Pages->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-26 10:44:59 --- ERROR: View_Exception [ 0 ]: The requested view admin/lections/add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-11-26 10:44:59 --- STRACE: View_Exception [ 0 ]: The requested view admin/lections/add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/lections/...')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/lections/...', Array)
#2 D:\xampp\htdocs\kohana\application\classes\controller\admin\courses.php(134): Kohana_View::factory('admin/lections/...', Array)
#3 [internal function]: Controller_Admin_Courses->action_lectionadd()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Courses))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 10:58:30 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`questions`, CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `tests` (`id`)) [ DELETE FROM `tests` WHERE `id` = '4' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-26 10:58:30 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`questions`, CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `tests` (`id`)) [ DELETE FROM `tests` WHERE `id` = '4' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `te...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\tests.php(76): Kohana_ORM->delete()
#3 [internal function]: Controller_Tutor_Tests->action_delete()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Tests))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 10:59:39 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`questions`, CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `tests` (`id`)) [ DELETE FROM `tests` WHERE `id` = '4' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-26 10:59:39 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`questions`, CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `tests` (`id`)) [ DELETE FROM `tests` WHERE `id` = '4' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `te...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\tests.php(76): Kohana_ORM->delete()
#3 [internal function]: Controller_Tutor_Tests->action_delete()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Tests))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 11:03:25 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`questions`, CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `tests` (`id`)) [ DELETE FROM `tests` WHERE `id` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-26 11:03:25 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`questions`, CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`id_test`) REFERENCES `tests` (`id`)) [ DELETE FROM `tests` WHERE `id` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `te...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\tests.php(76): Kohana_ORM->delete()
#3 [internal function]: Controller_Tutor_Tests->action_delete()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Tests))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 11:03:56 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`answers`, CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`)) [ DELETE FROM `questions` WHERE `id` = '5' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-26 11:03:56 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`answers`, CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`)) [ DELETE FROM `questions` WHERE `id` = '5' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `qu...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(81): Kohana_ORM->delete()
#3 [internal function]: Controller_Tutor_Questions->action_delete()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}