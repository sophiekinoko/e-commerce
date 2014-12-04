<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-03 02:34:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: listOfProducts ~ APPPATH/views/cart.php [ 24 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:24
2014-12-03 02:34:52 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 24, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(200): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:24
2014-12-03 02:35:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: listOfProducts ~ APPPATH/views/cart.php [ 24 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:24
2014-12-03 02:35:18 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 24, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(200): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:24
2014-12-03 02:43:28 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH/views/cart.php [ 25 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:25
2014-12-03 02:43:28 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(25): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/wap29/sit...', 25, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(205): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:25
2014-12-03 02:44:20 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'name' ~ APPPATH/views/cart.php [ 25 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:25
2014-12-03 02:44:20 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(25): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/wap29/sit...', 25, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(205): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:25
2014-12-03 03:33:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/views/cart.php [ 38 ] in file:line
2014-12-03 03:33:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 03:38:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/cart.php [ 38 ] in file:line
2014-12-03 03:38:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 03:43:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?' ~ APPPATH/views/cart.php [ 47 ] in file:line
2014-12-03 03:43:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 03:49:56 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 183 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:183
2014-12-03 03:49:56 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(183): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/wap29/sit...', 183, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_addtocart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:183
2014-12-03 03:50:08 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 183 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:183
2014-12-03 03:50:08 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(183): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/wap29/sit...', 183, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_addtocart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:183
2014-12-03 03:50:57 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 183 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:183
2014-12-03 03:50:57 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(183): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/wap29/sit...', 183, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_addtocart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:183
2014-12-03 03:51:02 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/User.php [ 183 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:183
2014-12-03 03:51:02 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(183): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/wap29/sit...', 183, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_addtocart()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php:183
2014-12-03 03:59:10 --- EMERGENCY: ErrorException [ 2 ]: Division by zero ~ APPPATH/views/cart.php [ 49 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:49
2014-12-03 03:59:10 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(49): Kohana_Core::error_handler(2, 'Division by zer...', '/home/wap29/sit...', 49, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/User.php(207): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_User->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:49
2014-12-03 04:01:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''.URL::site('' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH/views/cart.php [ 46 ] in file:line
2014-12-03 04:01:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 04:01:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''            ' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/views/cart.php [ 46 ] in file:line
2014-12-03 04:01:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 04:02:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/cart.php [ 51 ] in file:line
2014-12-03 04:02:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 04:02:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/cart.php [ 51 ] in file:line
2014-12-03 04:02:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 04:42:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/cart.php [ 35 ] in file:line
2014-12-03 04:42:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 04:43:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/views/cart.php [ 58 ] in file:line
2014-12-03 04:43:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 05:13:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: listOfProducts ~ APPPATH/views/cart.php [ 36 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:13:13 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 36, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(84): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_remove_article()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:14:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: product ~ APPPATH/classes/Controller/Product.php [ 83 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:83
2014-12-03 05:14:29 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 83, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_remove_article()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:83
2014-12-03 05:14:44 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Product.php [ 84 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:84
2014-12-03 05:14:44 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(84): Kohana_Core::error_handler(2, 'Creating defaul...', '/home/wap29/sit...', 84, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_remove_article()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:84
2014-12-03 05:17:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: imgPath ~ APPPATH/views/cart.php [ 36 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:17:09 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 36, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(89): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_remove_article()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:21:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 10 ~ APPPATH/views/cart.php [ 36 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:21:28 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(36): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 36, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(72): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:21:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 10 ~ APPPATH/views/cart.php [ 36 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:21:34 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(36): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 36, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(72): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:21:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 10 ~ APPPATH/views/cart.php [ 36 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:21:39 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(36): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 36, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(72): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:21:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 10 ~ APPPATH/views/cart.php [ 36 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:21:42 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(36): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 36, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(72): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:21:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 10 ~ APPPATH/views/cart.php [ 36 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:21:58 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(36): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 36, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(72): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:40:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: toDelete ~ APPPATH/classes/Controller/Product.php [ 95 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:95
2014-12-03 05:40:35 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(95): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 95, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_remove_article()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php:95
2014-12-03 05:43:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: product-1 ~ APPPATH/views/cart.php [ 36 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:43:25 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(36): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 36, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(74): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:36
2014-12-03 05:44:53 --- EMERGENCY: ErrorException [ 2 ]: str_replace() expects at least 3 parameters, 2 given ~ APPPATH/views/cart.php [ 35 ] in file:line
2014-12-03 05:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'str_replace() e...', '/home/wap29/sit...', 35, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(35): str_replace('product-', '')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(74): Kohana_Response->body(Object(View))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-03 05:53:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: img ~ APPPATH/views/cart.php [ 39 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:39
2014-12-03 05:53:00 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(39): Kohana_Core::error_handler(8, 'Undefined index...', '/home/wap29/sit...', 39, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(74): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php:39
2014-12-03 07:18:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/view.php [ 22 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:22
2014-12-03 07:18:24 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/view.php(22): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 22, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(28): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_view()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:22
2014-12-03 07:19:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/view.php [ 22 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:22
2014-12-03 07:19:14 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/view.php(22): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 22, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(28): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_view()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:22
2014-12-03 07:19:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/view.php [ 22 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:22
2014-12-03 07:19:54 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/view.php(22): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 22, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(28): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_view()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:22
2014-12-03 07:21:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/view.php [ 22 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:22
2014-12-03 07:21:12 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/view.php(22): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 22, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(28): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_view()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:22
2014-12-03 07:21:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/view.php [ 25 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:25
2014-12-03 07:21:19 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/view.php(25): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 25, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(28): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_view()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:25
2014-12-03 07:21:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/view.php [ 25 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:25
2014-12-03 07:21:37 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/view.php(25): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 25, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(28): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_view()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:25
2014-12-03 07:21:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/views/view.php [ 27 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:27
2014-12-03 07:21:43 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/view.php(27): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/wap29/sit...', 27, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(28): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_view()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/view.php:27
2014-12-03 08:24:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function sum() ~ APPPATH/views/cart.php [ 50 ] in file:line
2014-12-03 08:24:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 08:24:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function sum() ~ APPPATH/views/cart.php [ 50 ] in file:line
2014-12-03 08:24:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 08:24:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function arry_sum() ~ APPPATH/views/cart.php [ 50 ] in file:line
2014-12-03 08:24:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 08:41:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH/views/cart.php [ 55 ] in file:line
2014-12-03 08:41:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 08:41:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/cart.php [ 55 ] in file:line
2014-12-03 08:41:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 08:41:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH/views/cart.php [ 55 ] in file:line
2014-12-03 08:41:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 08:45:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '€' (T_STRING), expecting ',' or ';' ~ APPPATH/views/cart.php [ 60 ] in file:line
2014-12-03 08:45:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 08:47:07 --- EMERGENCY: ErrorException [ 2 ]: array_sum() expects parameter 1 to be array, integer given ~ APPPATH/views/cart.php [ 55 ] in file:line
2014-12-03 08:47:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_sum() exp...', '/home/wap29/sit...', 55, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(55): array_sum(282)
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(74): Kohana_Response->body(Object(View))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-03 08:47:40 --- EMERGENCY: ErrorException [ 2 ]: array_sum() expects parameter 1 to be array, integer given ~ APPPATH/views/cart.php [ 55 ] in file:line
2014-12-03 08:47:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_sum() exp...', '/home/wap29/sit...', 55, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/application/views/cart.php(55): array_sum(282)
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Product.php(74): Kohana_Response->body(Object(View))
#7 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Product->action_cart()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-12-03 09:43:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Welcome.php [ 31 ] in file:line
2014-12-03 09:43:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 09:44:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/classes/Controller/Welcome.php [ 29 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:29
2014-12-03 09:44:09 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 29, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_category()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:29
2014-12-03 09:44:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: listOfProducts ~ APPPATH/views/category.php [ 24 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/category.php:24
2014-12-03 09:44:32 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/category.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 24, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(31): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_category()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/category.php:24
2014-12-03 09:48:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: listOfProducts ~ APPPATH/views/category.php [ 24 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/category.php:24
2014-12-03 09:48:08 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/category.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 24, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(31): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_category()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/category.php:24
2014-12-03 09:49:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH/classes/Controller/Welcome.php [ 29 ] in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:29
2014-12-03 09:49:04 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 29, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_category()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#7 {main} in /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php:29
2014-12-03 10:05:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/views/nav.php [ 16 ] in file:line
2014-12-03 10:05:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:07:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''>- ".$value["category"]."' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH/views/nav.php [ 16 ] in file:line
2014-12-03 10:07:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:08:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''"";' (T_ENCAPSED_AND_WHITESPACE) ~ APPPATH/views/nav.php [ 18 ] in file:line
2014-12-03 10:08:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:11:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'category' (T_STRING), expecting ',' or ';' ~ APPPATH/views/nav.php [ 19 ] in file:line
2014-12-03 10:11:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:11:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/views/nav.php [ 17 ] in file:line
2014-12-03 10:11:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:13:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting '(' ~ APPPATH/views/nav.php [ 19 ] in file:line
2014-12-03 10:13:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:14:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?>', expecting '(' ~ APPPATH/views/nav.php [ 19 ] in file:line
2014-12-03 10:14:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:15:04 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting '(' ~ APPPATH/views/nav.php [ 19 ] in file:line
2014-12-03 10:15:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-03 10:25:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/views/category.php [ 22 ] in /home/wap29/sites/PHP/18-ecommerce/application/views/category.php:22
2014-12-03 10:25:28 --- DEBUG: #0 /home/wap29/sites/PHP/18-ecommerce/application/views/category.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/wap29/sit...', 22, Array)
#1 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(61): include('/home/wap29/sit...')
#2 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/wap29/sit...', Array)
#3 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/wap29/sites/PHP/18-ecommerce/application/classes/Controller/Welcome.php(32): Kohana_Response->body(Object(View))
#6 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_category()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/wap29/sites/PHP/18-ecommerce/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /home/wap29/sites/PHP/18-ecommerce/index.php(118): Kohana_Request->execute()
#12 {main} in /home/wap29/sites/PHP/18-ecommerce/application/views/category.php:22