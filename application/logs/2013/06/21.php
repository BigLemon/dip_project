<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-06-21 08:31:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/lab/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-06-21 08:31:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/rating/lab/3 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-06-21 11:15:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresults.id_lab' in 'where clause' [ SELECT * FROM `users` JOIN `labresults` ON (`labresults`.`id_user` = `users`.`id`) WHERE `testresults`.`id_lab` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-06-21 11:15:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresults.id_lab' in 'where clause' [ SELECT * FROM `users` JOIN `labresults` ON (`labresults`.`id_user` = `users`.`id`) WHERE `testresults`.`id_lab` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(201): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_lab()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}