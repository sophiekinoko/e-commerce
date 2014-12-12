<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-11 03:24:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH/views/index.php [ 17 ] in file:line
2014-12-11 03:24:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-11 03:55:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function view_price() ~ APPPATH/views/index.php [ 21 ] in file:line
2014-12-11 03:55:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-11 03:55:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Welcome.php [ 17 ] in file:line
2014-12-11 03:55:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-11 06:04:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH/views/address.php [ 36 ] in file:line
2014-12-11 06:04:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-11 09:31:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/Ajaxcart.php [ 17 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php:17
2014-12-11 09:31:50 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 17, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php:17
2014-12-11 09:32:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: cart ~ APPPATH/classes/Controller/Ajaxcart.php [ 25 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php:25
2014-12-11 09:32:12 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php(25): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 25, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php:25
2014-12-11 09:34:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: quantity ~ APPPATH/classes/Controller/Ajaxcart.php [ 26 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php:26
2014-12-11 09:34:27 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 26, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php:26
2014-12-11 09:36:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: quantity ~ APPPATH/classes/Controller/Ajaxcart.php [ 35 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php:35
2014-12-11 09:36:02 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 35, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Ajaxcart->action_sup()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajaxcart))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Ajaxcart.php:35
2014-12-11 09:59:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/cart.php [ 79 ] in file:line
2014-12-11 09:59:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-11 10:00:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/cart.php [ 87 ] in file:line
2014-12-11 10:00:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-11 10:02:21 --- EMERGENCY: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH/views/cart.php [ 24 ] in file:line
2014-12-11 10:02:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', '/home/wap29/sit...', 24, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(24): array_push(NULL, 50)
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(94): Kohana_Response->body(Object(View))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-11 10:03:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE), expecting ',' or ';' ~ APPPATH/views/cart.php [ 38 ] in file:line
2014-12-11 10:03:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-11 10:04:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/cart.php [ 38 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:38
2014-12-11 10:04:28 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 38, Array)
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
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:38