<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-04 04:34:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '++' (T_INC), expecting ';' ~ APPPATH/views/cart.php [ 50 ] in file:line
2014-12-04 04:34:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 04:34:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ';' ~ APPPATH/views/cart.php [ 50 ] in file:line
2014-12-04 04:34:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 04:34:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: î ~ APPPATH/views/cart.php [ 51 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:34:54 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 51, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(75): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:39:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/cart.php [ 51 ] in file:line
2014-12-04 04:39:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 04:39:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/cart.php [ 51 ] in file:line
2014-12-04 04:39:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 04:39:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/cart.php [ 51 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:39:28 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 51, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(75): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:40:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/cart.php [ 51 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:40:15 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 51, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(75): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:45:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/cart.php [ 51 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:45:22 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 51, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(75): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:46:03 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/cart.php [ 51 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:46:03 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(51): Kohana_Core::error_handler(8, 'Array to string...', '/home/wap29/sit...', 51, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(75): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:50:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Product.php [ 51 ] in file:line
2014-12-04 04:50:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 04:50:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Product.php [ 53 ] in file:line
2014-12-04 04:50:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 04:50:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$numberOfProducts' (T_VARIABLE), expecting '(' ~ APPPATH/classes/Controller/Product.php [ 53 ] in file:line
2014-12-04 04:50:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 04:51:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: numberOfProducts ~ APPPATH/views/cart.php [ 51 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:51:36 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 51, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(83): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:58:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/cart.php [ 51 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 04:58:20 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 51, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(85): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:51
2014-12-04 05:32:13 --- EMERGENCY: ErrorException [ 2 ]: array_sum() expects parameter 1 to be array, integer given ~ APPPATH/views/cart.php [ 62 ] in file:line
2014-12-04 05:32:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_sum() exp...', '/home/wap29/sit...', 62, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(62): array_sum(72)
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(84): Kohana_Response->body(Object(View))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-04 05:32:18 --- EMERGENCY: ErrorException [ 2 ]: array_sum() expects parameter 1 to be array, integer given ~ APPPATH/views/cart.php [ 62 ] in file:line
2014-12-04 05:32:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_sum() exp...', '/home/wap29/sit...', 62, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(62): array_sum(72)
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(84): Kohana_Response->body(Object(View))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-04 05:32:19 --- EMERGENCY: ErrorException [ 2 ]: array_sum() expects parameter 1 to be array, integer given ~ APPPATH/views/cart.php [ 62 ] in file:line
2014-12-04 05:32:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_sum() exp...', '/home/wap29/sit...', 62, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(62): array_sum(72)
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(84): Kohana_Response->body(Object(View))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-04 05:34:02 --- EMERGENCY: ErrorException [ 2 ]: array_sum() expects parameter 1 to be array, integer given ~ APPPATH/views/cart.php [ 62 ] in file:line
2014-12-04 05:34:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_sum() exp...', '/home/wap29/sit...', 62, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(62): array_sum(49)
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(84): Kohana_Response->body(Object(View))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-04 06:11:48 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/cart.php [ 27 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:27
2014-12-04 06:11:48 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(27): Kohana_Core::error_handler(8, 'Array to string...', '/home/wap29/sit...', 27, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(84): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:27
2014-12-04 06:46:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/Product.php [ 112 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:112
2014-12-04 06:46:24 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(112): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 112, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:112
2014-12-04 06:58:36 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Product.php [ 112 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:112
2014-12-04 06:58:36 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(112): Kohana_Core::error_handler(8, 'Array to string...', '/home/wap29/sit...', 112, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:112
2014-12-04 07:01:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ']' ~ APPPATH/classes/Controller/Product.php [ 112 ] in file:line
2014-12-04 07:01:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 07:01:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: product-1 ~ APPPATH/classes/Controller/Product.php [ 112 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:112
2014-12-04 07:01:43 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(112): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 112, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:112
2014-12-04 07:32:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: product-3 ~ APPPATH/classes/Controller/Product.php [ 91 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:91
2014-12-04 07:32:39 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(91): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 91, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:91
2014-12-04 07:41:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/views/cart.php [ 78 ] in file:line
2014-12-04 07:41:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 08:16:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/command.php [ 28 ] in file:line
2014-12-04 08:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 08:35:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function setCommand() ~ APPPATH/classes/Controller/Product.php [ 124 ] in file:line
2014-12-04 08:35:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 08:35:25 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''ok' INTO id FROM ids_command' at line 1 ~ APPPATH/classes/Helper/Database.php [ 34 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-04 08:35:25 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(34): PDOStatement->execute(Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/Product.php(34): Helper_Database->execute('INSERT 'ok' INT...')
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(124): Model_Product->setCommand()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_command()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-04 08:36:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'ok' (T_STRING) ~ APPPATH/classes/Model/Product.php [ 34 ] in file:line
2014-12-04 08:36:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 08:36:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'ok' (T_STRING) ~ APPPATH/classes/Model/Product.php [ 34 ] in file:line
2014-12-04 08:36:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 08:37:13 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM ids_command' at line 1 ~ APPPATH/classes/Helper/Database.php [ 34 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-04 08:37:13 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(34): PDOStatement->execute(Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/Product.php(34): Helper_Database->execute('INSERT INTO pre...')
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(124): Model_Product->setCommand('ok')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_command()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-04 08:37:19 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM ids_command' at line 1 ~ APPPATH/classes/Helper/Database.php [ 34 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-04 08:37:19 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(34): PDOStatement->execute(Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/Product.php(34): Helper_Database->execute('INSERT INTO pre...')
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(124): Model_Product->setCommand('ok')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_command()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-04 08:37:59 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ids_command' at line 1 ~ APPPATH/classes/Helper/Database.php [ 34 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-04 08:37:59 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(34): PDOStatement->execute(Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/Product.php(34): Helper_Database->execute('INSERT INTO pre...')
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(124): Model_Product->setCommand('ok')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_command()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-04 08:40:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'ok' (T_STRING) ~ APPPATH/classes/Model/Product.php [ 34 ] in file:line
2014-12-04 08:40:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 08:40:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'ok' (T_STRING) ~ APPPATH/classes/Model/Product.php [ 34 ] in file:line
2014-12-04 08:40:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 08:41:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'ok' (T_STRING) ~ APPPATH/classes/Model/Product.php [ 34 ] in file:line
2014-12-04 08:41:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 08:44:53 --- EMERGENCY: PDOException [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''pretext') VALUES ('ok')' at line 1 ~ APPPATH/classes/Helper/Database.php [ 34 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-04 08:44:53 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php(34): PDOStatement->execute(Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/classes/Model/Product.php(34): Helper_Database->execute('INSERT INTO ids...')
#2 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(124): Model_Product->setCommand()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_command()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#9 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Helper/Database.php:34
2014-12-04 09:12:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH/classes/Controller/Product.php [ 131 ] in file:line
2014-12-04 09:12:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 09:12:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH/classes/Controller/Product.php [ 131 ] in file:line
2014-12-04 09:12:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 09:13:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH/classes/Controller/Product.php [ 131 ] in file:line
2014-12-04 09:13:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 09:14:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Product.php [ 133 ] in file:line
2014-12-04 09:14:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-04 09:16:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: product- ~ APPPATH/classes/Controller/Product.php [ 128 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:128
2014-12-04 09:16:58 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(128): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 128, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_command()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:128
2014-12-04 09:46:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: product- ~ APPPATH/views/cart.php [ 41 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:41
2014-12-04 09:46:46 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 41, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(94): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:41