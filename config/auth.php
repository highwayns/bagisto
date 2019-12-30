<?php

return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'admins',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'api' => [
            'driver' => 'jwt',
            'provider' => 'customers',
        ],

        'customer' =>[
            'driver' => 'session',
            'provider' => 'customers'
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins'
        ],

        'vendoradmin' => [
            'driver' => 'session',
            'provider' => 'vendoradmins'
        ],

        'agentadmin' => [
            'driver' => 'session',
            'provider' => 'agentadmins'
        ],

        'admin-api' => [
            'driver' => 'token',
            'provider' => 'admins',
        ]
    ],

    'providers' => [
        'customers' => [
            'driver' => 'eloquent',
            'model' => Webkul\Customer\Models\Customer::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => Webkul\User\Models\Admin::class,
        ],
        'vendoradmins' => [
            'driver' => 'eloquent',
            'model' => Webkul\Vendor\Models\VendorSource::class,
        ],
        'agentadmins' => [
            'driver' => 'eloquent',
            'model' => Webkul\Agent\Models\AgentSource::class,
        ]
    ],

    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'admin_password_resets',
            'expire' => 60,
        ],
        'vendoradmins' => [
            'provider' => 'vendoradmins',
            'table' => 'vendor_password_resets',
            'expire' => 60,
        ],
        'agentadmins' => [
            'provider' => 'agentadmins',
            'table' => 'agent_password_resets',
            'expire' => 60,
        ],
        'customers' => [
            'provider' => 'customers',
            'table' => 'customer_password_resets',
            'expire' => 60,
        ],
    ],
];