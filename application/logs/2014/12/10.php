<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-10 04:21:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'id' (T_STRING) ~ APPPATH/classes/Model/Product.php [ 154 ] in file:line
2014-12-10 04:21:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 04:23:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'id' (T_STRING) ~ APPPATH/classes/Model/Product.php [ 154 ] in file:line
2014-12-10 04:23:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 05:07:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/index.php [ 21 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:21
2014-12-10 05:07:23 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/index.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 21, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(31): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:21
2014-12-10 05:08:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Welcome.php [ 18 ] in file:line
2014-12-10 05:08:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:04:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/Controller/Welcome.php [ 21 ] in file:line
2014-12-10 07:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:11:11 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/Controller/Welcome.php [ 21 ] in file:line
2014-12-10 07:11:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:14:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ APPPATH/classes/Controller/Welcome.php [ 21 ] in file:line
2014-12-10 07:14:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:21:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page ~ APPPATH/classes/Controller/Welcome.php [ 19 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:19
2014-12-10 07:21:51 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 19, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:19
2014-12-10 07:22:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$page' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/views/index.php [ 20 ] in file:line
2014-12-10 07:22:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:22:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$page' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/views/index.php [ 20 ] in file:line
2014-12-10 07:22:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:22:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$page' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/views/index.php [ 20 ] in file:line
2014-12-10 07:22:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:22:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$page' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/views/index.php [ 20 ] in file:line
2014-12-10 07:22:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:26:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$page' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/views/index.php [ 20 ] in file:line
2014-12-10 07:26:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:43:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: numberOfArticles ~ APPPATH/views/index.php [ 23 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:23
2014-12-10 07:43:11 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 23, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(25): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:23
2014-12-10 07:44:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: numberOfProducts ~ APPPATH/views/index.php [ 23 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:23
2014-12-10 07:44:01 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 23, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(25): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:23
2014-12-10 07:44:30 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/views/index.php [ 23 ] in file:line
2014-12-10 07:44:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:45:01 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/views/index.php [ 23 ] in file:line
2014-12-10 07:45:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:45:24 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/views/index.php [ 23 ] in file:line
2014-12-10 07:45:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:47:06 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/Controller/Welcome.php [ 20 ] in file:line
2014-12-10 07:47:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 07:50:12 --- EMERGENCY: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH/classes/Controller/Welcome.php [ 21 ] in file:line
2014-12-10 07:50:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 08:04:30 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT(*) from products WHERE visible=1' at line 1 ~ APPPATH/classes/Helper/Database.php [ 20 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:20
2014-12-10 08:04:30 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(20): PDOStatement->execute(Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/Product.php(21): Helper_Database->query('COUNT(*) from p...')
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(18): Model_Product->numberOfProducts()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:20
2014-12-10 08:04:34 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT(*) from products WHERE visible=1' at line 1 ~ APPPATH/classes/Helper/Database.php [ 20 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:20
2014-12-10 08:04:34 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(20): PDOStatement->execute(Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/Product.php(21): Helper_Database->query('COUNT(*) from p...')
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(18): Model_Product->numberOfProducts()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:20
2014-12-10 09:54:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Product.php [ 191 ] in file:line
2014-12-10 09:54:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-10 10:24:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/index.php [ 9 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:9
2014-12-10 10:24:59 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/index.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 9, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(27): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:9
2014-12-10 10:29:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message ~ APPPATH/views/index.php [ 7 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:7
2014-12-10 10:29:46 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/index.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 7, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(27): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:7
2014-12-10 10:30:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message ~ APPPATH/views/index.php [ 7 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:7
2014-12-10 10:30:03 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/index.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 7, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(27): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/index.php:7