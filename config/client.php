<?php

return [
    'database' => [
        'connection' => env('OAUTH_CLIENT_DB_CONNECTION', 'mysql_client'),
    ],

    'permission' => [
        'guard' => env('OAUTH_CLEINT_PERMISSION_GUARD', 'client_owner'),
    ],
];
