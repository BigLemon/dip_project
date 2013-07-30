<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-10-18 09:39:00 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', 'qwe', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-18 09:39:00 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', 'qwe', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-18 10:02:18 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', 'qwe', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-18 10:02:18 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', 'qwe', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-18 10:02:36 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', 'qwe', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-18 10:02:36 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', 'qwe', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-18 10:10:00 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', 'qwe', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-18 10:10:00 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', 'qwe', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-18 10:32:42 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', 'qwe', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-10-18 10:32:42 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'swan' for key 'uniq_username' [ INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`, `sex`) VALUES ('swan', '0d090bc170b2327ae6f964f9663255661d67f45da3f0281626dd1a1d5fa54196', 'a@z9.ru', 'qwe', 'q1eWER', '2') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\xampp\htdocs\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\kohana\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#3 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(55): Model_Auth_User->create_user(Array, Array)
#4 [internal function]: Controller_Index_Auth->action_register()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#6 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-10-18 10:45:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH\views\admin\users\list.php [ 24 ]
2012-10-18 10:45:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH\views\admin\users\list.php [ 24 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\users\list.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 24, Array)
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-18 10:47:14 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-10-18 10:47:14 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\users\list.php(26): Kohana_ORM->__get('title')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-18 10:48:23 --- ERROR: Kohana_Exception [ 0 ]: The title property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-10-18 10:48:23 --- STRACE: Kohana_Exception [ 0 ]: The title property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\users\list.php(26): Kohana_ORM->__get('title')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}
2012-10-18 10:48:27 --- ERROR: Kohana_Exception [ 0 ]: The url property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-10-18 10:48:27 --- STRACE: Kohana_Exception [ 0 ]: The url property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 D:\xampp\htdocs\kohana\application\views\admin\users\list.php(27): Kohana_ORM->__get('url')
#1 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#2 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#3 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\xampp\htdocs\kohana\application\views\admin\base.php(96): Kohana_View->__toString()
#5 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('D:\xampp\htdocs...')
#6 D:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('D:\xampp\htdocs...', Array)
#7 D:\xampp\htdocs\kohana\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#13 {main}