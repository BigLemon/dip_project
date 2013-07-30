<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-17 05:44:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news/10 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-17 05:44:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news/10 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 07:11:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\login_view.php [ 93 ]
2012-03-17 07:11:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index\auth\login_view.php [ 93 ]
--
#0 W:\html\kohana\www\application\views\index\auth\login_view.php(93): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 93, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\index_view.php(83): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-17 07:26:39 --- ERROR: View_Exception [ 0 ]: The requested view user/profile_view could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-03-17 07:26:39 --- STRACE: View_Exception [ 0 ]: The requested view user/profile_view could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 W:\html\kohana\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('user/profile_vi...')
#1 W:\html\kohana\www\system\classes\kohana\view.php(30): Kohana_View->__construct('user/profile_vi...', NULL)
#2 W:\html\kohana\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('user/profile_vi...')
#3 W:\html\kohana\www\application\classes\controller\index.php(11): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Index->before()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-17 07:29:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: nick ~ APPPATH\views\index\user\profile_view.php [ 9 ]
2012-03-17 07:29:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: nick ~ APPPATH\views\index\user\profile_view.php [ 9 ]
--
#0 W:\html\kohana\www\application\views\index\user\profile_view.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 9, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\index_view.php(79): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-17 07:30:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: nick ~ APPPATH\views\index\user\profile_view.php [ 9 ]
2012-03-17 07:30:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: nick ~ APPPATH\views\index\user\profile_view.php [ 9 ]
--
#0 W:\html\kohana\www\application\views\index\user\profile_view.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 9, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\index_view.php(79): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-17 08:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/libs/bootstrap/transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 08:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]]
2012-03-17 08:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/libs/bootstrap/transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 08:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/css/style.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 08:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/css/bootstrap-responsive.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 08:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/css/bootstrap.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 08:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/libs/bootstrap/collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 08:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/libs/modernizr-2.5.3-respond-1.1.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 08:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/libs/modernizr-2.5.3-respond-1.1.0.min.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 08:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/libs/bootstrap/dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 08:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/libs/bootstrap/dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 08:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 08:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 08:01:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/libs/bootstrap/tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-17 08:01:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: user/js/libs/bootstrap/tab.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-17 08:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-17 08:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/user was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 08:04:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/courses was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-17 08:04:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/courses was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 08:05:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/courses was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-17 08:05:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/courses was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 08:41:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/courses was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-17 08:41:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/courses was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 11:08:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/auth/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-17 11:08:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/auth/login was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 11:10:30 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\index\user\profile_view.php [ 12 ]
2012-03-17 11:10:30 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\index\user\profile_view.php [ 12 ]
--
#0 W:\html\kohana\www\application\views\index\user\profile_view.php(12): Kohana_Core::error_handler(8, 'Undefined index...', 'W:\html\kohana\...', 12, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\index_view.php(79): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-17 11:11:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/courses was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-17 11:11:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/courses was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-17 11:22:18 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\index\user\profile_view.php [ 12 ]
2012-03-17 11:22:18 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\index\user\profile_view.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 11:59:19 --- ERROR: ErrorException [ 1 ]: Class 'Model_User_course' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-17 11:59:19 --- STRACE: ErrorException [ 1 ]: Class 'Model_User_course' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 12:00:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-17 12:00:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 12:01:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-17 12:01:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 12:01:59 --- ERROR: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-17 12:01:59 --- STRACE: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 12:02:00 --- ERROR: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-17 12:02:00 --- STRACE: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 12:02:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-17 12:02:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 12:03:37 --- ERROR: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-17 12:03:37 --- STRACE: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 12:04:07 --- ERROR: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-17 12:04:07 --- STRACE: ErrorException [ 1 ]: Class 'Model_Usercourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 12:05:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: couses ~ APPPATH\classes\controller\index\user.php [ 19 ]
2012-03-17 12:05:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: couses ~ APPPATH\classes\controller\index\user.php [ 19 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\user.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 19, Array)
#1 [internal function]: Controller_Index_User->action_index()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 12:06:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$mycour ~ APPPATH\classes\controller\index\user.php [ 19 ]
2012-03-17 12:06:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$mycour ~ APPPATH\classes\controller\index\user.php [ 19 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\user.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'W:\html\kohana\...', 19, Array)
#1 [internal function]: Controller_Index_User->action_index()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 12:12:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$mycour ~ APPPATH\classes\controller\index\user.php [ 19 ]
2012-03-17 12:12:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$mycour ~ APPPATH\classes\controller\index\user.php [ 19 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\user.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'W:\html\kohana\...', 19, Array)
#1 [internal function]: Controller_Index_User->action_index()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 12:18:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$cour ~ APPPATH\classes\controller\index\user.php [ 19 ]
2012-03-17 12:18:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$cour ~ APPPATH\classes\controller\index\user.php [ 19 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\user.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'W:\html\kohana\...', 19, Array)
#1 [internal function]: Controller_Index_User->action_index()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 12:39:50 --- ERROR: Kohana_Exception [ 0 ]: The couses property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-03-17 12:39:50 --- STRACE: Kohana_Exception [ 0 ]: The couses property does not exist in the Model_Student class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\user.php(18): Kohana_ORM->__get('couses')
#1 [internal function]: Controller_Index_User->action_index()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 12:40:15 --- ERROR: ErrorException [ 1 ]: Class 'Model_Courses' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-17 12:40:15 --- STRACE: ErrorException [ 1 ]: Class 'Model_Courses' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 12:40:37 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.usercourse' doesn't exist [ SELECT `course`.* FROM `courses` AS `course` JOIN `usercourse` ON (`usercourse`.`course_id` = `course`.`id`) WHERE `usercourse`.`student_id` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 12:40:37 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.usercourse' doesn't exist [ SELECT `course`.* FROM `courses` AS `course` JOIN `usercourse` ON (`usercourse`.`course_id` = `course`.`id`) WHERE `usercourse`.`student_id` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `course`...', 'Model_Course', Array)
#1 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 W:\html\kohana\www\application\classes\controller\index\user.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_User->action_index()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-17 12:41:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'usercourses.student_id' in 'where clause' [ SELECT `course`.* FROM `courses` AS `course` JOIN `usercourses` ON (`usercourses`.`course_id` = `course`.`id`) WHERE `usercourses`.`student_id` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-17 12:41:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'usercourses.student_id' in 'where clause' [ SELECT `course`.* FROM `courses` AS `course` JOIN `usercourses` ON (`usercourses`.`course_id` = `course`.`id`) WHERE `usercourses`.`student_id` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `course`...', 'Model_Course', Array)
#1 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 W:\html\kohana\www\application\classes\controller\index\user.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_User->action_index()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-17 12:41:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\index\user.php [ 24 ]
2012-03-17 12:41:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\index\user.php [ 24 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\user.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 24, Array)
#1 [internal function]: Controller_Index_User->action_index()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-17 12:46:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\views\index\user\profile_view.php [ 19 ]
2012-03-17 12:46:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: usercourses ~ APPPATH\views\index\user\profile_view.php [ 19 ]
--
#0 W:\html\kohana\www\application\views\index\user\profile_view.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 19, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\index_view.php(79): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-17 12:58:58 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Database_MySQL_Result::$_total_rows ~ APPPATH\views\index\user\profile_view.php [ 20 ]
2012-03-17 12:58:58 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Database_MySQL_Result::$_total_rows ~ APPPATH\views\index\user\profile_view.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 13:00:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\index\user\profile_view.php [ 20 ]
2012-03-17 13:00:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\index\user\profile_view.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-17 13:11:30 --- ERROR: ErrorException [ 1 ]: Class 'Model_Courses' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-17 13:11:30 --- STRACE: ErrorException [ 1 ]: Class 'Model_Courses' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}