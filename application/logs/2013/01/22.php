<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-22 13:22:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL фвьшт was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-22 13:22:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL фвьшт was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-22 13:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-22 13:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-22 13:30:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-22 13:30:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-22 13:32:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\lab\index.php [ 16 ]
2013-01-22 13:32:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\lab\index.php [ 16 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\index.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 16, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-22 13:33:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\lab\index.php [ 25 ]
2013-01-22 13:33:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\lab\index.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\index.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-22 13:58:44 --- ERROR: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-22 13:58:44 --- STRACE: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(example.t...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): fopen('example.txt', 'r')
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 13:59:19 --- ERROR: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-22 13:59:19 --- STRACE: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(example.t...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): fopen('example.txt', 'r')
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 13:59:20 --- ERROR: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-22 13:59:20 --- STRACE: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(example.t...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): fopen('example.txt', 'r')
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 13:59:21 --- ERROR: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-22 13:59:21 --- STRACE: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(example.t...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): fopen('example.txt', 'r')
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 13:59:22 --- ERROR: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-22 13:59:22 --- STRACE: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(example.t...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): fopen('example.txt', 'r')
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 13:59:46 --- ERROR: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-22 13:59:46 --- STRACE: ErrorException [ 2 ]: fopen(example.txt) [function.fopen]: failed to open stream: No such file or directory ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(example.t...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): fopen('example.txt', 'r')
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 14:00:34 --- ERROR: ErrorException [ 2 ]: fopen(&lt;?php echo url::base(); ?&gt;lab/example.txt) [function.fopen]: failed to open stream: No error ~ APPPATH\classes\controller\lab\index.php [ 15 ]
2013-01-22 14:00:34 --- STRACE: ErrorException [ 2 ]: fopen(&lt;?php echo url::base(); ?&gt;lab/example.txt) [function.fopen]: failed to open stream: No error ~ APPPATH\classes\controller\lab\index.php [ 15 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fopen(&lt;?php ...', 'D:\xampp\htdocs...', 15, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(15): fopen('<?php echo url:...', 'r')
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}