<?php

namespace QuetzalStudio\OAuthClient\Models;

use Laravel\Passport\Token as PassportToken;

class Token extends PassportToken
{
    public function __construct(array $attributes = [])
    {
        $this->connection = config('client.database.connection');
        $this->table = $this->getConnection()->getDatabaseName().'.'.$this->table;

        parent::__construct($attributes);
    }
}
