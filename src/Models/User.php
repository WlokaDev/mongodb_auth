<?php

namespace Wlokadev\MongoDBAuth\Models;

use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Wlokadev\MongoDBAuth\Traits\HasApiTokensTrait;

class User extends Authenticatable
{
    use HasApiTokensTrait;

    public function setConnection($name): User
    {
        return parent::setConnection(
            config('mongodb_auth.connection_name')
        );
    }
}
