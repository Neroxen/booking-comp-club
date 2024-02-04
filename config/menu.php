<?php

return [
    [
        'service' => 'StartService',
        'items' => [
            [
                'service' => 'ProfileService',
                'items' => [
                    [
                        'service' => 'TeamService',
                        'items' => '',
                    ],
                    [
                        'service' => 'StatService',
                        'items' => '',
                    ],
                    [
                        'service' => 'GameAccountService',
                        'items' => [
                            [
                                'service' => 'SteamService',
                                'items' => ''
                            ]
                        ],
                    ],
                ]
            ],
            [
                'service' => 'ladders',
            ],
            [
                'service' => 'tournaments',
            ],
        ]
    ]
];
