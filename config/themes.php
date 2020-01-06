<?php

return [
    'default' => 'default',

    'themes' => [
        'default' => [
            'views_path' => 'resources/themes/default/views',
            'assets_path' => 'public/themes/default/assets',
            'name' => 'Default'
        ],
        'vendor' => [
            'views_path' => 'resources/themes/vendor/views',
            'assets_path' => 'public/themes/vendor/assets',
            'name' => 'vendor',
            'parent' => 'default'
        ],
        'agent' => [
            'views_path' => 'resources/themes/agent/views',
            'assets_path' => 'public/themes/agent/assets',
            'name' => 'agent',
            'parent' => 'default'
        ]

        // 'bliss' => [
        //     'views_path' => 'resources/themes/bliss/views',
        //     'assets_path' => 'public/themes/bliss/assets',
        //     'name' => 'Bliss',
        //     'parent' => 'default'
        // ]
    ]
];