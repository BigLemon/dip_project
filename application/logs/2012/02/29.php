<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-29 01:33:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-02-29 01:33:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 01:33:58 --- ERROR: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-02-29 01:33:58 --- STRACE: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 01:34:21 --- ERROR: ErrorException [ 1 ]: Class 'Model_News' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-02-29 01:34:21 --- STRACE: ErrorException [ 1 ]: Class 'Model_News' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 01:34:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Index/new' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-02-29 01:34:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Index/new' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 01:38:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-02-29 01:38:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 01:38:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-02-29 01:38:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 01:38:45 --- ERROR: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-02-29 01:38:45 --- STRACE: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-02-29 01:41:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: 1 ~ APPPATH\classes\controller\index\main.php [ 20 ]
2012-02-29 01:41:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: 1 ~ APPPATH\classes\controller\index\main.php [ 20 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\main.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 20, Array)
#1 [internal function]: Controller_Index_Main->action_index()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-29 01:41:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL news/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-02-29 01:41:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL news/view/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-02-29 01:46:08 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'qwert1x@yandex.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('test', 'f81392721dcf1e9d06067277680a6cf6ed94df465e4fa37eec19c429a1491c06', 'qwert1x@yandex.ru', 'Катя', 'Makarov', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 01:46:08 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'qwert1x@yandex.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('test', 'f81392721dcf1e9d06067277680a6cf6ed94df465e4fa37eec19c429a1491c06', 'qwert1x@yandex.ru', 'Катя', 'Makarov', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 W:\html\kohana\www\application\classes\controller\index\auth.php(56): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-02-29 01:46:50 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'qwert1x@mail.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('test', 'e3b4450a17b384f51a5eb4ec0a22ea77a2fc57d572bd3f9ea7a51bf5eb207aa0', 'qwert1x@mail.ru', 'Катя', 'Makarov', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-29 01:46:50 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'qwert1x@mail.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('test', 'e3b4450a17b384f51a5eb4ec0a22ea77a2fc57d572bd3f9ea7a51bf5eb207aa0', 'qwert1x@mail.ru', 'Катя', 'Makarov', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 W:\html\kohana\www\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 W:\html\kohana\www\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 W:\html\kohana\www\application\classes\controller\index\auth.php(56): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-02-29 01:51:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: entry ~ APPPATH\classes\controller\index\news.php [ 28 ]
2012-02-29 01:51:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: entry ~ APPPATH\classes\controller\index\news.php [ 28 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\news.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 28, Array)
#1 [internal function]: Controller_Index_News->action_view()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_News))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-02-29 01:52:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\index_view.php [ 10 ]
2012-02-29 01:52:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\index_view.php [ 10 ]
--
#0 W:\html\kohana\www\application\views\index\index_view.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'W:\html\kohana\...', 10, Array)
#1 W:\html\kohana\www\system\classes\kohana\view.php(61): include('W:\html\kohana\...')
#2 W:\html\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('W:\html\kohana\...', Array)
#3 W:\html\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_News))
#6 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-02-29 01:52:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/'-1""'/sx ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 01:52:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/'-1""'/sx ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 01:52:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/'-1/sx ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 01:52:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/'-1/sx ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 01:53:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/'-1/edit ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-02-29 01:53:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/'-1/edit ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-02-29 02:26:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::limit() ~ APPPATH\classes\controller\index\main.php [ 16 ]
2012-02-29 02:26:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::limit() ~ APPPATH\classes\controller\index\main.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}