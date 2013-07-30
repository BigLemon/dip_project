<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-29 08:26:53 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('Контакты', 'ывкпык', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-29 08:26:53 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('Контакты', 'ывкпык', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\courses.php(94): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-29 08:33:01 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('Контакты', 'qweqw', '7', '2', '0') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-29 08:33:01 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('Контакты', 'qweqw', '7', '2', '0') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\courses.php(95): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-29 08:38:45 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('cristallo.di@gmail.com', 'qweqw', '7', '2', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-29 08:38:45 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('cristallo.di@gmail.com', 'qweqw', '7', '2', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\courses.php(96): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-29 08:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-29 08:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-29 08:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-29 08:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-29 08:54:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-29 08:54:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-29 09:00:28 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('cristallo.di@gmail.com', 'qweqw', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-29 09:00:28 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('cristallo.di@gmail.com', 'qweqw', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\tutor\courses.php(96): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-29 09:03:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-11-29 09:03:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-29 09:10:13 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('Контакты', 'qweqw', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-29 09:10:13 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('Контакты', 'qweqw', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\admin\courses.php(92): Kohana_ORM->create()
#3 [internal function]: Controller_Admin_Courses->action_add()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Courses))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}