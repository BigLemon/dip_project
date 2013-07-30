<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-20 08:58:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-09-20 08:58:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-09-20 10:13:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-20 10:13:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-20 10:13:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-20 10:13:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-20 10:14:51 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'openserver' (11004) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-09-20 10:14:51 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Unknown MySQL server host 'openserver' (11004) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
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
2012-09-20 10:15:29 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-09-20 10:15:29 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#4 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 D:\xampp\htdocs\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#9 [internal function]: Controller_Index_Main->action_index()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2012-09-20 10:15:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 10:15:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 10:15:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 10:15:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 10:16:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 10:16:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 10:16:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 10:16:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 10:31:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 10:31:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 10:33:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 10:33:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 10:33:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 10:33:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 10:36:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 10:36:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:29:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 11:29:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:29:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 11:29:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:29:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 11:29:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:31:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 11:31:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:31:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 11:31:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:31:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 11:31:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:31:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 11:31:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:31:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
2012-09-20 11:31:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:50:54 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-09-20 11:50:54 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to MySQL server on 'localhost' (10061) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
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
2012-09-20 11:51:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
2012-09-20 11:51:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:53:25 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
2012-09-20 11:53:25 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:57:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
2012-09-20 11:57:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:57:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
2012-09-20 11:57:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 11:57:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
2012-09-20 11:57:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 12:00:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
2012-09-20 12:00:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 12:08:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
2012-09-20 12:08:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 12:10:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
2012-09-20 12:10:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-20 12:10:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
2012-09-20 12:10:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\base.php [ 313 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}