<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-09 05:05:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/classes/Controller/User.php [ 277 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:277
2014-12-09 05:05:32 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(277): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 277, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:277
2014-12-09 05:06:53 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Helper/Database.php [ 20 ] in file:line
2014-12-09 05:06:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/wap29/sit...', 20, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(20): PDOStatement->execute(Array)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/User.php(34): Helper_Database->query('SELECT * FROM a...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(278): Model_User->getAddress(Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-12-09 05:07:54 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Helper/Database.php [ 20 ] in file:line
2014-12-09 05:07:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/wap29/sit...', 20, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(20): PDOStatement->execute(Array)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/User.php(34): Helper_Database->query('SELECT * FROM a...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(280): Model_User->getAddress(Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-12-09 05:08:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/User.php [ 279 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:279
2014-12-09 05:08:58 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(279): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 279, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:279
2014-12-09 05:09:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/User.php [ 279 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:279
2014-12-09 05:09:03 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(279): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 279, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:279
2014-12-09 05:09:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/User.php [ 279 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:279
2014-12-09 05:09:50 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(279): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 279, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:279
2014-12-09 05:10:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/classes/Controller/User.php [ 279 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:279
2014-12-09 05:10:07 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(279): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 279, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:279
2014-12-09 05:10:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/classes/Controller/User.php [ 279 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:279
2014-12-09 05:10:14 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(279): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 279, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:279
2014-12-09 05:10:35 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Helper/Database.php [ 20 ] in file:line
2014-12-09 05:10:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/wap29/sit...', 20, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(20): PDOStatement->execute(Array)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/User.php(34): Helper_Database->query('SELECT * FROM a...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(280): Model_User->getAddress(Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2014-12-09 05:10:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/views/address.php [ 15 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 05:10:41 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/address.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 15, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(282): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 05:24:32 --- EMERGENCY: PDOException [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'ecommerce.address' doesn't exist ~ APPPATH/classes/Helper/Database.php [ 20 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:20
2014-12-09 05:24:32 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(20): PDOStatement->execute(Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/User.php(34): Helper_Database->query('SELECT * FROM a...', Array)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(280): Model_User->getAddress('1')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:20
2014-12-09 05:24:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: idUser ~ APPPATH/views/address.php [ 15 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 05:24:54 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/address.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 15, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(282): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 06:33:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: addresses ~ APPPATH/views/address.php [ 15 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 06:33:05 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/address.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 15, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(337): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 06:33:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: addresses ~ APPPATH/views/address.php [ 15 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 06:33:05 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/address.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 15, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(342): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 06:46:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view address  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 06:46:23 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('address ')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('address ', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(335): Kohana_View::factory('address ')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 06:47:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view address  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 06:47:27 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('address ')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('address ', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(309): Kohana_View::factory('address ')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 06:47:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view address  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 06:47:51 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('address ')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('address ', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(287): Kohana_View::factory('address ')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 06:47:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view address  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 06:47:59 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('address ')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('address ', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(287): Kohana_View::factory('address ')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 06:49:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view address  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 06:49:34 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('address ')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('address ', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(334): Kohana_View::factory('address ')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 07:02:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view address  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 07:02:28 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('address ')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('address ', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(306): Kohana_View::factory('address ')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 07:02:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view address  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 07:02:53 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('address ')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('address ', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(334): Kohana_View::factory('address ')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 07:03:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view address  could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 07:03:59 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(137): Kohana_View->set_filename('address ')
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(30): Kohana_View->__construct('address ', NULL)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(331): Kohana_View::factory('address ')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php:137
2014-12-09 07:04:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: addresses ~ APPPATH/views/address.php [ 15 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 07:04:17 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/address.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 15, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(336): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 07:10:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: addresses ~ APPPATH/views/address.php [ 15 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 07:10:54 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/address.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 15, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(325): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:15
2014-12-09 07:14:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: category ~ APPPATH/views/address.php [ 55 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:55
2014-12-09 07:14:29 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/address.php(55): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 55, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(333): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:55
2014-12-09 07:24:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/views/address.php [ 21 ] in file:line
2014-12-09 07:24:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 07:26:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/views/address.php [ 21 ] in file:line
2014-12-09 07:26:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 07:27:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/views/address.php [ 21 ] in file:line
2014-12-09 07:27:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 07:48:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/address.php [ 16 ] in file:line
2014-12-09 07:48:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 07:50:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/address.php [ 16 ] in file:line
2014-12-09 07:50:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-09 07:54:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: addresses ~ APPPATH/views/address.php [ 16 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:16
2014-12-09 07:54:17 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/address.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 16, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(325): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_address()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/address.php:16
2014-12-09 08:48:48 --- EMERGENCY: PDOException [ HY093 ]: SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens ~ APPPATH/classes/Helper/Database.php [ 34 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-09 08:48:48 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(34): PDOStatement->execute(Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/Product.php(39): Helper_Database->execute('INSERT INTO com...', Array)
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(130): Model_Product->setCommand('39', '4', 2, 6, '10')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_command()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34