<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-28 02:22:40 --- ERROR: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
2012-09-28 02:22:40 --- STRACE: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\kohana\session.php [ 326 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\session.php(125): Kohana_Session->read(NULL)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 D:\xampp\htdocs\kohana\modules\auth\classes\kohana\auth.php(57): Kohana_Session::instance('native')
#3 D:\xampp\htdocs\kohana\modules\auth\classes\kohana\auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 D:\xampp\htdocs\kohana\application\classes\controller\index.php(13): Kohana_Auth::instance()
#5 [internal function]: Controller_Index->before()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2012-09-28 02:22:57 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'user'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-09-28 02:22:57 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'user'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#8 [internal function]: Controller_Index_Main->action_index()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-28 02:23:08 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'user'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-09-28 02:23:08 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'user'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#8 [internal function]: Controller_Index_Main->action_index()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-28 02:23:09 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'user'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-09-28 02:23:09 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'user'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#8 [internal function]: Controller_Index_Main->action_index()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-28 02:23:10 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'user'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-09-28 02:23:10 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'user'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#8 [internal function]: Controller_Index_Main->action_index()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-28 02:23:10 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'user'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-09-28 02:23:10 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'user'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 D:\xampp\htdocs\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#8 [internal function]: Controller_Index_Main->action_index()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-09-28 02:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 02:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 02:27:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 02:27:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 02:27:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-28 02:27:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-28 02:27:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 25 ]
2012-09-28 02:27:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 25, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 02:28:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-28 02:28:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-28 02:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-28 02:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-28 02:29:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 25 ]
2012-09-28 02:29:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 25, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 02:31:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 26 ]
2012-09-28 02:31:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 26 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 26, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 02:31:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-09-28 02:31:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-28 02:32:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 26 ]
2012-09-28 02:32:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 26 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 26, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 02:32:42 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.testresults' doesn't exist [ SHOW FULL COLUMNS FROM `testresults` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-28 02:32:42 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.testresults' doesn't exist [ SHOW FULL COLUMNS FROM `testresults` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('testresults')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(54): Kohana_ORM::factory('testresult')
#7 [internal function]: Controller_Index_Tests->action_go()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-28 02:36:04 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.testresults' doesn't exist [ SHOW FULL COLUMNS FROM `testresults` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-28 02:36:04 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.testresults' doesn't exist [ SHOW FULL COLUMNS FROM `testresults` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('testresults')
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(54): Kohana_ORM::factory('testresult')
#7 [internal function]: Controller_Index_Tests->action_go()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2012-09-28 02:36:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 02:36:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 02:47:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: right_aner2 ~ APPPATH\classes\controller\index\tests.php [ 51 ]
2012-09-28 02:47:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: right_aner2 ~ APPPATH\classes\controller\index\tests.php [ 51 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 51, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 03:01:02 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$right ~ APPPATH\classes\controller\index\tests.php [ 51 ]
2012-09-28 03:01:02 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$right ~ APPPATH\classes\controller\index\tests.php [ 51 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(51): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 51, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 03:01:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 26 ]
2012-09-28 03:01:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 26 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 26, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 03:02:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$right ~ APPPATH\classes\controller\index\tests.php [ 51 ]
2012-09-28 03:02:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$right ~ APPPATH\classes\controller\index\tests.php [ 51 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(51): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 51, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 03:08:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH\classes\controller\index\tests.php [ 49 ]
2012-09-28 03:08:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: q ~ APPPATH\classes\controller\index\tests.php [ 49 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 49, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 03:09:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: right_anser ~ APPPATH\classes\controller\index\tests.php [ 52 ]
2012-09-28 03:09:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: right_anser ~ APPPATH\classes\controller\index\tests.php [ 52 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 52, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 03:11:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 26 ]
2012-09-28 03:11:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 26 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 26, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 03:15:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: right_anser ~ APPPATH\classes\controller\index\tests.php [ 50 ]
2012-09-28 03:15:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: right_anser ~ APPPATH\classes\controller\index\tests.php [ 50 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 50, Array)
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-28 03:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 03:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 03:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 03:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-28 03:44:01 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '960fae2031f2719125792fe717bf857613151a48a535e8aa90d852254f438b33', 'a@z9.ru', 'qwe', 'qwe', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-28 03:44:01 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '960fae2031f2719125792fe717bf857613151a48a535e8aa90d852254f438b33', 'a@z9.ru', 'qwe', 'qwe', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-28 07:37:46 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'a@z9.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('qqwedsa', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', '123123123', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-28 07:37:46 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'a@z9.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('qqwedsa', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', '123123123', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-28 07:44:34 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'a@z9.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('qqwedsa', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', '123123123', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-28 07:44:34 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'a@z9.ru' for key 'uniq_email' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('qqwedsa', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', '123123123', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-28 07:44:56 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'qwe@qw.ru', '123123123', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-28 07:44:56 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'qwe@qw.ru', '123123123', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-28 07:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-28 07:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}