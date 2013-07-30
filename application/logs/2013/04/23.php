<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-23 11:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-23 11:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-23 11:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-23 11:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-23 11:23:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-23 11:23:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-23 11:34:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-23 11:34:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-23 11:35:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/lections/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-04-23 11:35:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/lections/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-23 12:07:33 --- ERROR: ErrorException [ 1 ]: Class 'Model_Labs' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-04-23 12:07:33 --- STRACE: ErrorException [ 1 ]: Class 'Model_Labs' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('labs', '1')
#1 {main}
2013-04-23 12:07:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\classes\controller\tutor\labs.php [ 53 ]
2013-04-23 12:07:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: course ~ APPPATH\classes\controller\tutor\labs.php [ 53 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\labs.php(53): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Labs->action_edit(Object(Controller_Tutor_Labs))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 12:11:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\tutor\courses\edit.php [ 43 ]
2013-04-23 12:11:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\tutor\courses\edit.php [ 43 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\courses\edit.php(43): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 12:14:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\tutor\courses\edit.php [ 43 ]
2013-04-23 12:14:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\tutor\courses\edit.php [ 43 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\courses\edit.php(43): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 12:14:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\tutor\courses\edit.php [ 43 ]
2013-04-23 12:14:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\tutor\courses\edit.php [ 43 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\courses\edit.php(43): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 12:26:39 --- ERROR: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The first argument should be either a string or an integer ~ SYSPATH\classes\kohana\response.php [ 206 ]
2013-04-23 12:26:39 --- STRACE: ErrorException [ 2 ]: array_key_exists() [function.array-key-exists]: The first argument should be either a string or an integer ~ SYSPATH\classes\kohana\response.php [ 206 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\response.php(206): Kohana_Core::error_handler(Array, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(953): Kohana_Response->status(Array)
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\labs.php(43): Kohana_Request->redirect('tutor/labs/list', Array)
#3 [internal function]: Controller_Tutor_Labs->action_edit()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-23 12:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs/list was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-04-23 12:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs/list was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-23 12:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs/list was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-04-23 12:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tutor/labs/list was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-04-23 12:33:04 --- ERROR: View_Exception [ 0 ]: The requested view tutor/lab/delete could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-04-23 12:33:04 --- STRACE: View_Exception [ 0 ]: The requested view tutor/lab/delete could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(137): Kohana_View->set_filename('tutor/lab/delet...')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(30): Kohana_View->__construct('tutor/lab/delet...', Array)
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\labs.php(76): Kohana_View::factory('tutor/lab/delet...', Array)
#3 [internal function]: Controller_Tutor_Labs->action_delete()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Labs))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-23 12:33:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\tutor\labs\delete.php [ 17 ]
2013-04-23 12:33:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\tutor\labs\delete.php [ 17 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\labs\delete.php(17): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 12:39:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: labs ~ APPPATH\views\tutor\labs\add.php [ 23 ]
2013-04-23 12:39:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: labs ~ APPPATH\views\tutor\labs\add.php [ 23 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\labs\add.php(23): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 12:40:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\tutor\labs.php [ 102 ]
2013-04-23 12:40:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\controller\tutor\labs.php [ 102 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\labs.php(102): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Labs->action_add(Object(Controller_Tutor_Labs))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 12:41:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH\views\tutor\labs\add.php [ 23 ]
2013-04-23 12:41:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH\views\tutor\labs\add.php [ 23 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\labs\add.php(23): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 12:50:24 --- ERROR: ErrorException [ 8 ]: Undefined index:  title ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
2013-04-23 12:50:24 --- STRACE: ErrorException [ 8 ]: Undefined index:  title ~ APPPATH\classes\controller\tutor\labs.php [ 93 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\labs.php(93): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Labs->action_add(Object(Controller_Tutor_Labs))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 12:59:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$lab ~ APPPATH\views\tutor\labs\edit.php [ 31 ]
2013-04-23 12:59:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$lab ~ APPPATH\views\tutor\labs\edit.php [ 31 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\labs\edit.php(31): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 13:00:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: lab ~ APPPATH\views\tutor\labs\edit.php [ 31 ]
2013-04-23 13:00:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: lab ~ APPPATH\views\tutor\labs\edit.php [ 31 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\labs\edit.php(31): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Labs))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 13:20:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: id_test ~ APPPATH\views\tutor\questions\edit.php [ 18 ]
2013-04-23 13:20:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: id_test ~ APPPATH\views\tutor\questions\edit.php [ 18 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\questions\edit.php(18): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Questions))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 13:34:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH\views\tutor\questions\edit.php [ 104 ]
2013-04-23 13:34:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDIF ~ APPPATH\views\tutor\questions\edit.php [ 104 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-23 13:34:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$type ~ APPPATH\views\tutor\questions\edit.php [ 88 ]
2013-04-23 13:34:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$type ~ APPPATH\views\tutor\questions\edit.php [ 88 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\questions\edit.php(88): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Questions))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 13:36:14 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$type ~ APPPATH\views\tutor\questions\edit.php [ 88 ]
2013-04-23 13:36:14 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$type ~ APPPATH\views\tutor\questions\edit.php [ 88 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\questions\edit.php(88): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Questions))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 13:36:33 --- ERROR: Kohana_Exception [ 0 ]: The type property does not exist in the Model_Qanswer class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-23 13:36:33 --- STRACE: Kohana_Exception [ 0 ]: The type property does not exist in the Model_Qanswer class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\questions\edit.php(160): Kohana_ORM->__get('type')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 13:37:36 --- ERROR: Kohana_Exception [ 0 ]: The type property does not exist in the Model_Qanswer class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-23 13:37:36 --- STRACE: Kohana_Exception [ 0 ]: The type property does not exist in the Model_Qanswer class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\questions\edit.php(160): Kohana_ORM->__get('type')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 13:38:12 --- ERROR: Kohana_Exception [ 0 ]: The type property does not exist in the Model_Qanswer class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-23 13:38:12 --- STRACE: Kohana_Exception [ 0 ]: The type property does not exist in the Model_Qanswer class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\questions\edit.php(160): Kohana_ORM->__get('type')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-23 13:45:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH\classes\controller\tutor\questions.php [ 77 ]
2013-04-23 13:45:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH\classes\controller\tutor\questions.php [ 77 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(77): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Questions->action_add(Object(Controller_Tutor_Questions))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 13:45:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH\classes\controller\tutor\questions.php [ 77 ]
2013-04-23 13:45:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: type ~ APPPATH\classes\controller\tutor\questions.php [ 77 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(77): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Questions->action_add(Object(Controller_Tutor_Questions))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 13:47:57 --- ERROR: ErrorException [ 8 ]: Undefined index:  id_test ~ APPPATH\classes\controller\tutor\questions.php [ 200 ]
2013-04-23 13:47:57 --- STRACE: ErrorException [ 8 ]: Undefined index:  id_test ~ APPPATH\classes\controller\tutor\questions.php [ 200 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\questions.php(200): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Questions->action_delete(Object(Controller_Tutor_Questions))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:03:31 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) WHERE `usercourses`.`course_id` = 1 AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:03:31 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `lastname`, `firstname`, `result` FROM `users`, `testresults` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) WHERE `usercourses`.`course_id` = 1 AND `testresults`.`id_user` = 'users.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `lastnam...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(66): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 14:04:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 98 ]
2013-04-23 14:04:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 98 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(98): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:06:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 98 ]
2013-04-23 14:06:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 98 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(98): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:06:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 98 ]
2013-04-23 14:06:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 98 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(98): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:06:12 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 98 ]
2013-04-23 14:06:12 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 98 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(98): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:06:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
2013-04-23 14:06:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\views\tutor\rating\view.php [ 37 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(37): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-23 14:06:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\view.php [ 41 ]
2013-04-23 14:06:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\view.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(41): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-23 14:11:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
2013-04-23 14:11:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(48): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:11:53 --- ERROR: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `lastname`, `firstname` FROM `users` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:11:53 --- STRACE: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `lastname`, `firstname` FROM `users` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `l...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(47): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 14:12:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
2013-04-23 14:12:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(48): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:13:20 --- ERROR: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `lastname`, `firstname` FROM `users` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:13:20 --- STRACE: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `lastname`, `firstname` FROM `users` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `l...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(47): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 14:14:45 --- ERROR: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `lastname`, `firstname` FROM `users` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:14:45 --- STRACE: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ SELECT `id`, `lastname`, `firstname` FROM `users` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id`, `l...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(47): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 14:16:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::execute() ~ APPPATH\classes\controller\tutor\rating.php [ 52 ]
2013-04-23 14:16:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::execute() ~ APPPATH\classes\controller\tutor\rating.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-23 14:18:18 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:18:18 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`usercourses`.`student_id` = `users`.`id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(52): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 14:21:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:21:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(52): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 14:21:15 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:21:15 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(52): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 14:28:13 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 53 ]
2013-04-23 14:28:13 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 53 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:28:41 --- ERROR: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\classes\controller\tutor\rating.php [ 53 ]
2013-04-23 14:28:41 --- STRACE: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\classes\controller\tutor\rating.php [ 53 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:29:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\tutor\rating.php [ 53 ]
2013-04-23 14:29:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\tutor\rating.php [ 53 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(53): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:29:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\tutor\rating.php [ 57 ]
2013-04-23 14:29:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\tutor\rating.php [ 57 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(57): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:32:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:32:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(52): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 14:33:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:33:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(52): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 14:33:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:33:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(52): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 14:33:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:33:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(52): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 14:33:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:33:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.* FROM `users` AS `user` INNER JOIN `usercourses` ON (`users`.`id` = `usercourses`.`student_id`) WHERE `usercourses`.`course_id` = 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', 'Model_User', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(52): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Rating->action_view()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 14:34:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 91 ]
2013-04-23 14:34:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 91 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(91): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:34:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 91 ]
2013-04-23 14:34:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 91 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(91): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 14:58:05 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.testresult' doesn't exist [ SELECT `result` FROM `testresult` INNER JOIN `test` ON (`test`.`course_id` = 1) WHERE `testresult`.`id_user` = Array AND `testresult`.`id_test` = 'test.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:58:05 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.testresult' doesn't exist [ SELECT `result` FROM `testresult` INNER JOIN `test` ON (`test`.`course_id` = 1) WHERE `testresult`.`id_user` = Array AND `testresult`.`id_test` = 'test.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 14:58:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:58:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 14:58:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:58:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 14:59:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 14:59:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 15:00:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 15:00:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 15:01:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 15:01:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 15:01:58 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 15:01:58 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 15:01:59 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 15:01:59 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 15:02:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 15:02:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 15:02:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 15:02:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 15:02:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 15:02:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 15:02:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 15:02:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(62): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 15:03:52 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
2013-04-23 15:03:52 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:04:19 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
2013-04-23 15:04:19 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:15:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
2013-04-23 15:15:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:27:57 --- ERROR: ErrorException [ 8 ]: Undefined index:   ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
2013-04-23 15:27:57 --- STRACE: ErrorException [ 8 ]: Undefined index:   ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(48): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:28:08 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
2013-04-23 15:28:08 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:32:27 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
2013-04-23 15:32:27 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:32:29 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
2013-04-23 15:32:29 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:40:58 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
2013-04-23 15:40:58 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:41:15 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
2013-04-23 15:41:15 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(48): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:41:26 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
2013-04-23 15:41:26 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 60 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:50:41 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
2013-04-23 15:50:41 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:50:44 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
2013-04-23 15:50:44 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:50:45 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
2013-04-23 15:50:45 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:51:46 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
2013-04-23 15:51:46 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:51:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
2013-04-23 15:51:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:53:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\tutor\rating.php [ 106 ]
2013-04-23 15:53:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PUBLIC ~ APPPATH\classes\controller\tutor\rating.php [ 106 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_tuto...')
#1 {main}
2013-04-23 15:54:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tutor\base.php [ 95 ]
2013-04-23 15:54:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tutor\base.php [ 95 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 15:54:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tutor\base.php [ 95 ]
2013-04-23 15:54:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tutor\base.php [ 95 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 15:55:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tutor\base.php [ 95 ]
2013-04-23 15:55:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\tutor\base.php [ 95 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\base.php(95): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tutor_Rating))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#8 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#9 {main}
2013-04-23 15:55:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 91 ]
2013-04-23 15:55:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 91 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(91): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:56:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\views\tutor\rating\view.php [ 68 ]
2013-04-23 15:56:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\views\tutor\rating\view.php [ 68 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(68): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-23 15:57:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 98 ]
2013-04-23 15:57:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 98 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(98): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 15:57:48 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
2013-04-23 15:57:48 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:10:19 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
2013-04-23 16:10:19 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(48): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:10:33 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
2013-04-23 16:10:33 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:11:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 16:11:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 16:11:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 16:11:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 16:14:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 16:14:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(65): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 16:14:38 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:14:38 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:14:40 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:14:40 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:15:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
2013-04-23 16:15:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\classes\controller\tutor\rating.php [ 63 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(63): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:22:59 --- ERROR: ErrorException [ 2 ]: mysql_num_rows(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
2013-04-23 16:22:59 --- STRACE: ErrorException [ 2 ]: mysql_num_rows(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(48): Kohana_Core::error_handler(Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:23:24 --- ERROR: ErrorException [ 2 ]: mysql_num_rows(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
2013-04-23 16:23:24 --- STRACE: ErrorException [ 2 ]: mysql_num_rows(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(48): Kohana_Core::error_handler(Object(Database_MySQL_Result))
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:23:26 --- ERROR: ErrorException [ 2 ]: mysql_num_rows(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
2013-04-23 16:23:26 --- STRACE: ErrorException [ 2 ]: mysql_num_rows(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 48 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(48): Kohana_Core::error_handler(Object(Database_MySQL_Result))
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:24:43 --- ERROR: ErrorException [ 2 ]: mysql_fetch_assoc(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 49 ]
2013-04-23 16:24:43 --- STRACE: ErrorException [ 2 ]: mysql_fetch_assoc(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 49 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(49): Kohana_Core::error_handler(Object(Database_MySQL_Result))
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:25:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:25:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:25:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:25:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:26:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:26:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:27:04 --- ERROR: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
2013-04-23 16:27:04 --- STRACE: ErrorException [ 8 ]: Undefined offset:  0 ~ APPPATH\classes\controller\tutor\rating.php [ 50 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(50): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:27:24 --- ERROR: ErrorException [ 2 ]: mysql_fetch_assoc(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 54 ]
2013-04-23 16:27:24 --- STRACE: ErrorException [ 2 ]: mysql_fetch_assoc(): supplied argument is not a valid MySQL result resource ~ APPPATH\classes\controller\tutor\rating.php [ 54 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(54): Kohana_Core::error_handler(false)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:28:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 94 ]
2013-04-23 16:28:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 94 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(94): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:29:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 94 ]
2013-04-23 16:29:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: courses ~ APPPATH\classes\controller\tutor\rating.php [ 94 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(94): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:29:52 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 16:29:52 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 16:30:11 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 16:30:11 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 16:30:12 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-23 16:30:12 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Array' in 'where clause' [ SELECT `result` FROM `testresults` INNER JOIN `tests` ON (`tests`.`course_id` = 1) WHERE `testresults`.`id_user` = Array AND `testresults`.`id_test` = 'tests.id' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `result`...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(60): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Tutor_Rating->action_view()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-04-23 16:30:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 96 ]
2013-04-23 16:30:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 96 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(96): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:31:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 96 ]
2013-04-23 16:31:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 96 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(96): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:31:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 99 ]
2013-04-23 16:31:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 99 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(99): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:31:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 99 ]
2013-04-23 16:31:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 99 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(99): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:32:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 99 ]
2013-04-23 16:32:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: tests ~ APPPATH\classes\controller\tutor\rating.php [ 99 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(99): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:34:14 --- ERROR: ErrorException [ 8 ]: Undefined index:  lastname ~ APPPATH\views\tutor\rating\view.php [ 41 ]
2013-04-23 16:34:14 --- STRACE: ErrorException [ 8 ]: Undefined index:  lastname ~ APPPATH\views\tutor\rating\view.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(41): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-23 16:35:10 --- ERROR: ErrorException [ 8 ]: Undefined index:  lastname ~ APPPATH\views\tutor\rating\view.php [ 41 ]
2013-04-23 16:35:10 --- STRACE: ErrorException [ 8 ]: Undefined index:  lastname ~ APPPATH\views\tutor\rating\view.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(41): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-23 16:35:15 --- ERROR: ErrorException [ 8 ]: Undefined index:  lastname ~ APPPATH\views\tutor\rating\view.php [ 41 ]
2013-04-23 16:35:15 --- STRACE: ErrorException [ 8 ]: Undefined index:  lastname ~ APPPATH\views\tutor\rating\view.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(41): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-23 16:36:05 --- ERROR: ErrorException [ 8 ]: Undefined index:  lastname ~ APPPATH\views\tutor\rating\view.php [ 41 ]
2013-04-23 16:36:05 --- STRACE: ErrorException [ 8 ]: Undefined index:  lastname ~ APPPATH\views\tutor\rating\view.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(41): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-23 16:36:08 --- ERROR: ErrorException [ 8 ]: Undefined index:  lastname ~ APPPATH\views\tutor\rating\view.php [ 41 ]
2013-04-23 16:36:08 --- STRACE: ErrorException [ 8 ]: Undefined index:  lastname ~ APPPATH\views\tutor\rating\view.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\view.php(41): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-23 16:47:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\tutor\rating\test.php [ 45 ]
2013-04-23 16:47:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\tutor\rating\test.php [ 45 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-23 16:50:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$type ~ APPPATH\views\tutor\rating\test.php [ 44 ]
2013-04-23 16:50:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$type ~ APPPATH\views\tutor\rating\test.php [ 44 ]
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
2013-04-23 16:50:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\tutor\rating\test.php [ 44 ]
2013-04-23 16:50:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\tutor\rating\test.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-23 16:50:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\tutor\rating\test.php [ 44 ]
2013-04-23 16:50:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_IF ~ APPPATH\views\tutor\rating\test.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('D:\openserver\O...', Array)
#1 {main}
2013-04-23 16:51:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$type ~ APPPATH\views\tutor\rating\test.php [ 44 ]
2013-04-23 16:51:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$type ~ APPPATH\views\tutor\rating\test.php [ 44 ]
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
2013-04-23 16:57:38 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$type ~ APPPATH\classes\controller\tutor\rating.php [ 116 ]
2013-04-23 16:57:38 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$type ~ APPPATH\classes\controller\tutor\rating.php [ 116 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 16:59:39 --- ERROR: ErrorException [ 8 ]: Undefined index:  type ~ APPPATH\classes\controller\tutor\rating.php [ 116 ]
2013-04-23 16:59:39 --- STRACE: ErrorException [ 8 ]: Undefined index:  type ~ APPPATH\classes\controller\tutor\rating.php [ 116 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 17:00:00 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\tutor\rating.php [ 116 ]
2013-04-23 17:00:00 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\tutor\rating.php [ 116 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 17:00:23 --- ERROR: ErrorException [ 8 ]: Undefined index:  type ~ APPPATH\classes\controller\tutor\rating.php [ 116 ]
2013-04-23 17:00:23 --- STRACE: ErrorException [ 8 ]: Undefined index:  type ~ APPPATH\classes\controller\tutor\rating.php [ 116 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(116): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 17:17:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH\classes\controller\tutor\rating.php [ 123 ]
2013-04-23 17:17:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: t ~ APPPATH\classes\controller\tutor\rating.php [ 123 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(123): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 17:26:04 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 45 ]
2013-04-23 17:26:04 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\test.php [ 45 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(45): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-23 17:26:53 --- ERROR: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\views\tutor\rating\test.php [ 45 ]
2013-04-23 17:26:53 --- STRACE: ErrorException [ 8 ]: Undefined index:  id ~ APPPATH\views\tutor\rating\test.php [ 45 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\tutor\rating\test.php(45): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-23 17:31:53 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\tutor\rating.php [ 122 ]
2013-04-23 17:31:53 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\tutor\rating.php [ 122 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(122): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_test(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-23 17:32:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\tutor\rating.php [ 122 ]
2013-04-23 17:32:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\tutor\rating.php [ 122 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_tuto...')
#1 {main}
2013-04-23 17:35:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-23 17:35:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-23 17:50:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: v ~ APPPATH\views\index\tests\index.php [ 23 ]
2013-04-23 17:50:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: v ~ APPPATH\views\index\tests\index.php [ 23 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\tests\index.php(23): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Tests))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}