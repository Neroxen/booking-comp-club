<?php

namespace App\Http\Controllers;

use App\Services\MenuService;
use DigitalStar\vk_api\vk_api as vk;
use Illuminate\Http\Request;

class VKBotController extends Controller
{
    public array $buttons = [];

    public function handle(Request $request)
    {
        $token = env('VK_ACCESS_TOKEN');
        $version = env('VK_VERSION');
        $secret = env('VK_SECRET');
        $confirm = env('VK_CONFIRM');

        // Создаем объект и вызываем метод для отправки сообщения
        $vk = vk::create($token, $version)->setConfirm($confirm);
        $vk->debug();
        $vk->initVars($id, $message, $payload, $user_id, $type, $data, $event_id);

        //Формирование массива для передачи данных в сервисы
        $data = [
            'id' => $id,
            'message' => $message,
            'payload' => $payload,
            'user_id' => $user_id,
            'type' => $type,
            'data' => $data,
            'event_id' => $event_id,
        ];

        //Проверяем наличие данных в кнопке
        if($payload == null) {
            $text1 = $vk->buttonText('Главное меню', 'red', ['service' => 'StartService']);
            $vk->sendButton($id, '123',[[$text1]]);
        }
        else {
            $service = $payload['service'];
            // Если метод не указан, вызываем Index
            isset($payload['method']) ? $method = $payload['method'] : $method = 'index';

            // Проверяем существование обработчика для данной команды
            if (class_exists('App\Services\\' . $service)) {

                // Создаем экземпляр обработчика и вызываем его метод handle
                $handler = app()->make('bot.handler', ['service' => $service]);

                // Вызов метода и сборка клавиатуры
                $buttons = $handler->$method($vk, $data);
                $menu = new MenuService();
                $keyboard = $menu->handleMenuItem($vk, config('menu'), $buttons, $service);
                $vk->sendButton($id, 'Выберите пункт меню:', $keyboard);
            }
            else {
                $btn = $vk->buttonText('Главное меню', 'red', ['service' => 'StartService']);
                $vk->sendButton($id, 'Данный раздел находится в разработке!',[[$btn]]);
            }
        }
        if ($type == 'message_event') {
            $vk->eventAnswer($id, $event_id);
        }
    }
}
