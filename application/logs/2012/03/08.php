<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-08 03:09:18 --- ERROR: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 364 ]
2012-03-08 03:09:18 --- STRACE: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'email_available' ~ SYSPATH\classes\kohana\validation.php [ 364 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'W:\html\kohana\...', 364, Array)
#1 W:\html\kohana\www\system\classes\kohana\validation.php(364): call_user_func_array(Array, Array)
#2 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1172): Kohana_Validation->check()
#3 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(Object(Validation))
#4 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(58): Model_Auth_User->create_user(Array, Array)
#6 [internal function]: Controller_Index_Auth->action_register()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 03:21:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-03-08 03:21:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-08 03:23:00 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'qwert1x' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('qwert1x', 'e3b4450a17b384f51a5eb4ec0a22ea77a2fc57d572bd3f9ea7a51bf5eb207aa0', 'qwert1x@yandex.ru', 'Алексей', 'Макаров', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-08 03:23:00 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'qwert1x' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('qwert1x', 'e3b4450a17b384f51a5eb4ec0a22ea77a2fc57d572bd3f9ea7a51bf5eb207aa0', 'qwert1x@yandex.ru', 'Алексей', 'Макаров', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 W:\html\kohana\www\application\classes\controller\index\auth.php(58): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-08 03:26:58 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ SYSPATH\classes\kohana\validation.php [ 476 ]
2012-03-08 03:26:58 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ SYSPATH\classes\kohana\validation.php [ 476 ]
--
#0 W:\html\kohana\www\system\classes\kohana\validation.php(476): Kohana_Core::error_handler(8, 'Undefined index...', 'W:\html\kohana\...', 476, Array)
#1 W:\html\kohana\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('auth/user', true)
#2 W:\html\kohana\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'auth', true)
#3 W:\html\kohana\www\application\classes\controller\index\auth.php(66): Kohana_ORM_Validation_Exception->errors('auth')
#4 [internal function]: Controller_Index_Auth->action_register()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-08 03:27:35 --- ERROR: ErrorException [ 8 ]: Undefined index: email_available ~ SYSPATH\classes\kohana\validation.php [ 476 ]
2012-03-08 03:27:35 --- STRACE: ErrorException [ 8 ]: Undefined index: email_available ~ SYSPATH\classes\kohana\validation.php [ 476 ]
--
#0 W:\html\kohana\www\system\classes\kohana\validation.php(476): Kohana_Core::error_handler(8, 'Undefined index...', 'W:\html\kohana\...', 476, Array)
#1 W:\html\kohana\www\modules\orm\classes\kohana\orm\validation\exception.php(168): Kohana_Validation->errors('auth/user', true)
#2 W:\html\kohana\www\modules\orm\classes\kohana\orm\validation\exception.php(133): Kohana_ORM_Validation_Exception->generate_errors('user', Array, 'auth', true)
#3 W:\html\kohana\www\application\classes\controller\index\auth.php(66): Kohana_ORM_Validation_Exception->errors('auth')
#4 [internal function]: Controller_Index_Auth->action_register()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-08 03:32:42 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\index\auth\register_view.php [ 15 ]
2012-03-08 03:32:42 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\index\auth\register_view.php [ 15 ]
--
#0 W:\html\kohana\www\application\views\index\auth\register_view.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'W:\html\kohana\...', 15, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\index_view.php(79): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-08 03:42:40 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 03:42:40 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 03:46:57 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 03:46:57 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 03:48:32 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 03:48:32 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 04:01:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 04:01:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 04:10:37 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 04:10:37 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 04:11:09 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 04:11:09 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 04:18:50 --- ERROR: Kohana_Exception [ 0 ]: The reg_username property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-03-08 04:18:50 --- STRACE: Kohana_Exception [ 0 ]: The reg_username property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('reg_username', 'qwert1x')
#1 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(725): Kohana_ORM->__set('reg_username', 'qwert1x')
#2 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->values(Array, Array)
#3 W:\html\kohana\www\application\classes\controller\index\auth.php(57): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-03-08 04:23:48 --- ERROR: ErrorException [ 8 ]: Undefined index: reg_username ~ APPPATH\views\index\auth\register_view.php [ 14 ]
2012-03-08 04:23:48 --- STRACE: ErrorException [ 8 ]: Undefined index: reg_username ~ APPPATH\views\index\auth\register_view.php [ 14 ]
--
#0 W:\html\kohana\www\application\views\index\auth\register_view.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'W:\html\kohana\...', 14, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 W:\html\kohana\www\application\views\index\index_view.php(79): Kohana_View->__toString()
#5 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#6 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#7 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#10 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2012-03-08 04:25:52 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 04:25:52 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 04:54:02 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 04:54:02 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 04:58:19 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 04:58:19 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 04:58:58 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 04:58:58 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 05:01:03 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 05:01:03 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 05:01:16 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 05:01:16 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 05:01:25 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 05:01:25 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 05:01:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\classes\controller\index\auth.php [ 19 ]
2012-03-08 05:01:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH\classes\controller\index\auth.php [ 19 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\auth.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 19, Array)
#1 [internal function]: Controller_Index_Auth->action_login()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-08 05:01:42 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 05:01:42 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(21): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 05:02:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\index\auth.php [ 21 ]
2012-03-08 05:02:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\index\auth.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-08 05:02:14 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 05:02:14 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 05:14:36 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 05:14:36 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 05:18:15 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 05:18:15 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 05:20:20 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 05:20:20 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 05:22:48 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 05:22:48 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:29:48 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:29:48 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:37:07 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:37:07 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:37:12 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:37:12 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:37:31 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:37:31 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(21): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:38:47 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:38:47 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(21): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:39:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:39:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(21): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:39:01 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:39:01 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qwert1x', 'omglolpass', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(21): Kohana_Auth->login('qwert1x', 'omglolpass', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:39:09 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:39:09 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(21): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:52:25 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:52:25 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:52:51 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:52:51 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:58:29 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:58:29 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 07:59:28 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 07:59:28 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 08:00:41 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 08:00:41 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 08:00:51 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 08:00:51 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 08:03:25 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-03-08 08:03:25 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1261): Kohana_ORM->check(NULL)
#1 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(94): Kohana_ORM->update()
#2 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(262): Model_Auth_User->complete_login()
#3 W:\html\kohana\www\modules\orm\classes\kohana\auth\orm.php(107): Kohana_Auth_ORM->complete_login(Object(Model_User))
#4 W:\html\kohana\www\modules\auth\classes\kohana\auth.php(90): Kohana_Auth_ORM->_login('qweqwe', 'qweqweqwe', false)
#5 W:\html\kohana\www\application\classes\controller\index\auth.php(20): Kohana_Auth->login('qweqwe', 'qweqweqwe', false)
#6 [internal function]: Controller_Index_Auth->action_login()
#7 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-03-08 08:23:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\classes\controller\index\auth.php [ 45 ]
2012-03-08 08:23:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\classes\controller\index\auth.php [ 45 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\auth.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 45, Array)
#1 [internal function]: Controller_Index_Auth->action_register()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-08 08:32:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\auth.php [ 49 ]
2012-03-08 08:32:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\auth.php [ 49 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\auth.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 49, Array)
#1 [internal function]: Controller_Index_Auth->action_register()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-08 08:40:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\auth.php [ 52 ]
2012-03-08 08:40:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\controller\index\auth.php [ 52 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\auth.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 52, Array)
#1 [internal function]: Controller_Index_Auth->action_register()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}