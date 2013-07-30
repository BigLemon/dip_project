<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-28 09:08:53 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`answers`, CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`)) [ DELETE FROM `questions` WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-28 09:08:53 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`answers`, CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id`)) [ DELETE FROM `questions` WHERE `id` = '6' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `qu...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(81): Kohana_ORM->delete()
#3 [internal function]: Controller_Tutor_Questions->action_delete()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-28 09:21:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:21:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/lectionadd/Lecture2/Eqn3.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/lectionadd/Lecture2/Eqn3.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/lectionadd/Lecture2/Eqn5.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/lectionadd/Lecture2/Eqn5.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:29:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/lectionadd/Lecture2/Eqn1.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:29:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/lectionadd/Lecture2/Eqn1.gif ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:44:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:44:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:44:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:44:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:44:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:44:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:46:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:46:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:48:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:48:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:48:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 09:48:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-28 09:56:17 --- ERROR: View_Exception [ 0 ]: The requested view tutor/user/rating could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-11-28 09:56:17 --- STRACE: View_Exception [ 0 ]: The requested view tutor/user/rating could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('tutor/user/rati...')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('tutor/user/rati...', Array)
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(21): Kohana_View::factory('tutor/user/rati...', Array)
#3 [internal function]: Controller_Tutor_Rating->action_index()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-28 09:57:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\index\user\rating.php [ 31 ]
2012-11-28 09:57:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\index\user\rating.php [ 31 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 31, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:00:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\index\user\rating.php [ 33 ]
2012-11-28 10:00:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\index\user\rating.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:01:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\user\rating.php [ 48 ]
2012-11-28 10:01:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\user\rating.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-28 10:02:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\user\rating.php [ 69 ]
2012-11-28 10:02:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\user\rating.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-28 10:02:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\user\rating.php [ 69 ]
2012-11-28 10:02:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\index\user\rating.php [ 69 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-28 10:05:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\index\user\rating.php [ 34 ]
2012-11-28 10:05:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\index\user\rating.php [ 34 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 34, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:16:23 --- ERROR: ErrorException [ 1 ]: Class 'Model_Courses' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-11-28 10:16:23 --- STRACE: ErrorException [ 1 ]: Class 'Model_Courses' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-28 10:17:25 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-11-28 10:17:25 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(25): Kohana_ORM->__get('name')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:20:31 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-11-28 10:20:31 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(35): Kohana_ORM->__get('id')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:21:39 --- ERROR: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-11-28 10:21:39 --- STRACE: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(35): Kohana_ORM->__get('id')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:22:00 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-11-28 10:22:00 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(35): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:25:27 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-11-28 10:25:27 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(35): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:25:29 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-11-28 10:25:29 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(35): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:25:56 --- ERROR: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-11-28 10:25:56 --- STRACE: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(35): Kohana_ORM->__get('user')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:37:49 --- ERROR: Kohana_Exception [ 0 ]: The test property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-11-28 10:37:49 --- STRACE: Kohana_Exception [ 0 ]: The test property does not exist in the Model_Testresult class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(36): Kohana_ORM->__get('test')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:56:36 --- ERROR: Kohana_Exception [ 0 ]: The from property does not exist in the Model_Message class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-11-28 10:56:36 --- STRACE: Kohana_Exception [ 0 ]: The from property does not exist in the Model_Message class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\message.php(29): Kohana_ORM->__get('from')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 10:59:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH\views\index\user\message.php [ 27 ]
2012-11-28 10:59:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: msg ~ APPPATH\views\index\user\message.php [ 27 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\message.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 27, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\index\base.php(129): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index_User))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:27:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: p ~ APPPATH\views\index\user\rating.php [ 33 ]
2012-11-28 11:27:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: p ~ APPPATH\views\index\user\rating.php [ 33 ]
--
#0 D:\xampp\htdocs\kohana\application\views\index\user\rating.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 33, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:35:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
2012-11-28 11:35:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 4, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:37:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
2012-11-28 11:37:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 4, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:37:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
2012-11-28 11:37:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 4, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:37:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
2012-11-28 11:37:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 4, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:37:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
2012-11-28 11:37:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 4, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:37:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
2012-11-28 11:37:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 4 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 4, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:38:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 11:38:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:42:45 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 11:42:45 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:43:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 11:43:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:44:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 11:44:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:44:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 11:44:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:46:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 11:46:01 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:46:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 11:46:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 11:53:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 11:53:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$firstname ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:02:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
2012-11-28 12:02:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\courses\view.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:04:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
2012-11-28 12:04:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\courses\view.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:07:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
2012-11-28 12:07:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\courses\view.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:07:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
2012-11-28 12:07:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\courses\view.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:08:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
2012-11-28 12:08:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\courses\view.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:08:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
2012-11-28 12:08:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\courses\view.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:08:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
2012-11-28 12:08:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: lections ~ APPPATH\views\tutor\courses\view.php [ 23 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\courses\view.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 23, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:09:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 12:09:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:09:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 12:09:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:10:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\views\tutor\rating\view.php [ 25 ]
2012-11-28 12:10:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$user ~ APPPATH\views\tutor\rating\view.php [ 25 ]
--
#0 D:\xampp\htdocs\kohana\application\views\tutor\rating\view.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 25, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\tutor\base.php(94): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-28 12:13:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-28 12:13:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}