<?php

namespace Wlokadev\MongoDBAuth\Models;

use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Wlokadev\MongoDBAuth\Traits\HasApiTokensTrait;

class User extends Authenticatable
{
    use HasApiTokensTrait;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->connection = config('mongodb_auth.connection_name');
    }
}
