<?php

namespace App\Services;

class StartService
{
    public function index($vk, $data)
    {
        $buttons = [
            [$vk->buttonText('Профиль', 'blue', ['service' => 'ProfileService'])],
            [$vk->buttonText('Ладдеры', 'blue', ['service' => 'ladders'])],
            [$vk->buttonText('Турниры', 'blue', ['service' => 'tournaments'])],
        ];
        return $buttons;
    }
}
