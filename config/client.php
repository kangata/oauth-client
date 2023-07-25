<?php

return [
    'database' => [
        'connection' => env('OAUTH_CLIENT_DB_CONNECTION', 'mysql_client'),
    ],

    'permission' => [
        'database_connection' => env('CLIENT_PERMISSION_DB_CONNECTION', 'mysql_client'),
        'guard' => env('OAUTH_CLIENT_PERMISSION_GUARD', 'client_owner'),
    ],
];
