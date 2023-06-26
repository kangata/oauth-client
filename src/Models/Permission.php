<?php

namespace QuetzalStudio\OAuthClient\Models;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    public function __construct(array $attributes = [])
    {
        $this->connection = config('client.database.connection');
        $this->table = $this->getConnection()->getDatabaseName().'.'.$this->getTable();

        parent::__construct($attributes);
    }
}
