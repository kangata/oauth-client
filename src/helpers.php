<?php

use Spatie\Permission\PermissionRegistrar;

if (! function_exists('get_permissions')) {
    function get_permissions()
    {
        return app(PermissionRegistrar::class)->getPermissions();
    }
}
