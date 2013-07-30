<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-14 08:27:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/1.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-14 08:27:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: inc/1.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-14 08:27:43 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
2013-02-14 08:27:43 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
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
2013-02-14 08:27:44 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
2013-02-14 08:27:44 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
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
2013-02-14 08:37:29 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
2013-02-14 08:37:29 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
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
2013-02-14 09:12:28 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
2013-02-14 09:12:28 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
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
2013-02-14 09:15:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: testresult ~ APPPATH\classes\controller\tutor\rating.php [ 64 ]
2013-02-14 09:15:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: testresult ~ APPPATH\classes\controller\tutor\rating.php [ 64 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 09:15:31 --- ERROR: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 09:15:31 --- STRACE: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(35): Kohana_ORM->__get('users')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 09:17:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\test.php [ 33 ]
2013-02-14 09:17:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\test.php [ 33 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(33): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 09:22:59 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\views\tutor\rating\test.php [ 34 ]
2013-02-14 09:22:59 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\views\tutor\rating\test.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(34): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 09:23:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\views\tutor\rating\test.php [ 34 ]
2013-02-14 09:23:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\views\tutor\rating\test.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(34): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 09:23:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\views\tutor\rating\test.php [ 34 ]
2013-02-14 09:23:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\views\tutor\rating\test.php [ 34 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(34): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 09:25:34 --- ERROR: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 09:25:34 --- STRACE: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(39): Kohana_ORM->__get('lastname')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 09:38:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tutor\rating\test.php [ 40 ]
2013-02-14 09:38:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tutor\rating\test.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 09:38:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 37 ]
2013-02-14 09:38:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 09:38:59 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 40 ]
2013-02-14 09:38:59 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 40 ]
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
2013-02-14 09:39:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tutor\rating\test.php [ 44 ]
2013-02-14 09:39:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tutor\rating\test.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 09:39:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 40 ]
2013-02-14 09:39:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 40 ]
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
2013-02-14 09:41:26 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 44 ]
2013-02-14 09:41:26 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 44 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(44): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 09:49:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-14 09:49:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-14 09:49:05 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 09:49:05 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(53): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 09:49:24 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 09:49:24 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(53): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Index_Courses->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:01:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\tutor\rating\test.php [ 54 ]
2013-02-14 10:01:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\tutor\rating\test.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 10:01:26 --- ERROR: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\tutor\rating\test.php [ 54 ]
2013-02-14 10:01:26 --- STRACE: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\tutor\rating\test.php [ 54 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(54): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 10:08:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 59 ]
2013-02-14 10:08:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 59 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(59): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:09:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 59 ]
2013-02-14 10:09:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 59 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(59): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:31:17 --- ERROR: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\tutor\rating\test.php [ 37 ]
2013-02-14 10:31:17 --- STRACE: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\tutor\rating\test.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 10:31:41 --- ERROR: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 10:31:41 --- STRACE: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->__get('users')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 10:33:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 10:33:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:34:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 10:34:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:38:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:38:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:42:23 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 10:42:23 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->__get('testresult')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:42:51 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 10:42:51 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->__get('testresult')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:42:56 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 10:42:56 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->__get('testresult')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:44:08 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 10:44:08 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->__get('testresult')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:44:13 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 10:44:13 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->__get('testresult')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:44:30 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 10:44:30 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(36): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 10:44:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:44:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 10:45:53 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 10:45:53 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 10:48:05 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:48:05 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:48:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:48:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:51:50 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:51:50 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:51:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:51:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:52:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:52:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:52:32 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 10:52:32 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->__get('testresult')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:52:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:52:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:53:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:53:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:53:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:53:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:54:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:54:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:54:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\tutor\rating.php [ 62 ]
2013-02-14 10:54:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\tutor\rating.php [ 62 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 10:55:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:55:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:57:28 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:57:28 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 10:58:04 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 10:58:04 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 10:58:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 10:58:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 11:00:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:00:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 11:01:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:01:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 11:01:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:01:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 11:01:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:01:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 11:01:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:01:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 11:14:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 11:14:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:15:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 11:15:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:15:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 11:15:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:19:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 11:19:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:19:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 11:19:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:20:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 11:20:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:20:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 11:20:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:20:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 11:20:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:21:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 11:21:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:21:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 11:21:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$testresult ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:21:41 --- ERROR: Kohana_Exception [ 0 ]: The testresults property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 11:21:41 --- STRACE: Kohana_Exception [ 0 ]: The testresults property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->__get('testresults')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:21:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:21:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 11:25:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:25:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 11:39:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:39:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 11:41:07 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 11:41:07 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->__get('testresult')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 11:41:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:41:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 11:53:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:53:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 11:55:29 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
2013-02-14 11:55:29 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database.php(456): Kohana_Core::error_handler(Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder.php(116): Kohana_Database->quote(Object(Database_MySQL), Array)
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder\select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL))
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(true)
#5 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result()
#6 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(68): Kohana_ORM->find_all()
#7 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#11 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#12 {main}
2013-02-14 11:56:36 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
2013-02-14 11:56:36 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ MODPATH\database\classes\kohana\database.php [ 456 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database.php(456): Kohana_Core::error_handler(Object(Database_MySQL_Result))
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database.php(461): Kohana_Database->quote(Array, Array)
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder.php(116): Kohana_Database->quote(Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query\builder\select.php(370): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(228): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#5 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#6 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#7 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(68): Kohana_ORM->find_all()
#8 [internal function]: Controller_Tutor_Rating->action_test()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 11:58:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 11:58:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:04:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:04:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:04:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:04:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:07:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:07:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:12:55 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 12:12:55 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_ORM->__get('result')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 12:20:03 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 12:20:03 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_ORM->__get('result')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 12:20:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:20:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:21:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:21:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:23:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:23:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:24:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-14 12:24:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-14 12:24:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:24:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(53): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:24:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:24:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\courses.php(53): Kohana_ORM->find_all()
#4 [internal function]: Controller_Index_Courses->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Courses))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:26:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-14 12:26:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-14 12:26:52 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 12:26:52 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_ORM->__get('result')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 12:27:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:27:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:27:34 --- ERROR: Kohana_Exception [ 0 ]: The test property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 12:27:34 --- STRACE: Kohana_Exception [ 0 ]: The test property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->__get('test')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 12:27:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
2013-02-14 12:27:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\classes\controller\tutor\rating.php [ 61 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(61): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 12:27:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:27:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 12:29:15 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 909 ]
2013-02-14 12:29:15 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 909 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(67): Kohana_ORM->find_all()
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 12:29:27 --- ERROR: Kohana_Exception [ 0 ]: The testresults property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 12:29:27 --- STRACE: Kohana_Exception [ 0 ]: The testresults property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->__get('testresults')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 12:29:55 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 12:29:55 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 12:30:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:30:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 12:30:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:30:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 12:38:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:38:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 12:58:23 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 12:58:23 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->__get('user')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 12:58:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 12:58:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:00:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:00:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:01:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:01:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:01:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:01:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:03:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:03:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:03:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:03:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:03:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:03:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:11:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:11:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:15:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:15:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:17:23 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 13:17:23 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 13:18:06 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 13:18:06 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 13:18:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:18:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:19:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:19:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:25:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:25:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:29:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:29:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:30:15 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 13:30:15 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 13:30:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:30:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:37:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:37:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:44:48 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 13:44:48 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 13:45:34 --- ERROR: Kohana_Exception [ 0 ]: The testresults property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 13:45:34 --- STRACE: Kohana_Exception [ 0 ]: The testresults property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->__get('testresults')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 13:46:45 --- ERROR: Kohana_Exception [ 0 ]: The test property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 13:46:45 --- STRACE: Kohana_Exception [ 0 ]: The test property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->__get('test')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 13:47:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:47:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 13:49:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:49:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 13:49:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:49:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 13:49:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:49:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 13:50:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:50:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 13:50:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:50:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:52:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 13:52:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 13:54:28 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 13:54:28 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 13:56:07 --- ERROR: Kohana_Exception [ 0 ]: The dt property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 13:56:07 --- STRACE: Kohana_Exception [ 0 ]: The dt property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(49): Kohana_ORM->__get('dt')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 13:57:26 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 13:57:26 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 13:57:55 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 13:57:55 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 14:03:54 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 14:03:54 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 14:04:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Testresult::count() ~ APPPATH\classes\controller\tutor\rating.php [ 64 ]
2013-02-14 14:04:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Testresult::count() ~ APPPATH\classes\controller\tutor\rating.php [ 64 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-02-14 14:05:08 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 14:05:08 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 14:06:06 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 14:06:06 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 14:06:35 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 14:06:35 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 14:09:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 14:09:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 14:10:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 14:10:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 14:11:54 --- ERROR: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 14:11:54 --- STRACE: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(43): Kohana_ORM->__get('lastname')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 14:27:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 14:27:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 14:28:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 14:28:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 14:28:53 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 14:28:53 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 14:30:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 14:30:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 14:31:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 14:31:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 14:31:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 14:31:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 14:32:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 14:32:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'test.id_user' in 'where clause' [ SELECT `test`.* FROM `tests` AS `test` WHERE `test`.`id_user` = '3' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `test`.*...', 'Model_Test', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 14:33:13 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\tutor\rating\test.php [ 54 ]
2013-02-14 14:33:13 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\tutor\rating\test.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 14:33:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 40 ]
2013-02-14 14:33:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 40 ]
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
2013-02-14 14:33:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 47 ]
2013-02-14 14:33:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 14:36:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\tutor\rating\test.php [ 93 ]
2013-02-14 14:36:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\tutor\rating\test.php [ 93 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 14:37:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 40 ]
2013-02-14 14:37:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 40 ]
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
2013-02-14 14:39:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 14:39:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 14:41:07 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 14:41:07 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(40): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 14:43:45 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 14:43:45 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(40): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 14:43:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 47 ]
2013-02-14 14:43:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 15:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-14 15:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-14 15:37:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 15:37:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 15:45:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\tutor\rating\test.php [ 47 ]
2013-02-14 15:45:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\tutor\rating\test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 15:46:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 47 ]
2013-02-14 15:46:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 47 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(47): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 15:47:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tutor\rating\test.php [ 47 ]
2013-02-14 15:47:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tutor\rating\test.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 15:50:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  3 ~ APPPATH\classes\controller\tutor\rating.php [ 68 ]
2013-02-14 15:50:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  3 ~ APPPATH\classes\controller\tutor\rating.php [ 68 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(68): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 15:51:40 --- ERROR: ErrorException [ 8 ]: Undefined index:  3 ~ APPPATH\classes\controller\tutor\rating.php [ 68 ]
2013-02-14 15:51:40 --- STRACE: ErrorException [ 8 ]: Undefined index:  3 ~ APPPATH\classes\controller\tutor\rating.php [ 68 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(68): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 15:51:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\views\tutor\rating\test.php [ 36 ]
2013-02-14 15:51:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: c ~ APPPATH\views\tutor\rating\test.php [ 36 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(36): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 16:08:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:08:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 16:16:00 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:16:00 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 16:16:38 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:16:38 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 16:18:06 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:18:06 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(40): Kohana_ORM->__get('id')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:18:24 --- ERROR: Kohana_Exception [ 0 ]: The _test_id property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:18:24 --- STRACE: Kohana_Exception [ 0 ]: The _test_id property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(40): Kohana_ORM->__get('_test_id')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:18:31 --- ERROR: Kohana_Exception [ 0 ]: The test_id property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:18:31 --- STRACE: Kohana_Exception [ 0 ]: The test_id property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(40): Kohana_ORM->__get('test_id')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:18:38 --- ERROR: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:18:38 --- STRACE: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(43): Kohana_ORM->__get('lastname')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:24:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:24:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(38): Kohana_ORM->find_all()
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
2013-02-14 16:24:48 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user.id_test' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE `user`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:24:48 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user.id_test' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE `user`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 16:25:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:25:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(38): Kohana_ORM->find_all()
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
2013-02-14 16:25:22 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:25:22 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:26:25 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:26:25 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:26:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\tutor\rating\test.php [ 54 ]
2013-02-14 16:26:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\tutor\rating\test.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 16:26:41 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:26:41 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:27:46 --- ERROR: Kohana_Exception [ 0 ]: The testresults property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:27:46 --- STRACE: Kohana_Exception [ 0 ]: The testresults property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->__get('testresults')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 16:28:14 --- ERROR: Kohana_Exception [ 0 ]: The test property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:28:14 --- STRACE: Kohana_Exception [ 0 ]: The test property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->__get('test')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 16:28:21 --- ERROR: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:28:21 --- STRACE: Kohana_Exception [ 0 ]: The tests property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->__get('tests')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 16:28:42 --- ERROR: Kohana_Exception [ 0 ]: The testresults property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:28:42 --- STRACE: Kohana_Exception [ 0 ]: The testresults property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(38): Kohana_ORM->__get('testresults')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:29:12 --- ERROR: Kohana_Exception [ 0 ]: The users property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:29:12 --- STRACE: Kohana_Exception [ 0 ]: The users property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(38): Kohana_ORM->__get('users')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:29:32 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:29:32 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:30:14 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:30:14 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(39): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:30:37 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:30:37 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(39): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:30:49 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:30:49 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_user` = `testresult`.`id`) WHERE `testresults`.`id_test` = '2' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(39): Kohana_ORM->find_all()
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
2013-02-14 16:32:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH\views\tutor\rating\test.php [ 39 ]
2013-02-14 16:32:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH\views\tutor\rating\test.php [ 39 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(39): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 16:32:22 --- ERROR: ErrorException [ 1 ]: Class 'Model_Testresults' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-02-14 16:32:22 --- STRACE: ErrorException [ 1 ]: Class 'Model_Testresults' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('testresults')
#1 {main}
2013-02-14 16:32:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:32:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(39): Kohana_ORM->find_all()
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
2013-02-14 16:33:06 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:33:06 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:34:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH\views\tutor\rating\test.php [ 39 ]
2013-02-14 16:34:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: k ~ APPPATH\views\tutor\rating\test.php [ 39 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(39): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 16:34:49 --- ERROR: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:34:49 --- STRACE: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(44): Kohana_ORM->__get('lastname')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:35:03 --- ERROR: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:35:03 --- STRACE: Kohana_Exception [ 0 ]: The lastname property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(44): Kohana_ORM->__get('lastname')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:36:16 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:36:16 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(39): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:36:43 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:36:43 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:37:06 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:37:06 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:37:22 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:37:22 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:37:39 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:37:39 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:37:55 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:37:55 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:38:55 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:38:55 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:39:08 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:39:08 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(38): Kohana_ORM->find_all()
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
2013-02-14 16:39:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:39:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(38): Kohana_ORM->find_all()
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
2013-02-14 16:39:33 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:39:33 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:40:11 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:40:11 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:40:15 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:40:15 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:40:54 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:40:54 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(66): Kohana_ORM->__get('result')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 16:41:41 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:41:41 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:42:08 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:42:08 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:42:44 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:42:44 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(66): Kohana_ORM->__get('result')
#1 [internal function]: Controller_Tutor_Rating->action_test()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 16:43:48 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:43:48 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:44:18 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:44:18 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:44:43 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:44:43 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:45:14 --- ERROR: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 16:45:14 --- STRACE: Kohana_Exception [ 0 ]: The result property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(48): Kohana_ORM->__get('result')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 16:45:41 --- ERROR: ErrorException [ 1 ]: Class 'Model_Testresults' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-02-14 16:45:41 --- STRACE: ErrorException [ 1 ]: Class 'Model_Testresults' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('testresults')
#1 {main}
2013-02-14 16:45:51 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:45:51 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 16:46:07 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 16:46:07 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 17:04:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 17:04:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 17:04:50 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 17:04:50 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 17:05:45 --- ERROR: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-02-14 17:05:45 --- STRACE: Kohana_Exception [ 0 ]: The testresult property does not exist in the Model_Test class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->__get('testresult')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-02-14 17:06:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user.id_test' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE `user`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 17:06:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user.id_test' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE `user`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(37): Kohana_ORM->find_all()
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
2013-02-14 17:06:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 17:06:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'testresult.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `testresults` ON (`testresults`.`id_test` = `testresult`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(64): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 17:52:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Testressult' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-02-14 17:52:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Testressult' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('testressult')
#1 {main}
2013-02-14 17:53:29 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.user' doesn't exist [ SELECT `testresult`.* FROM `testresults` AS `testresult` RIGHT OUTER JOIN `user` ON (`testresult`.`id_user` = `user`.`id`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 17:53:29 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.user' doesn't exist [ SELECT `testresult`.* FROM `testresults` AS `testresult` RIGHT OUTER JOIN `user` ON (`testresult`.`id_user` = `user`.`id`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(71): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 17:54:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` RIGHT OUTER JOIN `users` ON (`testresult`.`id_user` = `user`.`id`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 17:54:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` RIGHT OUTER JOIN `users` ON (`testresult`.`id_user` = `user`.`id`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(71): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 17:55:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` RIGHT OUTER JOIN `users` ON (`testresult`.`id_user` = `1`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 17:55:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` RIGHT OUTER JOIN `users` ON (`testresult`.`id_user` = `1`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(72): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 17:55:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `users` ON (`testresult`.`id_user` = `1`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 17:55:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `users` ON (`testresult`.`id_user` = `1`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(72): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 17:58:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `users` ON (`testresult`.`id_user` = `1`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 17:58:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `testresult`.* FROM `testresults` AS `testresult` JOIN `users` ON (`testresult`.`id_user` = `1`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `testres...', 'Model_Testresul...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(72): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_test()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-02-14 18:00:25 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.testresult' doesn't exist [ SELECT `result` FROM `testresult` JOIN `users` ON (`testresult`.`id_user` = `1`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 18:00:25 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.testresult' doesn't exist [ SELECT `result` FROM `testresult` JOIN `users` ON (`testresult`.`id_user` = `1`) WHERE `testresult`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(78): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_test()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-14 18:00:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `result` FROM `testresults` JOIN `users` ON (`testresults`.`id_user` = `1`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 18:00:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `result` FROM `testresults` JOIN `users` ON (`testresults`.`id_user` = `1`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(78): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_test()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-14 18:01:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `result` FROM `testresults` JOIN `users` ON (`testresults`.`id_user` = `1`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 18:01:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column '1' in 'on clause' [ SELECT `result` FROM `testresults` JOIN `users` ON (`testresults`.`id_user` = `1`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(78): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_test()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-14 18:01:24 --- ERROR: Database_Exception [ 1054 ]: Unknown column '2' in 'on clause' [ SELECT `result` FROM `testresults` JOIN `users` ON (`testresults`.`id_user` = `2`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 18:01:24 --- STRACE: Database_Exception [ 1054 ]: Unknown column '2' in 'on clause' [ SELECT `result` FROM `testresults` JOIN `users` ON (`testresults`.`id_user` = `2`) WHERE `testresults`.`id_test` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(78): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_test()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-14 18:03:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tests.1' in 'on clause' [ SELECT `result` FROM `testresults` JOIN `users` ON (`testresults`.`id_test` = `tests`.`1`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 18:03:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tests.1' in 'on clause' [ SELECT `result` FROM `testresults` JOIN `users` ON (`testresults`.`id_test` = `tests`.`1`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(78): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_test()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-14 18:03:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tests.id' in 'on clause' [ SELECT `result` FROM `testresults` JOIN `users` ON (`testresults`.`id_test` = `tests`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-02-14 18:03:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tests.id' in 'on clause' [ SELECT `result` FROM `testresults` JOIN `users` ON (`testresults`.`id_test` = `tests`.`id`) WHERE `testresults`.`id_user` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(78): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_test()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-02-14 18:05:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\views\tutor\rating\test.php [ 49 ]
2013-02-14 18:05:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\views\tutor\rating\test.php [ 49 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(49): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 18:06:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\classes\controller\tutor\rating.php [ 79 ]
2013-02-14 18:06:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\classes\controller\tutor\rating.php [ 79 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(79): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-02-14 18:06:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\views\tutor\rating\test.php [ 49 ]
2013-02-14 18:06:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$result ~ APPPATH\views\tutor\rating\test.php [ 49 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(49): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 18:07:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 52 ]
2013-02-14 18:07:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\views\tutor\rating\test.php [ 52 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(52): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 18:10:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 39 ]
2013-02-14 18:10:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 39 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(39): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-02-14 18:11:12 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 39 ]
2013-02-14 18:11:12 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 18:11:27 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 43 ]
2013-02-14 18:11:27 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\tutor\rating\test.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 18:11:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tutor\rating\test.php [ 46 ]
2013-02-14 18:11:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tutor\rating\test.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-02-14 18:11:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tutor\rating\test.php [ 46 ]
2013-02-14 18:11:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\tutor\rating\test.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}