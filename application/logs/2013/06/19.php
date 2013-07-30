<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-19 07:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-19 07:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-19 07:06:53 --- ERROR: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Empty regular expression ~ APPPATH\classes\controller\index\inc.php [ 72 ]
2013-06-19 07:06:53 --- STRACE: ErrorException [ 2 ]: preg_replace() [function.preg-replace]: Empty regular expression ~ APPPATH\classes\controller\index\inc.php [ 72 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(72): Kohana_Core::error_handler(' ', '', '<?php?$tempsql ...')
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 07:10:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-19 07:10:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-19 07:17:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answer ~ APPPATH\classes\controller\index\inc.php [ 77 ]
2013-06-19 07:17:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answer ~ APPPATH\classes\controller\index\inc.php [ 77 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(77): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 07:25:46 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.exercise' doesn't exist [ SELECT `answer` FROM `exercise` WHERE `lab_id` = '4' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-06-19 07:25:46 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.exercise' doesn't exist [ SELECT `answer` FROM `exercise` WHERE `lab_id` = '4' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `answer`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(76): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Inc->action_outresult()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-19 07:27:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-19 07:27:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-06-19 07:28:11 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 79 ]
2013-06-19 07:28:11 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 79 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(79): Kohana_Core::error_handler('<?php?$tempsql ...', 'Object', 2.03389830508)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 07:32:16 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 79 ]
2013-06-19 07:32:16 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 79 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(79): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 07:33:29 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 79 ]
2013-06-19 07:33:29 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 79 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(79): Kohana_Core::error_handler('<?php?$tempsql ...', 'Object', 2.03389830508)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 07:33:43 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 07:33:43 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 07:43:26 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 79 ]
2013-06-19 07:43:26 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 79 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(79): Kohana_Core::error_handler('<?php?$tempsql ...', 'Object', 2.03389830508)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 07:43:48 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\index\inc.php [ 79 ]
2013-06-19 07:43:48 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\index\inc.php [ 79 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(79): Kohana_Core::error_handler('<?php?$tempsql ...', 'Array', 3.40136054422)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:01:38 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:01:38 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler('<?php?$tempsql ...', 'Object', 2.03389830508)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:02:16 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:02:16 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler('<?php?$tempsql ...', 'Array', 3.40136054422)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:03:40 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:03:40 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler('<?php?$tempsql ...', 'Array', 3.40136054422)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:04:29 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:04:29 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler('<?php?$tempsql ...', 'Object', 2.03389830508)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:04:29 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:04:29 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler('<?php?$tempsql ...', 'Object', 2.03389830508)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:05:34 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:05:34 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler('<?php?$tempsql ...', 'Object', 2.03389830508)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:06:35 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\index\inc.php [ 79 ]
2013-06-19 08:06:35 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\controller\index\inc.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-19 08:06:54 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\index\inc.php [ 81 ]
2013-06-19 08:06:54 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\controller\index\inc.php [ 81 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(81): Kohana_Core::error_handler('<?php?$tempsql ...', 'Array', 3.40136054422)
#1 [internal function]: Controller_Index_Inc->action_outresult()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:09:14 --- ERROR: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ APPPATH\classes\controller\index\inc.php [ 79 ]
2013-06-19 08:09:14 --- STRACE: ErrorException [ 1 ]: Call to a member function as_object() on a non-object ~ APPPATH\classes\controller\index\inc.php [ 79 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-19 08:26:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:26:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:27:15 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:27:15 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:27:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:27:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:34:21 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:34:21 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:34:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:34:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:35:03 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:35:03 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:35:29 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:35:29 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:35:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:35:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:36:26 --- ERROR: ErrorException [ 8 ]: Undefined index:  idx ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:36:26 --- STRACE: ErrorException [ 8 ]: Undefined index:  idx ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:36:34 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:36:34 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:37:00 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:37:00 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:40:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\controller\index\inc.php [ 83 ]
2013-06-19 08:40:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\controller\index\inc.php [ 83 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:41:13 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\index\inc.php [ 83 ]
2013-06-19 08:41:13 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\index\inc.php [ 83 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:42:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 08:42:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:44:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  title ~ APPPATH\classes\controller\index\inc.php [ 83 ]
2013-06-19 08:44:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  title ~ APPPATH\classes\controller\index\inc.php [ 83 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:45:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
2013-06-19 08:45:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:46:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
2013-06-19 08:46:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:47:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\inc.php [ 83 ]
2013-06-19 08:47:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\index\inc.php [ 83 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:47:18 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
2013-06-19 08:47:18 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:47:36 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
2013-06-19 08:47:36 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:47:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
2013-06-19 08:47:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:50:38 --- ERROR: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
2013-06-19 08:50:38 --- STRACE: ErrorException [ 8 ]: Undefined index:  answer ~ APPPATH\classes\controller\index\inc.php [ 83 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(83): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 08:58:10 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Exercise as array ~ APPPATH\classes\controller\index\inc.php [ 84 ]
2013-06-19 08:58:10 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Exercise as array ~ APPPATH\classes\controller\index\inc.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-19 09:04:04 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Exercise as array ~ APPPATH\classes\controller\index\inc.php [ 84 ]
2013-06-19 09:04:04 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Exercise as array ~ APPPATH\classes\controller\index\inc.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-19 09:04:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: e ~ APPPATH\classes\controller\index\inc.php [ 84 ]
2013-06-19 09:04:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: e ~ APPPATH\classes\controller\index\inc.php [ 84 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(84): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 09:04:58 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answer ~ APPPATH\classes\controller\index\inc.php [ 84 ]
2013-06-19 09:04:58 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answer ~ APPPATH\classes\controller\index\inc.php [ 84 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(84): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 09:07:10 --- ERROR: ErrorException [ 1 ]: Call to undefined function  srting() ~ APPPATH\classes\controller\index\inc.php [ 84 ]
2013-06-19 09:07:10 --- STRACE: ErrorException [ 1 ]: Call to undefined function  srting() ~ APPPATH\classes\controller\index\inc.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-06-19 09:08:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answer ~ APPPATH\classes\controller\index\inc.php [ 84 ]
2013-06-19 09:08:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answer ~ APPPATH\classes\controller\index\inc.php [ 84 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(84): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 09:09:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
2013-06-19 09:09:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answer ~ APPPATH\classes\controller\index\inc.php [ 80 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(80): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 10:09:04 --- ERROR: ErrorException [ 1 ]: Class 'Model_Labresult' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-06-19 10:09:04 --- STRACE: ErrorException [ 1 ]: Class 'Model_Labresult' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('labresult')
#1 {main}
2013-06-19 10:10:20 --- ERROR: ErrorException [ 1 ]: Class 'Model_Labresult' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-06-19 10:10:20 --- STRACE: ErrorException [ 1 ]: Class 'Model_Labresult' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('labresult')
#1 {main}
2013-06-19 10:11:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: id_user ~ APPPATH\classes\controller\index\inc.php [ 112 ]
2013-06-19 10:11:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: id_user ~ APPPATH\classes\controller\index\inc.php [ 112 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(112): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-06-19 10:11:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_lab' in 'where clause' [ UPDATE `testresults` SET `result` = 2 WHERE `id_user` = '1' AND `id_lab` = '4' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-06-19 10:11:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_lab' in 'where clause' [ UPDATE `testresults` SET `result` = 2 WHERE `id_user` = '1' AND `id_lab` = '4' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `testres...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(113): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Inc->action_outresult()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Inc))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-06-19 10:21:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-06-19 10:21:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}