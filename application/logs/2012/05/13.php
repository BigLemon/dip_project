<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-13 06:35:17 --- ERROR: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-05-13 06:35:17 --- STRACE: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#3 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xampp\www\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#8 [internal function]: Controller_Index_Main->action_index()
#9 C:\xampp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-05-13 06:35:25 --- ERROR: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-05-13 06:35:25 --- STRACE: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#3 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xampp\www\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#8 [internal function]: Controller_Index_Main->action_index()
#9 C:\xampp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-05-13 06:35:28 --- ERROR: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-05-13 06:35:28 --- STRACE: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#3 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xampp\www\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#8 [internal function]: Controller_Index_Main->action_index()
#9 C:\xampp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-05-13 06:35:43 --- ERROR: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-05-13 06:35:43 --- STRACE: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#3 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xampp\www\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#8 [internal function]: Controller_Index_Main->action_index()
#9 C:\xampp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-05-13 06:35:53 --- ERROR: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-05-13 06:35:53 --- STRACE: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#3 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#7 C:\xampp\www\kohana\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#8 [internal function]: Controller_Index_Main->action_index()
#9 C:\xampp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#10 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-05-13 06:40:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\index\base.php [ 312 ]
2012-05-13 06:40:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-13 06:40:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\index\base.php [ 312 ]
2012-05-13 06:40:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\index\base.php [ 312 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-13 06:45:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-13 06:45:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-13 06:46:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-13 06:46:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-13 06:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-13 06:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-13 06:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-13 06:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-13 06:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-13 06:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-13 06:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-13 06:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-13 06:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-13 06:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/default_gravatar.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-13 06:48:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-13 06:48:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: news/view/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-13 06:50:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-05-13 06:50:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-13 07:00:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-13 07:00:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/news was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-13 07:02:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/tests was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-13 07:02:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/tests was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-13 07:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-13 07:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-13 07:02:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/tests was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-05-13 07:02:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/tests was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-05-13 07:46:57 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.tests' doesn't exist [ SHOW FULL COLUMNS FROM `tests` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-05-13 07:46:57 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.tests' doesn't exist [ SHOW FULL COLUMNS FROM `tests` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('tests')
#2 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\www\kohana\application\classes\controller\tutor\tests.php(15): Kohana_ORM::factory('test')
#7 [internal function]: Controller_Tutor_Tests->action_index()
#8 C:\xampp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Tests))
#9 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2012-05-13 08:15:59 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.tests' doesn't exist [ SHOW FULL COLUMNS FROM `tests` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-05-13 08:15:59 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.tests' doesn't exist [ SHOW FULL COLUMNS FROM `tests` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\www\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('tests')
#2 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\xampp\www\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\xampp\www\kohana\application\classes\controller\tutor\tests.php(15): Kohana_ORM::factory('test')
#7 [internal function]: Controller_Tutor_Tests->action_index()
#8 C:\xampp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Tests))
#9 C:\xampp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\www\kohana\index.php(109): Kohana_Request->execute()
#12 {main}