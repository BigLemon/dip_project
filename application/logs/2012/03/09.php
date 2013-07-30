<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-09 05:55:28 --- ERROR: ErrorException [ 8 ]: Use of undefined constant pause - assumed 'pause' ~ APPPATH\classes\controller\index\auth.php [ 21 ]
2012-03-09 05:55:28 --- STRACE: ErrorException [ 8 ]: Use of undefined constant pause - assumed 'pause' ~ APPPATH\classes\controller\index\auth.php [ 21 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\auth.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', 'W:\html\kohana\...', 21, Array)
#1 [internal function]: Controller_Index_Auth->action_login()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-09 05:56:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant pause - assumed 'pause' ~ APPPATH\classes\controller\index\auth.php [ 21 ]
2012-03-09 05:56:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant pause - assumed 'pause' ~ APPPATH\classes\controller\index\auth.php [ 21 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\auth.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', 'W:\html\kohana\...', 21, Array)
#1 [internal function]: Controller_Index_Auth->action_login()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-09 05:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutors/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-09 05:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutors/js/libs/bootstrap/transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-09 05:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutors/js/libs/bootstrap/collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-09 05:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutors/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-09 05:58:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutors/js/libs/bootstrap/dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-09 05:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutors/js/libs/bootstrap/transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-09 05:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutors/js/libs/bootstrap/collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-09 05:58:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutors/js/libs/bootstrap/dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-09 06:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/register/js/libs/bootstrap/collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-09 06:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/register/js/libs/bootstrap/collapse.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-09 06:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/register/js/libs/bootstrap/dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-09 06:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/register/js/libs/bootstrap/dropdown.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-09 06:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/register/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-09 06:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/register/js/script.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-09 06:22:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/register/js/libs/bootstrap/transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-03-09 06:22:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: auth/register/js/libs/bootstrap/transition.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-03-09 06:26:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:26:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:26:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:26:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:27:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:27:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:29:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:29:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:30:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:30:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:30:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:30:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:30:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:30:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:30:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:30:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax/checkisunique was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:31:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:31:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:31:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:31:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:31:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-03-09 06:31:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ajax was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-03-09 06:31:49 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= ''' at line 1 [ SELECT COUNT(id) AS `total` FROM `users` WHERE = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-03-09 06:31:49 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= ''' at line 1 [ SELECT COUNT(id) AS `total` FROM `users` WHERE = '' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 W:\html\kohana\www\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(id...', false, Array)
#1 W:\html\kohana\www\application\classes\controller\ajax.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Ajax->action_checkisunique()
#3 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-03-09 07:40:00 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\user.php [ 15 ]
2012-03-09 07:40:00 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\controller\index\user.php [ 15 ]
--
#0 W:\html\kohana\www\application\classes\controller\index\user.php(15): Kohana_Core::error_handler(2, 'Attempt to assi...', 'W:\html\kohana\...', 15, Array)
#1 [internal function]: Controller_Index_User->action_index()
#2 W:\html\kohana\www\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#3 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2012-03-09 08:04:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/qwe was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-03-09 08:04:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/qwe was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 W:\html\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 W:\html\kohana\www\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 W:\html\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}