<?php

return [
    'database' => [
        'connection' => env('CLIENT_DB_CONNECTION', 'mysql_client'),
    ],

    'classes' => [
        'client' => null,
        'token' => null,
    ],

    'permission' => [
        'database' => ['
            connection' => env('CLIENT_PERMISSION_DB_CONNECTION', 'mysql_client'),
        ],
        'guard' => env('CLIENT_PERMISSION_GUARD', 'client_owner'),
    ],
];
