<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-08 10:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-08 10:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-08 10:15:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-08 10:15:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-08 10:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-08 10:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-08 10:22:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-08 10:22:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-08 10:22:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 129 ]
2012-12-08 10:22:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 129 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 129, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-08 10:23:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 129 ]
2012-12-08 10:23:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\index\base.php [ 129 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 129, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-08 10:24:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: inmessage ~ APPPATH\views\index\user\sendpm.php [ 27 ]
2012-12-08 10:24:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: inmessage ~ APPPATH\views\index\user\sendpm.php [ 27 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\sendpm.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 27, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 10:25:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: to_user ~ APPPATH\classes\controller\index\user.php [ 107 ]
2012-12-08 10:25:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: to_user ~ APPPATH\classes\controller\index\user.php [ 107 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\user.php(107): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 107, Array)
#1 [internal function]: Controller_Index_User->action_message()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 10:26:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: inmessage ~ APPPATH\views\index\user\sendpm.php [ 27 ]
2012-12-08 10:26:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: inmessage ~ APPPATH\views\index\user\sendpm.php [ 27 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\sendpm.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 27, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 10:31:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-08 10:31:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-08 10:31:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-08 10:31:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-08 10:31:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-08 10:31:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/user/sendpm was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-08 10:53:46 --- ERROR: View_Exception [ 0 ]: The requested view index/user/rating could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-12-08 10:53:46 --- STRACE: View_Exception [ 0 ]: The requested view index/user/rating could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('index/user/rati...')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('index/user/rati...', Array)
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(23): Kohana_View::factory('index/user/rati...', Array)
#3 [internal function]: Controller_Tutor_Rating->action_index()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-08 10:54:11 --- ERROR: View_Exception [ 0 ]: The requested view tutor/user/rating could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-12-08 10:54:11 --- STRACE: View_Exception [ 0 ]: The requested view tutor/user/rating could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('tutor/user/rati...')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('tutor/user/rati...', Array)
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(23): Kohana_View::factory('tutor/user/rati...', Array)
#3 [internal function]: Controller_Tutor_Rating->action_index()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-08 10:55:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_Coourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-12-08 10:55:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_Coourse' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-08 10:55:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\classes\controller\tutor\rating.php [ 23 ]
2012-12-08 10:55:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\classes\controller\tutor\rating.php [ 23 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 23, Array)
#1 [internal function]: Controller_Tutor_Rating->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 10:55:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\classes\controller\tutor\rating.php [ 23 ]
2012-12-08 10:55:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\classes\controller\tutor\rating.php [ 23 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 23, Array)
#1 [internal function]: Controller_Tutor_Rating->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 10:55:45 --- ERROR: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 10:55:45 --- STRACE: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(33): Kohana_ORM->__get('firstname')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 10:56:29 --- ERROR: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 10:56:29 --- STRACE: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(33): Kohana_ORM->__get('lastname')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:08:35 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:08:35 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:09:48 --- ERROR: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:09:48 --- STRACE: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('author')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:09:50 --- ERROR: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:09:50 --- STRACE: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('author')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:11:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author ~ APPPATH\views\tutor\rating\rating.php [ 37 ]
2012-12-08 11:11:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$author ~ APPPATH\views\tutor\rating\rating.php [ 37 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 37, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:12:27 --- ERROR: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:12:27 --- STRACE: Kohana_Exception [ 0 ]: The author property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('author')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:12:37 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:12:37 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:14:05 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:14:05 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:14:06 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:14:06 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:14:06 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:14:06 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:14:07 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:14:07 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:14:35 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:14:35 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:14:36 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:14:36 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:14:59 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:14:59 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:15:00 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:15:00 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:15:19 --- ERROR: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:15:19 --- STRACE: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_Course class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\rating.php(37): Kohana_ORM->__get('firstname')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:30:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\classes\controller\tutor\rating.php [ 40 ]
2012-12-08 11:30:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH\classes\controller\tutor\rating.php [ 40 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 40, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:32:02 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Usercourse class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:32:02 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Usercourse class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(44): Kohana_ORM->__get('result')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:33:39 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Usercourse class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-12-08 11:33:39 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Usercourse class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(44): Kohana_ORM->__get('result')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-08 11:38:57 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2012-12-08 11:38:57 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #101, 'stutent_id')
#2 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('stutent_id')
#3 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Database_Result->offsetGet('stutent_id')
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-08 11:39:23 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2012-12-08 11:39:23 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #101, 'stutent_id')
#2 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('stutent_id')
#3 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Database_Result->offsetGet('stutent_id')
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-08 11:39:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$stutent_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-08 11:39:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$stutent_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:39:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-08 11:39:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:40:37 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2012-12-08 11:40:37 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #101, 'student_id')
#2 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('student_id')
#3 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Database_Result->offsetGet('student_id')
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-08 11:40:52 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2012-12-08 11:40:52 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #101, 'student_id')
#2 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('student_id')
#3 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Database_Result->offsetGet('student_id')
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-08 11:40:53 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2012-12-08 11:40:53 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #101, 'student_id')
#2 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('student_id')
#3 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Database_Result->offsetGet('student_id')
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-08 11:41:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-08 11:41:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:43:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-08 11:43:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:43:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-08 11:43:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:43:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-08 11:43:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:43:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-08 11:43:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:43:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-08 11:43:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:43:36 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
2012-12-08 11:43:36 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 44 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(44): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 44, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:44:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
2012-12-08 11:44:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 45, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:44:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
2012-12-08 11:44:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 45, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:44:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
2012-12-08 11:44:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 45, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:44:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
2012-12-08 11:44:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$course_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 45, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-08 11:48:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
2012-12-08 11:48:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$student_id ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(45): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 45, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}