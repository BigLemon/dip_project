<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-18 09:22:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
2013-02-18 09:22:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\tutor\rating.php [ 45 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(45): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-18 09:26:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\classes\controller\tutor\rating.php [ 52 ]
2013-02-18 09:26:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\classes\controller\tutor\rating.php [ 52 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(52): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-18 09:36:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: test1 ~ APPPATH\classes\controller\tutor\rating.php [ 76 ]
2013-02-18 09:36:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: test1 ~ APPPATH\classes\controller\tutor\rating.php [ 76 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(76): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-18 09:36:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\tutor\rating.php [ 76 ]
2013-02-18 09:36:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\tutor\rating.php [ 76 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(76): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-18 09:38:12 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-18 09:38:12 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(83): Kohana_ORM->__get('testresult')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-18 09:38:57 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-18 09:38:57 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(83): Kohana_ORM->__get('testresult')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-18 09:39:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-18 09:39:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(83): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-18 09:41:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-18 09:41:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(80): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-18 09:41:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\controller\tutor\rating.php [ 81 ]
2013-02-18 09:41:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\controller\tutor\rating.php [ 81 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(81): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-18 09:49:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-18 09:49:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(43): Kohana_ORM->find_all()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#7 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#11 [internal function]: Kohana_Controller_Template->after()
#12 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#13 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#16 {main}
2013-02-18 09:50:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\tutor\rating\test.php [ 94 ]
2013-02-18 09:50:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\tutor\rating\test.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-18 10:12:55 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 34 ]
2013-02-18 10:12:55 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-18 10:13:25 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 34 ]
2013-02-18 10:13:25 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-18 10:13:28 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 34 ]
2013-02-18 10:13:28 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-18 10:13:31 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 34 ]
2013-02-18 10:13:31 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-18 10:14:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\tutor\rating\test.php [ 94 ]
2013-02-18 10:14:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\tutor\rating\test.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-18 10:14:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$lastname ~ APPPATH\views\tutor\rating\test.php [ 40 ]
2013-02-18 10:14:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$lastname ~ APPPATH\views\tutor\rating\test.php [ 40 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(40): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}