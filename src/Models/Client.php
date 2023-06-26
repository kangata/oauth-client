<?php

namespace QuetzalStudio\OAuthClient\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Laravel\Passport\Client as PassportClient;

class Client extends PassportClient
{
    public function __construct(array $attributes = [])
    {
        $this->connection = config('client.database.connection');
        $this->table = $this->getConnection()->getDatabaseName().'.'.$this->table;

        parent::__construct($attributes);
    }

    public function owner(): MorphTo
    {
        return $this->morphTo('user', 'user_type', 'user_id');
    }
}
