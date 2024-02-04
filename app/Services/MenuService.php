<?php

namespace App\Services;

class MenuService
{
    public function handleMenuItem($vk, $menu, $buttons, $service)
    {

        if ($service !== 'StartService') {
            foreach ($menu as $button) {
                $prevItem = $button['service'];

                if ($button['service'] == $service) {
                    return $button['service'];
                }

                // Если есть подменю, рекурсивно ищем в них
                if (!empty($button['items'])) {

                    $foundButton = $this->handleMenuItem($vk, $button['items'], $buttons, $service);
                    if ($foundButton != null) {
                        $prev = $vk->buttonText('Назад', 'white', ['service' => $prevItem]);
                        $main = $vk->buttonText('Главное меню', 'red', ['service' => 'StartService']);
                        array_push($buttons, [$prev, $main]);
                    }
                }
            }
        }
        return $buttons;
    }
}
