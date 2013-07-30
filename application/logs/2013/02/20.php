<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-02-20 06:46:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-20 06:46:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-20 06:51:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-02-20 06:51:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-02-20 06:51:44 --- ERROR: View_Exception [ 0 ]: The requested view admin/lections/add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-02-20 06:51:44 --- STRACE: View_Exception [ 0 ]: The requested view admin/lections/add could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/lections/...')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/lections/...', Array)
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\admin\courses.php(134): Kohana_View::factory('admin/lections/...', Array)
#3 [internal function]: Controller_Admin_Courses->action_lectionadd()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Courses))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}