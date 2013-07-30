<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-30 10:08:44 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 10:08:44 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.com', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 10:10:55 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 10:10:55 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.com', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 10:22:54 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 10:22:54 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://gmail.com', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.com', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 10:25:41 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 10:25:41 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.com', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 10:26:42 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 10:26:42 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.com', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 10:33:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-30 10:33:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-30 10:33:32 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 10:33:32 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.com', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 10:36:34 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 10:36:34 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.com', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 10:37:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2013-01-30 10:37:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 10:42:10 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 10:42:10 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(117): Swift_Mailer->send(Object(Swift_Message), Array, 'from@gmail.com')
#6 [internal function]: Controller_Index_Auth->action_lost()
#7 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-30 11:34:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: to ~ APPPATH\classes\controller\index\auth.php [ 114 ]
2013-01-30 11:34:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: to ~ APPPATH\classes\controller\index\auth.php [ 114 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(114): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 114, Array)
#1 [internal function]: Controller_Index_Auth->action_lost()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-30 11:35:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: from ~ APPPATH\classes\controller\index\auth.php [ 115 ]
2013-01-30 11:35:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: from ~ APPPATH\classes\controller\index\auth.php [ 115 ]
--
#0 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(115): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\xampp\htdocs...', 115, Array)
#1 [internal function]: Controller_Index_Auth->action_lost()
#2 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-30 11:36:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2013-01-30 11:36:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 11:37:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-30 11:37:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL guide was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-30 11:39:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2013-01-30 11:39:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 11:39:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2013-01-30 11:39:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 11:39:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2013-01-30 11:39:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 11:39:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2013-01-30 11:39:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 11:39:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2013-01-30 11:39:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 11:39:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2013-01-30 11:39:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-30 11:40:24 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 11:40:24 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.ru', 'from@gmail.com', 'Suject', 'Message', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 11:52:12 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 11:52:12 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.ru', 'from@gmail.com', 'Suject', 'Message', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 11:53:05 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 11:53:05 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.ru', 'from@gmail.com', 'Suject', 'Message', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 11:56:34 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 11:56:34 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.ru', 'from@gmail.com', 'Suject', 'Message', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2013-01-30 12:01:55 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-30 12:01:55 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'D:\xampp\htdocs...', 243, Array)
#1 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#2 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 D:\xampp\htdocs\kohana\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 D:\xampp\htdocs\kohana\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 D:\xampp\htdocs\kohana\application\classes\controller\index\auth.php(118): Email::send('a@z9.ru', 'from@gmail.com', 'Suject', 'Message', false)
#7 [internal function]: Controller_Index_Auth->action_lost()
#8 D:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#9 D:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 D:\xampp\htdocs\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#12 {main}