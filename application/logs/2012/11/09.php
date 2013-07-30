<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-09 00:51:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\admin\users\list.php [ 32 ]
2012-11-09 00:51:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\admin\users\list.php [ 32 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\users\list.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 32, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-09 00:52:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\views\admin\users\edit.php [ 36 ]
2012-11-09 00:52:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\views\admin\users\edit.php [ 36 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\users\edit.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 36, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-09 00:54:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\views\admin\users\edit.php [ 36 ]
2012-11-09 00:54:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\views\admin\users\edit.php [ 36 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\users\edit.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 36, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-09 00:55:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\views\admin\users\edit.php [ 36 ]
2012-11-09 00:55:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\views\admin\users\edit.php [ 36 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\users\edit.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 36, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-09 00:55:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\classes\controller\admin\users.php [ 55 ]
2012-11-09 00:55:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\classes\controller\admin\users.php [ 55 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 55, Array)
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 00:56:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\admin\users\edit.php [ 36 ]
2012-11-09 00:56:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\admin\users\edit.php [ 36 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\users\edit.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 36, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-09 00:56:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\admin\users\edit.php [ 46 ]
2012-11-09 00:56:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\views\admin\users\edit.php [ 46 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\users\edit.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 46, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-09 00:57:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-09 00:57:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-09 00:59:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-09 00:59:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-09 01:04:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-09 01:04:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-09 01:05:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-09 01:05:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-09 01:06:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-09 01:06:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-09 01:06:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-09 01:06:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-09 01:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-09 01:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-09 01:11:05 --- ERROR: ErrorException [ 1 ]: Class 'Model_Id' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-09 01:11:05 --- STRACE: ErrorException [ 1 ]: Class 'Model_Id' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-09 01:11:19 --- ERROR: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-11-09 01:11:19 --- STRACE: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->set('role', NULL)
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:12:54 --- ERROR: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-11-09 01:12:54 --- STRACE: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->set('role', NULL)
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:15:13 --- ERROR: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-11-09 01:15:13 --- STRACE: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->set('role', NULL)
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:16:48 --- ERROR: ErrorException [ 8 ]: Undefined index: roles.role ~ APPPATH\classes\controller\admin\users.php [ 39 ]
2012-11-09 01:16:48 --- STRACE: ErrorException [ 8 ]: Undefined index: roles.role ~ APPPATH\classes\controller\admin\users.php [ 39 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 39, Array)
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:21:33 --- ERROR: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-11-09 01:21:33 --- STRACE: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->set('role', NULL)
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:30:07 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:30:07 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:39:27 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:39:27 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:39:34 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:39:34 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:40:02 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:40:02 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:40:14 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:40:14 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:40:41 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:40:41 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:41:01 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:41:01 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:42:26 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:42:26 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:42:58 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:42:58 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:48:37 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:48:37 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:54:28 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:54:28 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:54:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-09 01:54:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-09 01:55:00 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:55:00 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:56:03 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:56:03 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:56:06 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:56:06 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:56:08 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:56:08 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 01:56:55 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 01:56:55 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 02:05:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\admin\users.php [ 50 ]
2012-11-09 02:05:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\admin\users.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 02:05:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\admin\users.php [ 50 ]
2012-11-09 02:05:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\admin\users.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 02:07:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\classes\controller\admin\users.php [ 55 ]
2012-11-09 02:07:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH\classes\controller\admin\users.php [ 55 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(55): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 55, Array)
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 02:07:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-09 02:07:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-09 02:07:59 --- ERROR: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-11-09 02:07:59 --- STRACE: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(37): Kohana_ORM->set('lastname', NULL)
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 02:08:14 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 02:08:14 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 02:11:19 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 02:11:19 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 02:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-09 02:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-09 02:24:54 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 02:24:54 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(39): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 02:25:23 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2012-11-09 02:25:23 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#1 [internal function]: Controller_Admin_Users->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-09 02:28:12 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-11-09 02:28:12 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#2 [internal function]: Controller_Admin_Users->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-09 02:30:24 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-11-09 02:30:24 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#2 [internal function]: Controller_Admin_Users->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-09 02:32:23 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-11-09 02:32:23 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#2 [internal function]: Controller_Admin_Users->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-09 02:53:02 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-11-09 02:53:02 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 D:\xampp\htdocs\kohana\application\classes\controller\admin\users.php(40): Kohana_ORM->update()
#2 [internal function]: Controller_Admin_Users->action_edit()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}