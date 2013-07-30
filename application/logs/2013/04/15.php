<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-15 01:48:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 01:48:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 01:58:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 01:58:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 02:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 02:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 02:40:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 02:40:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 02:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 02:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 02:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 02:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 03:22:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 03:22:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 03:22:17 --- ERROR: Kohana_Exception [ 0 ]: The qanswers property does not exist in the Model_Question class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-15 03:22:17 --- STRACE: Kohana_Exception [ 0 ]: The qanswers property does not exist in the Model_Question class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\tests\index.php(22): Kohana_ORM->__get('qanswers')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-15 03:22:57 --- ERROR: Kohana_Exception [ 0 ]: The qanswers property does not exist in the Model_Question class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-15 03:22:57 --- STRACE: Kohana_Exception [ 0 ]: The qanswers property does not exist in the Model_Question class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\tests\index.php(22): Kohana_ORM->__get('qanswers')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-15 03:28:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\index\tests\index.php [ 16 ]
2013-04-15 03:28:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\views\index\tests\index.php [ 16 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\tests\index.php(16): Kohana_Core::error_handler('D:\openserver\O...', Array)
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
2013-04-15 03:28:59 --- ERROR: Kohana_Exception [ 0 ]: The qanswers property does not exist in the Model_Question class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-15 03:28:59 --- STRACE: Kohana_Exception [ 0 ]: The qanswers property does not exist in the Model_Question class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\tests\index.php(22): Kohana_ORM->__get('qanswers')
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture('D:\openserver\O...', Array)
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-15 03:45:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 03:45:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 03:45:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 03:45:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:28:57 --- ERROR: Database_Exception [ 1146 ]: Table 'edu2.answers' doesn't exist [ SHOW FULL COLUMNS FROM `answers` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-04-15 05:28:57 --- STRACE: Database_Exception [ 1146 ]: Table 'edu2.answers' doesn't exist [ SHOW FULL COLUMNS FROM `answers` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('answers')
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(51): Kohana_ORM::factory('answer')
#7 [internal function]: Controller_Index_Tests->action_go()
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#12 {main}
2013-04-15 05:29:35 --- ERROR: Kohana_Exception [ 0 ]: The answers property does not exist in the Model_Question class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-15 05:29:35 --- STRACE: Kohana_Exception [ 0 ]: The answers property does not exist in the Model_Question class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\tests.php(58): Kohana_ORM->__get('answers')
#1 [internal function]: Controller_Index_Tests->action_go()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Tests))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-15 05:40:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/labs/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:40:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/labs/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:40:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:40:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:43:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:43:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:45:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:45:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:45:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:45:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:45:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:45:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:47:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:47:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:47:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:47:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:48:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:48:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 05:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 05:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/exercise/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 06:19:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 06:19:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-15 06:21:40 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete course model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2013-04-15 06:21:40 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete course model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\courses.php(69): Kohana_ORM->delete()
#1 [internal function]: Controller_Tutor_Courses->action_delete()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-04-15 06:51:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-15 06:51:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}