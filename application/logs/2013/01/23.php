<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-23 06:02:58 --- ERROR: ErrorException [ 2 ]: highlight_file(1) [function.highlight-file]: failed to open stream: No such file or directory ~ APPPATH\views\lab\index.php [ 27 ]
2013-01-23 06:02:58 --- STRACE: ErrorException [ 2 ]: highlight_file(1) [function.highlight-file]: failed to open stream: No such file or directory ~ APPPATH\views\lab\index.php [ 27 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'highlight_file(...', 'D:\xampp\htdocs...', 27, Array)
#1 D:\xampp\htdocs\kohana\application\views\lab\index.php(27): highlight_file('1')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-23 06:04:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\lab\index.php [ 27 ]
2013-01-23 06:04:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\lab\index.php [ 27 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\index.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 27, Array)
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
2013-01-23 06:07:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\lab\index.php [ 27 ]
2013-01-23 06:07:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\lab\index.php [ 27 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\index.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 27, Array)
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
2013-01-23 06:11:58 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\lab\index.php [ 27 ]
2013-01-23 06:11:58 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\lab\index.php [ 27 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\index.php(27): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\xampp\htdocs...', 27, Array)
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
2013-01-23 06:12:41 --- ERROR: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\lab\index.php [ 27 ]
2013-01-23 06:12:41 --- STRACE: ErrorException [ 8 ]: Use of undefined constant php - assumed 'php' ~ APPPATH\views\lab\index.php [ 27 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\index.php(27): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\xampp\htdocs...', 27, Array)
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
2013-01-23 06:12:59 --- ERROR: ErrorException [ 2 ]: highlight_file(10) [function.highlight-file]: failed to open stream: No such file or directory ~ APPPATH\views\lab\index.php [ 28 ]
2013-01-23 06:12:59 --- STRACE: ErrorException [ 2 ]: highlight_file(10) [function.highlight-file]: failed to open stream: No such file or directory ~ APPPATH\views\lab\index.php [ 28 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'highlight_file(...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\application\views\lab\index.php(28): highlight_file('10')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-23 06:14:43 --- ERROR: ErrorException [ 2 ]: highlight_file(&lt;? $a=34?&gt;) [function.highlight-file]: failed to open stream: No such file or directory ~ APPPATH\views\lab\index.php [ 28 ]
2013-01-23 06:14:43 --- STRACE: ErrorException [ 2 ]: highlight_file(&lt;? $a=34?&gt;) [function.highlight-file]: failed to open stream: No such file or directory ~ APPPATH\views\lab\index.php [ 28 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'highlight_file(...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\application\views\lab\index.php(28): highlight_file('<? $a=34?>')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-23 06:14:45 --- ERROR: ErrorException [ 2 ]: highlight_file(&lt;? $a=34?&gt;) [function.highlight-file]: failed to open stream: No such file or directory ~ APPPATH\views\lab\index.php [ 28 ]
2013-01-23 06:14:45 --- STRACE: ErrorException [ 2 ]: highlight_file(&lt;? $a=34?&gt;) [function.highlight-file]: failed to open stream: No such file or directory ~ APPPATH\views\lab\index.php [ 28 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'highlight_file(...', 'D:\xampp\htdocs...', 28, Array)
#1 D:\xampp\htdocs\kohana\application\views\lab\index.php(28): highlight_file('<? $a=34?>')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#5 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#8 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-23 06:18:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(36) : eval()'d code [ 1 ]
2013-01-23 06:18:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(36) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 06:19:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(36) : eval()'d code [ 1 ]
2013-01-23 06:19:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(36) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 06:30:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(36) : eval()'d code [ 1 ]
2013-01-23 06:30:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(36) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 06:30:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(36) : eval()'d code [ 1 ]
2013-01-23 06:30:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(36) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 06:57:02 --- ERROR: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\lab\index.php [ 14 ]
2013-01-23 06:57:02 --- STRACE: ErrorException [ 2 ]: simplexml_load_file() [function.simplexml-load-file]: I/O warning : failed to load external entity &quot;example.xml&quot; ~ APPPATH\classes\controller\lab\index.php [ 14 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'D:\xampp\htdocs...', 14, Array)
#1 D:\xampp\htdocs\kohana\application\classes\controller\lab\index.php(14): simplexml_load_file('example.xml')
#2 [internal function]: Controller_Lab_Index->action_index()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-23 07:03:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:03:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:03:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:03:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:04:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:04:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:04:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:04:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:05:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:05:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:05:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:05:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:05:09 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:05:09 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:10:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:10:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:10:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:10:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:19:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:19:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:20:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
2013-01-23 07:20:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\views\lab\index.php(29) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 07:30:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: book ~ APPPATH\views\lab\index.php [ 21 ]
2013-01-23 07:30:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: book ~ APPPATH\views\lab\index.php [ 21 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\index.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 21, Array)
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
2013-01-23 12:00:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\lab\outresult.php [ 19 ]
2013-01-23 12:00:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: xml ~ APPPATH\views\lab\outresult.php [ 19 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\outresult.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 19, Array)
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
2013-01-23 12:24:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '"', expecting ',' or ';' ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
2013-01-23 12:24:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '"', expecting ',' or ';' ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-23 12:25:25 --- ERROR: ErrorException [ 8 ]: Undefined variable: total ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 3 ]
2013-01-23 12:25:25 --- STRACE: ErrorException [ 8 ]: Undefined variable: total ~ APPPATH\views\lab\outresult.php(34) : eval()'d code [ 3 ]
--
#0 D:\xampp\htdocs\kohana\application\views\lab\outresult.php(34) : eval()'d code(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 3, Array)
#1 D:\xampp\htdocs\kohana\application\views\lab\outresult.php(34) : eval()'d code(8): sumR(Array)
#2 D:\xampp\htdocs\kohana\application\views\lab\outresult.php(34): eval()
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#4 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#6 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#7 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#8 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#9 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#10 [internal function]: Kohana_Controller_Template->after()
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Lab_Index))
#12 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#15 {main}