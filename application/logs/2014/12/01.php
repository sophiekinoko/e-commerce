<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-01 04:24:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 20 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:24:08 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 20, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(8): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:28:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 20 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:28:26 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 20, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(40): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:31:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 20 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:31:35 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 20, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(39): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:38:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 20 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:38:40 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 20, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(39): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:39:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 20 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:39:02 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 20, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(39): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:39:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 20 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:39:03 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 20, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(39): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:20
2014-12-01 04:46:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH/classes/Controller/User.php [ 17 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:17
2014-12-01 04:46:49 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 17, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:17
2014-12-01 04:48:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH/classes/Controller/User.php [ 17 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:17
2014-12-01 04:48:16 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 17, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:17
2014-12-01 04:48:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH/classes/Controller/User.php [ 17 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:17
2014-12-01 04:48:34 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 17, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:17
2014-12-01 04:49:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function login() ~ APPPATH/classes/Controller/User.php [ 17 ] in file:line
2014-12-01 04:49:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 04:51:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: login ~ APPPATH/classes/Controller/User.php [ 17 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:17
2014-12-01 04:51:41 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 17, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:17
2014-12-01 04:52:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/User.php [ 19 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:19
2014-12-01 04:52:12 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 19, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:19
2014-12-01 04:54:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Controller/User.php [ 19 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:19
2014-12-01 04:54:40 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 19, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:19
2014-12-01 05:13:30 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant index - assumed 'index' ~ APPPATH/classes/Controller/User.php [ 33 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:33
2014-12-01 05:13:30 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(33): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap29/sit...', 33, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:33
2014-12-01 05:14:37 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant index - assumed 'index' ~ APPPATH/classes/Controller/User.php [ 33 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:33
2014-12-01 05:14:37 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(33): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap29/sit...', 33, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:33
2014-12-01 05:18:34 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant user - assumed 'user' ~ APPPATH/views/login.php [ 15 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:15
2014-12-01 05:18:34 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap29/sit...', 15, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(48): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:15
2014-12-01 05:18:38 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant user - assumed 'user' ~ APPPATH/views/login.php [ 15 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:15
2014-12-01 05:18:38 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap29/sit...', 15, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(48): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:15
2014-12-01 05:19:58 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant user - assumed 'user' ~ APPPATH/views/login.php [ 15 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:15
2014-12-01 05:19:58 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap29/sit...', 15, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(48): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:15
2014-12-01 05:20:00 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant user - assumed 'user' ~ APPPATH/views/login.php [ 15 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:15
2014-12-01 05:20:00 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/wap29/sit...', 15, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(48): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:15
2014-12-01 05:21:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Controller/User.php [ 43 ] in file:line
2014-12-01 05:21:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 05:21:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Controller/User.php [ 43 ] in file:line
2014-12-01 05:21:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 05:21:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/classes/Controller/User.php [ 43 ] in file:line
2014-12-01 05:21:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 05:24:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function redirect() ~ APPPATH/classes/Controller/User.php [ 33 ] in file:line
2014-12-01 05:24:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:11:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:11:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:12:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:12:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:12:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:12:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:12:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:12:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:12:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:12:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:12:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:12:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:12:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:12:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:12:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:12:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:12:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:12:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:13:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:13:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:13:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:13:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:13:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:13:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:13:10 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-12-01 07:13:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 07:15:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 25 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:25
2014-12-01 07:15:16 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 25, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(45): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:25
2014-12-01 07:17:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: selogger ~ APPPATH/views/login.php [ 33 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:33
2014-12-01 07:17:17 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 33, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(49): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:33
2014-12-01 07:38:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view register could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:38:25 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('register')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('register', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(66): Kohana_View::factory('register')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:39:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view register could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:39:27 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('register')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('register', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(65): Kohana_View::factory('register')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-01 07:40:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: seregistrer ~ APPPATH/views/register.php [ 31 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/register.php:31
2014-12-01 07:40:23 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/register.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 31, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(66): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/register.php:31
2014-12-01 07:50:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: statut ~ APPPATH/views/login.php [ 21 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:21
2014-12-01 07:50:38 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 21, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(53): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:21
2014-12-01 07:55:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'user' (T_STRING), expecting ',' or ';' ~ APPPATH/views/login.php [ 41 ] in file:line
2014-12-01 07:55:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:11:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 25 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:25
2014-12-01 08:11:44 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 25, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(42): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:25
2014-12-01 08:13:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/User.php [ 52 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:52
2014-12-01 08:13:02 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 52, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:52
2014-12-01 08:18:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function arrray() ~ APPPATH/classes/Controller/User.php [ 56 ] in file:line
2014-12-01 08:18:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:18:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: login ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:9
2014-12-01 08:18:09 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 9, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:9
2014-12-01 08:27:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: login ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:9
2014-12-01 08:27:33 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 9, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:9
2014-12-01 08:27:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: login ~ APPPATH/classes/Controller/Welcome.php [ 9 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:9
2014-12-01 08:27:41 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 9, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:9
2014-12-01 08:32:06 --- EMERGENCY: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH/classes/Controller/User.php [ 67 ] in file:line
2014-12-01 08:32:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', '/home/wap29/sit...', 67, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(67): session_start()
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-12-01 08:38:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/register.php [ 27 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/register.php:27
2014-12-01 08:38:35 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/register.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 27, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(118): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/register.php:27
2014-12-01 08:39:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::createUSer() ~ APPPATH/classes/Controller/User.php [ 102 ] in file:line
2014-12-01 08:39:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 08:49:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view logger could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-01 08:49:15 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('logger')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('logger', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(81): Kohana_View::factory('logger')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-01 08:49:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view logger could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-01 08:49:47 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('logger')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('logger', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(81): Kohana_View::factory('logger')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-01 08:51:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/login.php [ 25 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:25
2014-12-01 08:51:40 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/login.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 25, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(83): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/login.php:25
2014-12-01 09:01:18 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 70 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:70
2014-12-01 09:01:18 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(70): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/wap29/sit...', 70, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:70
2014-12-01 09:33:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/User.php [ 28 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:28
2014-12-01 09:33:14 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 28, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:28
2014-12-01 09:49:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'catch' (T_CATCH) ~ APPPATH/classes/Controller/User.php [ 61 ] in file:line
2014-12-01 09:49:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 09:52:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Controller/User.php [ 45 ] in file:line
2014-12-01 09:52:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 11:03:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getCategories() ~ APPPATH/views/nav.php [ 14 ] in file:line
2014-12-01 11:03:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 11:04:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getCategories() ~ APPPATH/views/nav.php [ 14 ] in file:line
2014-12-01 11:04:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 11:04:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getCategories() ~ APPPATH/views/nav.php [ 14 ] in file:line
2014-12-01 11:04:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 11:04:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getCategories() ~ APPPATH/views/nav.php [ 14 ] in file:line
2014-12-01 11:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-01 11:05:57 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Helper_Database::query(), called in /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/Product.php on line 19 and defined ~ APPPATH/classes/Helper/Database.php [ 18 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:18
2014-12-01 11:05:57 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(18): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/wap29/sit...', 18, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/Product.php(19): Helper_Database->query('SELECT category...')
#2 /home/wap29/sites/PHP/18-ecommerce/application/views/nav.php(14): Model_Product->getCategories()
#3 /home/wap29/sites/PHP/18-ecommerce/application/views/index.php(21): include('/home/wap29/sit...')
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#8 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(16): Kohana_Response->body(Object(View))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#15 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:18