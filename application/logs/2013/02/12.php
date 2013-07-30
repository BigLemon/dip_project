<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-12 16:29:19 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
2013-02-12 16:29:19 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database.php(456): Kohana_Core::error_handler(Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder.php(116): Kohana_Database->quote(Object(Database_MySQL), Array)
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder\select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL))
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(true)
#5 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result()
#6 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_ORM->find_all()
#7 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#11 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#12 {main}
2013-02-12 16:29:20 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
2013-02-12 16:29:20 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database.php(456): Kohana_Core::error_handler(Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder.php(116): Kohana_Database->quote(Object(Database_MySQL), Array)
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder\select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL))
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(true)
#5 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result()
#6 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_ORM->find_all()
#7 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#11 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#12 {main}
2013-02-12 16:29:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-12 16:29:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-12 16:38:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 52 ]
2013-02-12 16:38:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 52 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(52): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-12 16:41:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ DOCROOT\1.php [ 3 ]
2013-02-12 16:41:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ DOCROOT\1.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-12 17:46:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/1.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-12 17:46:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/1.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-12 17:46:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/1.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-12 17:46:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/1.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-12 17:47:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/1.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-12 17:47:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/1.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}