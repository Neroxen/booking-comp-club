<?php

namespace App\Http\Middleware;

use Closure;

class VKMessageTypeMiddleware
{
    public function handle($request, Closure $next)
    {
//        // Получаем данные из запроса
//        $data = json_decode($request->getContent(), true);
//
//        // Проверяем тип сообщения
//        if (!isset($data['type'])) {
//            return response('Invalid message type', 400);
//        }
//
//        // Если тип сообщения - confirmation, возвращаем ответ с confirmation code
//        if ($data['type'] === 'confirmation') {
//            return response(env('VK_CONFIRM_STR'));
//        }
//
//        // Если тип сообщения - не message_new, возвращаем ошибку
//        if ($data['type'] !== 'message_new') {
//            return response('Invalid message type', 400);
//        }

        // Если тип сообщения корректный, передаем управление дальше
        return $next($request);
    }
}
