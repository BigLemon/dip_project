<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-01-31 04:54:26 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 04:54:26 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
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
2013-01-31 05:23:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-31 05:23:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-31 05:23:32 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 05:23:32 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
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
2013-01-31 05:24:30 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 05:24:30 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
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
2013-01-31 05:25:08 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 05:25:08 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
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
2013-01-31 05:26:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-31 05:26:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-31 05:26:13 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 05:26:13 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
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
2013-01-31 05:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-31 05:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-31 05:59:31 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 05:59:31 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
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
2013-01-31 06:05:07 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 06:05:07 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
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
2013-01-31 06:25:42 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 06:25:42 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
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
2013-01-31 06:40:51 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 06:40:51 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
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
2013-01-31 06:48:43 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 06:48:43 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
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
2013-01-31 10:19:28 --- ERROR: Database_Exception [ 1049 ]: Unknown database 'edu' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2013-01-31 10:19:28 --- STRACE: Database_Exception [ 1049 ]: Unknown database 'edu' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('edu')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('courses')
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#5 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\main.php(13): Kohana_ORM::factory('course')
#9 [internal function]: Controller_Index_Main->action_index()
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#14 {main}
2013-01-31 10:22:28 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 10:22:28 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): Kohana_Core::error_handler('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\auth.php(118): Email::send('a@z9.ru', 'from@gmail.com', 'Suject', 'Message', false)
#6 [internal function]: Controller_Index_Auth->action_lost()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-31 10:27:17 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 10:27:17 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): Kohana_Core::error_handler('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\auth.php(118): Email::send('a@z9.ru', 'from@gmail.com', 'Suject', 'Message', false)
#6 [internal function]: Controller_Index_Auth->action_lost()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-31 10:47:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-31 10:47:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-31 10:47:30 --- ERROR: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
2013-01-31 10:47:30 --- STRACE: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Попытка установить соединение была безуспешной, т.к. от другого компьютера за требуемое время не получен нужный отклик, или было разорвано уже установленное соединение из-за неверного отклика уже подключенного компьютера.
) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): Kohana_Core::error_handler('ssl://smtp.gmai...', 465, 10060, '??????? ???????...', 5)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#2 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#3 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#4 D:\openserver\OpenServer\domains\kohana\public_html\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#5 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\auth.php(118): Email::send('a@z9.ru', 'from@gmail.com', 'Suject', 'Message', false)
#6 [internal function]: Controller_Index_Auth->action_lost()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#8 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#11 {main}
2013-01-31 10:56:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-31 10:56:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-31 10:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-31 10:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-31 10:56:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL index/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-31 10:56:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL index/index was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-31 10:57:35 --- ERROR: ErrorException [ 1 ]: Call to undefined function  hash_password() ~ APPPATH\classes\controller\index\auth.php [ 94 ]
2013-01-31 10:57:35 --- STRACE: ErrorException [ 1 ]: Call to undefined function  hash_password() ~ APPPATH\classes\controller\index\auth.php [ 94 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-31 10:57:57 --- ERROR: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
2013-01-31 10:57:57 --- STRACE: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\kohana\orm.php [ 1250 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\auth.php(98): Kohana_ORM->update()
#1 [internal function]: Controller_Index_Auth->action_lost()
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-31 11:03:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: company_id ~ APPPATH\classes\controller\index\auth.php [ 101 ]
2013-01-31 11:03:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: company_id ~ APPPATH\classes\controller\index\auth.php [ 101 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\auth.php(101): Kohana_Core::error_handler()
#1 [internal function]: Controller_Index_Auth->action_lost(Object(Controller_Index_Auth))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-31 11:04:27 --- ERROR: Database_Exception [ 1146 ]: Table 'edu.user' doesn't exist [ UPDATE `user` SET `password` = 'a25581b9193f09eafe165711a1267dc9' WHERE `email` = 'a@z9.ru' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-31 11:04:27 --- STRACE: Database_Exception [ 1146 ]: Table 'edu.user' doesn't exist [ UPDATE `user` SET `password` = 'a25581b9193f09eafe165711a1267dc9' WHERE `email` = 'a@z9.ru' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `user` S...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\auth.php(102): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Index_Auth->action_lost()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-31 11:05:14 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2013-01-31 11:05:14 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('users', 'a@z9.ru')
#1 {main}
2013-01-31 11:06:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-31 11:06:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana/auth was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-31 11:29:25 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_Auth_ORM::_login(), called in D:\openserver\OpenServer\domains\kohana\public_html\modules\auth\classes\kohana\auth.php on line 97 and defined ~ MODPATH\orm\classes\kohana\auth\orm.php [ 68 ]
2013-01-31 11:29:25 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_Auth_ORM::_login(), called in D:\openserver\OpenServer\domains\kohana\public_html\modules\auth\classes\kohana\auth.php on line 97 and defined ~ MODPATH\orm\classes\kohana\auth\orm.php [ 68 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\auth\orm.php(68): Kohana_Core::error_handler('a@z9.ru', '????????????')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\auth\classes\kohana\auth.php(97): Kohana_Auth_ORM->_login('a@z9.ru', '????????????')
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\auth.php(92): Kohana_Auth->lost()
#3 [internal function]: Controller_Index_Auth->action_lost(Object(Controller_Index_Auth))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-31 11:30:56 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_Auth_ORM::_login(), called in D:\openserver\OpenServer\domains\kohana\public_html\modules\auth\classes\kohana\auth.php on line 97 and defined ~ MODPATH\orm\classes\kohana\auth\orm.php [ 68 ]
2013-01-31 11:30:56 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_Auth_ORM::_login(), called in D:\openserver\OpenServer\domains\kohana\public_html\modules\auth\classes\kohana\auth.php on line 97 and defined ~ MODPATH\orm\classes\kohana\auth\orm.php [ 68 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\auth\orm.php(68): Kohana_Core::error_handler('a@z9.ru', '????????????')
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\auth\classes\kohana\auth.php(97): Kohana_Auth_ORM->_login('a@z9.ru', '????????????')
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\auth.php(92): Kohana_Auth->lost()
#3 [internal function]: Controller_Index_Auth->action_lost(Object(Controller_Index_Auth))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-31 11:31:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Auth_ORM::_lost() ~ MODPATH\auth\classes\kohana\auth.php [ 97 ]
2013-01-31 11:31:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Auth_ORM::_lost() ~ MODPATH\auth\classes\kohana\auth.php [ 97 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('a@z9.ru', '????????????')
#1 {main}
2013-01-31 11:45:35 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index\auth\lostpassword.php [ 19 ]
2013-01-31 11:45:35 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index\auth\lostpassword.php [ 19 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\auth\lostpassword.php(19): Kohana_Core::error_handler('D:\openserver\O...', Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\openserver\OpenServer\domains\kohana\public_html\application\views\index\base.php(129): Kohana_View->__toString('D:\openserver\O...', Array)
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(61): include('D:\openserver\O...')
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\view.php(343): Kohana_View::capture()
#7 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index_Auth))
#9 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#12 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-31 11:56:55 --- ERROR: ErrorException [ 1 ]: Call to undefined function  sha256() ~ APPPATH\classes\controller\index\auth.php [ 96 ]
2013-01-31 11:56:55 --- STRACE: ErrorException [ 1 ]: Call to undefined function  sha256() ~ APPPATH\classes\controller\index\auth.php [ 96 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-01-31 12:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-31 12:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-31 12:02:17 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('fghfg', 'fghfg', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-31 12:02:17 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('fghfg', 'fghfg', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\courses.php(102): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-31 12:06:27 --- ERROR: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('fghfg', 'fghfg', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-31 12:06:27 --- STRACE: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`edu`.`courses`, CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usercourses` (`course_id`)) [ INSERT INTO `courses` (`name`, `desc`, `id_author`, `id_category`, `status`) VALUES ('fghfg', 'fghfg', '7', '1', '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\courses.php(102): Kohana_ORM->create()
#3 [internal function]: Controller_Tutor_Courses->action_add()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Tutor_Courses))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-31 12:18:30 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-31 12:18:30 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 D:\openserver\OpenServer\domains\kohana\public_html\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\index\auth.php(58): Kohana_ORM->add('roles', Object(Model_Role))
#3 [internal function]: Controller_Index_Auth->action_register()
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#5 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-31 12:22:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-31 12:22:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-31 12:23:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-31 12:23:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tutor/courses/edit/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-31 12:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-31 12:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-31 12:25:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-31 12:25:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/pages/images/image1.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-31 12:33:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-01-31 12:33:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax-loader.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-31 13:22:03 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
2013-01-31 13:22:03 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$users ~ APPPATH\classes\controller\tutor\rating.php [ 41 ]
--
#0 D:\openserver\OpenServer\domains\kohana\public_html\application\classes\controller\tutor\rating.php(41): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tutor_Rating->action_view(Object(Controller_Tutor_Rating))
#2 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\openserver\OpenServer\domains\kohana\public_html\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute()
#5 D:\openserver\OpenServer\domains\kohana\public_html\index.php(109): Kohana_Request->execute()
#6 {main}