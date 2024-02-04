<?php http_response_code(404);exit("404");?>
LOGS:

[Exception] 02.02.24 19:10:22
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: invalid session.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [random_id] => 0
            [message] => Твои кнопки:
            [keyboard] => {"one_time":false,"buttons":[[{"action":{"type":"callback","payload":"{\"command\":\"btn_callback\"}","label":"Callback-кнопка"},"color":"positive"},{"action":{"type":"vkpay","hash":"action=transfer-to-user&user_id=294485732&aid=1"}}],[{"action":{"type":"location"}}],[{"action":{"type":"open_link","link":"https:\/\/kotoff.net","label":"Перейти"}}]],"inline":false}
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\BaseConstructor.php(196): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\Message.php(290): DigitalStars\SimpleVK\BaseConstructor->request()
#3 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(48): DigitalStars\SimpleVK\Message->send()
#4 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(26): App\Providers\VKMessageHandlerService->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#46 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#47 {main}

[Exception] 02.02.24 19:10:57
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [random_id] => 0
            [message] => Твои кнопки:
            [keyboard] => {"one_time":false,"buttons":[[{"action":{"type":"callback","payload":"{\"command\":\"btn_callback\"}","label":"Callback-кнопка"},"color":"positive"},{"action":{"type":"vkpay","hash":"action=transfer-to-user&user_id=294485732&aid=1"}}],[{"action":{"type":"location"}}],[{"action":{"type":"open_link","link":"https:\/\/kotoff.net","label":"Перейти"}}]],"inline":false}
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\BaseConstructor.php(196): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\Message.php(290): DigitalStars\SimpleVK\BaseConstructor->request()
#3 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(47): DigitalStars\SimpleVK\Message->send()
#4 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(26): App\Providers\VKMessageHandlerService->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#46 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#47 {main}

[Exception] 02.02.24 19:11:06
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [random_id] => 0
            [message] => Твои кнопки:
            [keyboard] => {"one_time":false,"buttons":[[{"action":{"type":"callback","payload":"{\"command\":\"btn_callback\"}","label":"Callback-кнопка"},"color":"positive"}],[{"action":{"type":"vkpay","hash":"action=transfer-to-user&user_id=294485732&aid=1"}}],[{"action":{"type":"location"}}],[{"action":{"type":"open_link","link":"https:\/\/kotoff.net","label":"Перейти"}}]],"inline":false}
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\BaseConstructor.php(196): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\Message.php(290): DigitalStars\SimpleVK\BaseConstructor->request()
#3 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(47): DigitalStars\SimpleVK\Message->send()
#4 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(26): App\Providers\VKMessageHandlerService->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#46 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#47 {main}

[Exception] 02.02.24 19:12:30
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [random_id] => 0
            [message] => Твои кнопки:
            [keyboard] => {"one_time":false,"buttons":[[{"action":{"type":"callback","payload":"{\"command\":\"btn_callback\"}","label":"Callback-кнопка"},"color":"positive"}],[{"action":{"type":"vkpay","hash":"action=transfer-to-user&user_id=294485732&aid=1"}}],[{"action":{"type":"location"}}],[{"action":{"type":"open_link","link":"https:\/\/kotoff.net","label":"Перейти"}}]],"inline":false}
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\BaseConstructor.php(196): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\Message.php(290): DigitalStars\SimpleVK\BaseConstructor->request()
#3 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(47): DigitalStars\SimpleVK\Message->send()
#4 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#46 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#47 {main}

[Exception] 02.02.24 19:12:57
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [random_id] => 0
            [message] => Твои кнопки:
            [keyboard] => {"one_time":false,"buttons":[[{"action":{"type":"callback","payload":"{\"command\":\"btn_callback\"}","label":"Callback-кнопка"},"color":"positive"}],[{"action":{"type":"vkpay","hash":"action=transfer-to-user&user_id=294485732&aid=1"}}],[{"action":{"type":"location"}}],[{"action":{"type":"open_link","link":"https:\/\/kotoff.net","label":"Перейти"}}]],"inline":false}
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\BaseConstructor.php(196): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\Message.php(290): DigitalStars\SimpleVK\BaseConstructor->request()
#3 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(47): DigitalStars\SimpleVK\Message->send()
#4 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#46 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#47 {main}

[Exception] 02.02.24 19:13:26
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 123
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#45 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#46 {main}

[Exception] 02.02.24 19:13:55
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 123
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#45 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#46 {main}

[Exception] 02.02.24 19:14:01
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 123
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#45 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#46 {main}

[Exception] 02.02.24 19:14:51
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:14:51
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [message] => E_WARNING[2] Trying to access array offset on value of type bool (C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php на 645 строке)
            [random_id] => 0
            [dont_parse_links] => 1
            [peer_ids] => 626553603
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\ErrorHandler.php(35): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(645): DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:15:15
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:15:15
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [message] => E_WARNING[2] Trying to access array offset on value of type bool (C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php на 645 строке)
            [random_id] => 0
            [dont_parse_links] => 1
            [peer_ids] => 626553603
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\ErrorHandler.php(35): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(645): DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:15:49
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:15:52
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [event_id] => bfded9067f3f
            [user_id] => 626553603
            [peer_id] => 626553603
            [event_data] => {"type":"show_snackbar","text":"\u041f\u0440\u0438\u0432\u0435\u0442!"}
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(332): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(55): DigitalStars\SimpleVK\SimpleVK->eventAnswerSnackbar()
#3 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#45 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#46 {main}

[Exception] 02.02.24 19:16:38
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:16:52
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:16:55
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(46): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:18:41
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(13): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:19:02
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(13): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:19:25
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(13): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:23:59
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(13): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:24:24
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 626553603
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(13): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#45 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#46 {main}

[Exception] 02.02.24 19:27:01
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 626553603
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(14): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#45 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#46 {main}

[Exception] 02.02.24 19:27:16
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 626553603
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(14): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#45 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#46 {main}

[Exception] 02.02.24 19:27:35
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 4519536
            [message] => 4519536
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(14): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#45 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#46 {main}

[Exception] 02.02.24 19:27:44
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 4519536
            [message] => 4519536
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(14): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#45 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#46 {main}

[Exception] 02.02.24 19:27:54
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 4519536
            [message] => 4519536
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(14): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#45 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#46 {main}

[Exception] 02.02.24 19:36:28
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Providers\VKMessageHandlerService.php(14): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(27): App\Providers\VKMessageHandlerService->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#49 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#50 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#51 {main}

[Exception] 02.02.24 19:36:48
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(22): DigitalStars\SimpleVK\SimpleVK->reply()
#8 [internal function]: App\Http\Controllers\VKBotController->__construct()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Container\Container.php(952): ReflectionClass->newInstanceArgs()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Container\Container.php(795): Illuminate\Container\Container->build()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Application.php(957): Illuminate\Container\Container->resolve()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Container\Container.php(731): Illuminate\Foundation\Application->resolve()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Application.php(942): Illuminate\Container\Container->make()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(278): Illuminate\Foundation\Application->make()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(1104): Illuminate\Routing\Route->getController()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(1035): Illuminate\Routing\Route->controllerMiddleware()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(818): Illuminate\Routing\Route->gatherMiddleware()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(800): Illuminate\Routing\Router->gatherRouteMiddleware()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#41 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#42 {main}

[Exception] 02.02.24 19:36:51
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(22): DigitalStars\SimpleVK\SimpleVK->reply()
#8 [internal function]: App\Http\Controllers\VKBotController->__construct()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Container\Container.php(952): ReflectionClass->newInstanceArgs()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Container\Container.php(795): Illuminate\Container\Container->build()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Application.php(957): Illuminate\Container\Container->resolve()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Container\Container.php(731): Illuminate\Foundation\Application->resolve()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Application.php(942): Illuminate\Container\Container->make()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(278): Illuminate\Foundation\Application->make()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(1104): Illuminate\Routing\Route->getController()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(1035): Illuminate\Routing\Route->controllerMiddleware()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(818): Illuminate\Routing\Route->gatherMiddleware()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(800): Illuminate\Routing\Router->gatherRouteMiddleware()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#41 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#42 {main}

[Exception] 02.02.24 19:38:51
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(21): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#49 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#50 {main}

[Exception] 02.02.24 19:40:13
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [user_ids] => 626553603
            [fields] => 
            [name_case] => nom
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(449): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(644): DigitalStars\SimpleVK\SimpleVK->userInfo()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(24): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#49 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#50 {main}

[Exception] 02.02.24 19:40:13
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [message] => E_WARNING[2] Trying to access array offset on value of type bool (C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php на 645 строке)
            [random_id] => 0
            [dont_parse_links] => 1
            [peer_ids] => 626553603
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\ErrorHandler.php(35): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(645): DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#3 [internal function]: DigitalStars\SimpleVK\SimpleVK->DigitalStars\SimpleVK\{closure}()
#4 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(631): preg_replace_callback()
#5 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(585): DigitalStars\SimpleVK\SimpleVK->placeholders()
#6 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#7 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(24): DigitalStars\SimpleVK\SimpleVK->reply()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#44 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#45 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#46 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#47 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#48 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#49 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#50 {main}

[Exception] 02.02.24 19:45:01
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 123
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(21): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#44 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#45 {main}

[Exception] 02.02.24 19:45:26
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 123
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(21): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#44 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#45 {main}

[Exception] 02.02.24 19:45:54
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 123
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(21): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#44 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#45 {main}

[Exception] 02.02.24 19:47:17
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 123
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(21): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#44 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#45 {main}

[Exception] 02.02.24 19:47:31
CODE: 27
MESSAGE: Array
(
    [error_code] => 27
    [error_msg] => Group authorization failed: group revoke access for this token.
    [request_params] => Array
        (
            [peer_id] => 626553603
            [message] => 123
            [random_id] => 0
            [v] => 5.199
        )

)


in: C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php:754
Stack trace:
#0 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(595): DigitalStars\SimpleVK\SimpleVK->request_core()
#1 C:\OSPanel\domains\vk-bot\vendor\digitalstars\simplevk\src\SimpleVK.php(96): DigitalStars\SimpleVK\SimpleVK->request()
#2 C:\OSPanel\domains\vk-bot\app\Http\Controllers\VKBotController.php(21): DigitalStars\SimpleVK\SimpleVK->reply()
#3 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Controller.php(54): App\Http\Controllers\VKBotController->handle()
#4 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\ControllerDispatcher.php(43): Illuminate\Routing\Controller->callAction()
#5 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(260): Illuminate\Routing\ControllerDispatcher->dispatch()
#6 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Route.php(205): Illuminate\Routing\Route->runController()
#7 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(806): Illuminate\Routing\Route->run()
#8 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Routing\Router->Illuminate\Routing\{closure}()
#9 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Middleware\SubstituteBindings.php(50): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#10 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Routing\Middleware\SubstituteBindings->handle()
#11 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\View\Middleware\ShareErrorsFromSession.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#12 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\View\Middleware\ShareErrorsFromSession->handle()
#13 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(121): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#14 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Session\Middleware\StartSession.php(64): Illuminate\Session\Middleware\StartSession->handleStatefulRequest()
#15 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Session\Middleware\StartSession->handle()
#16 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse.php(37): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#17 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse->handle()
#18 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Cookie\Middleware\EncryptCookies.php(67): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#19 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Cookie\Middleware\EncryptCookies->handle()
#20 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#21 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(807): Illuminate\Pipeline\Pipeline->then()
#22 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(784): Illuminate\Routing\Router->runRouteWithinStack()
#23 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(748): Illuminate\Routing\Router->runRoute()
#24 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Routing\Router.php(737): Illuminate\Routing\Router->dispatchToRoute()
#25 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(200): Illuminate\Routing\Router->dispatch()
#26 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(144): Illuminate\Foundation\Http\Kernel->Illuminate\Foundation\Http\{closure}()
#27 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#28 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull.php(31): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#29 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull->handle()
#30 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TransformsRequest.php(21): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#31 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\TrimStrings.php(40): Illuminate\Foundation\Http\Middleware\TransformsRequest->handle()
#32 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\TrimStrings->handle()
#33 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\ValidatePostSize.php(27): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#34 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\ValidatePostSize->handle()
#35 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance.php(99): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#36 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance->handle()
#37 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\HandleCors.php(49): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#38 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\HandleCors->handle()
#39 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Http\Middleware\TrustProxies.php(39): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#40 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(183): Illuminate\Http\Middleware\TrustProxies->handle()
#41 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Pipeline\Pipeline.php(119): Illuminate\Pipeline\Pipeline->Illuminate\Pipeline\{closure}()
#42 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(175): Illuminate\Pipeline\Pipeline->then()
#43 C:\OSPanel\domains\vk-bot\vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php(144): Illuminate\Foundation\Http\Kernel->sendRequestThroughRouter()
#44 C:\OSPanel\domains\vk-bot\public\index.php(52): Illuminate\Foundation\Http\Kernel->handle()
#45 {main}

