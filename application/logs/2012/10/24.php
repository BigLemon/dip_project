<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-24 10:44:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-24 10:44:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/avatars/10_1349514909.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-24 10:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/avatars/10_1349514909.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:44:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 25 ]
2012-10-24 10:44:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: qlist ~ APPPATH\classes\controller\index\tests.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 25, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-24 10:44:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-10-24 10:44:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-24 10:44:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-24 10:44:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-24 10:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-24 10:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-24 10:45:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-10-24 10:45:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-24 10:45:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-24 10:45:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:45:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/avatars/10_1349514909.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-24 10:45:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/avatars/10_1349514909.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/avatars/10_1349514909.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-10-24 10:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/avatars/10_1349514909.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-24 10:45:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL courses/tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-10-24 10:45:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL courses/tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-24 10:46:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-24 10:46:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-24 10:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-10-24 10:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tests/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}