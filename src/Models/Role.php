<?php

namespace QuetzalStudio\OAuthClient\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    public function __construct(array $attributes = [])
    {
        $this->connection = config('client.permission.database_connection');
        $this->table = $this->getConnection()->getDatabaseName().'.'.$this->getTable();

        parent::__construct($attributes);
    }
}
