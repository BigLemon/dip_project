<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-12 07:38:41 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Question as array ~ APPPATH\classes\controller\tutor\questions.php [ 44 ]
2012-12-12 07:38:41 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Question as array ~ APPPATH\classes\controller\tutor\questions.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-12 07:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-12 07:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-12 08:37:48 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-12-12 08:37:48 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(97): Kohana_ORM->delete()
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:38:27 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-12-12 08:38:27 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(97): Kohana_ORM->delete()
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:40:27 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-12-12 08:40:27 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(100): Kohana_ORM->delete()
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:41:12 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-12-12 08:41:12 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(97): Kohana_ORM->delete()
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:42:05 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Qanswer::delete_all() ~ APPPATH\classes\controller\tutor\questions.php [ 94 ]
2012-12-12 08:42:05 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Qanswer::delete_all() ~ APPPATH\classes\controller\tutor\questions.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-12 08:43:56 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-12-12 08:43:56 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(97): Kohana_ORM->delete()
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:48:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\tutor\questions.php [ 101 ]
2012-12-12 08:48:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\tutor\questions.php [ 101 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(101): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 101, Array)
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:48:42 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$questions ~ APPPATH\classes\controller\tutor\questions.php [ 102 ]
2012-12-12 08:48:42 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$questions ~ APPPATH\classes\controller\tutor\questions.php [ 102 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(102): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 102, Array)
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:49:46 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answers ~ APPPATH\classes\controller\tutor\questions.php [ 102 ]
2012-12-12 08:49:46 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answers ~ APPPATH\classes\controller\tutor\questions.php [ 102 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(102): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 102, Array)
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:51:06 --- ERROR: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 909 ]
2012-12-12 08:51:06 --- STRACE: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 909 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(100): Kohana_ORM->find_all()
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:51:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answers ~ APPPATH\classes\controller\tutor\questions.php [ 102 ]
2012-12-12 08:51:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$answers ~ APPPATH\classes\controller\tutor\questions.php [ 102 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(102): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 102, Array)
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:56:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-12 08:56:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-12 08:57:18 --- ERROR: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
2012-12-12 08:57:18 --- STRACE: Kohana_Exception [ 0 ]: Cannot delete qanswer model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1326 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(100): Kohana_ORM->delete()
#1 [internal function]: Controller_Tutor_Questions->action_delete()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 08:58:21 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2012-12-12 08:58:21 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\xampp\htdocs...', 41, Array)
#1 [internal function]: Controller_Tutor_Rating->action_view()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Rating))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 12:33:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-12 12:33:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-12 12:33:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-12 12:33:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-12 12:36:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'id_question' in 'where clause' [ SELECT `answer`.* FROM `answers` AS `answer` WHERE `id_question` = '27' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-12-12 12:36:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'id_question' in 'where clause' [ SELECT `answer`.* FROM `answers` AS `answer` WHERE `id_question` = '27' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `answer`...', 'Model_Answer', Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(148): Kohana_ORM->find_all()
#4 [internal function]: Controller_Tutor_Questions->action_edit()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-12 12:38:22 --- ERROR: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_Answer class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-12-12 12:38:22 --- STRACE: Kohana_Exception [ 0 ]: The id_question property does not exist in the Model_Answer class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\tutor\questions.php(139): Kohana_ORM->set('id_question', '27')
#1 [internal function]: Controller_Tutor_Questions->action_edit()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Questions))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-12 14:53:47 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('новый курс', 'дорсмдособдсобдсобпбо', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-12-12 14:53:47 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('новый курс', 'дорсмдособдсобдсобпбо', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\courses.php(98): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}