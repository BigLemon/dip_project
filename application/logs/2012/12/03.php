<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-03 08:41:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-03 08:41:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-03 08:42:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\index\tests\index.php [ 21 ]
2012-12-03 08:42:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENDFOREACH ~ APPPATH\views\index\tests\index.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-03 08:47:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: id_test ~ APPPATH\views\index\tests\index.php [ 21 ]
2012-12-03 08:47:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: id_test ~ APPPATH\views\index\tests\index.php [ 21 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\index.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 21, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-03 08:56:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\index\tests\index.php [ 21 ]
2012-12-03 08:56:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\index\tests\index.php [ 21 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\index.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 21, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-03 08:57:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: qalistarr ~ APPPATH\classes\controller\index\tests.php [ 37 ]
2012-12-03 08:57:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: qalistarr ~ APPPATH\classes\controller\index\tests.php [ 37 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\tests.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 37, Array)
#1 [internal function]: Controller_Index_Tests->action_index()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-03 09:00:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\tests\index.php [ 18 ]
2012-12-03 09:00:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index\tests\index.php [ 18 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\tests\index.php(18): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 18, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}