<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-07 11:06:10 --- ERROR: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ DELETE FROM `usercourses` WHERE `id` = '20' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-12-07 11:06:10 --- STRACE: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ DELETE FROM `usercourses` WHERE `id` = '20' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(4, 'DELETE FROM `us...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1334): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\application\classes\controller\index\user.php(256): Kohana_ORM->delete()
#3 [internal function]: Controller_Index_User->action_delcourse()
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_User))
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}