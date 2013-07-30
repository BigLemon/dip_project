<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-24 10:30:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL boot was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-24 10:30:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL boot was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\boot\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\boot\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\boot\index.php(109): Kohana_Request->execute()
#3 {main}