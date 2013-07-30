<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-23 04:00:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\inc.php [ 47 ]
2013-03-23 04:00:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\index\inc.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(47): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-23 04:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-23 04:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-23 04:58:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 76 ]
2013-03-23 04:58:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\controller\index\inc.php [ 76 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\inc.php(76): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Inc->action_outresult(Object(Controller_Index_Inc))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-03-23 15:39:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-23 15:39:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}