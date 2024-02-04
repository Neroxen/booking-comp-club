<?php

namespace App\Services;

class ProfileService
{
    public function index($vk, $data)
    {
        $buttons = [
            [$vk->buttonText('Команды', 'blue', ['service' => 'TeamService'])],
            [$vk->buttonText('Статистика', 'blue', ['service' => 'StatService'])],
            [$vk->buttonText('Игровые аккаунты', 'blue', ['service' => 'GameAccountService'])],
        ];

        return $buttons;
    }
}
