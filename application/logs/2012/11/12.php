<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-12 10:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/s3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-12 10:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/s2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-12 10:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/s2.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 10:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/s3.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 10:27:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/s4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-12 10:27:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/s4.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 10:39:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-12 10:39:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 10:41:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-12 10:41:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 10:42:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-12 10:42:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 10:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-12 10:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/users/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 10:43:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/edit/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-11-12 10:43:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/edit/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-12 10:43:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-11-12 10:43:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/news/edit/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-12 10:44:44 --- ERROR: View_Exception [ 0 ]: The requested view admin/lections/add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-11-12 10:44:44 --- STRACE: View_Exception [ 0 ]: The requested view admin/lections/add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/lections/...')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/lections/...', Array)
#2 D:\xampp\htdocs\kohana\application\classes\controller\admin\courses.php(134): Kohana_View::factory('admin/lections/...', Array)
#3 [internal function]: Controller_Admin_Courses->action_lectionadd()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Courses))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-12 10:45:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/avatars/10_1349514909.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-12 10:45:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/avatars/10_1349514909.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 10:45:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/avatars/10_1349514909.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-12 10:45:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: images/avatars/10_1349514909.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 10:48:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
2012-11-12 10:48:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\index\base.php [ 6 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\base.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 6, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}