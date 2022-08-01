<?php

namespace Wlokadev\MongoDBAuth\Models;

use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Wlokadev\MongoDBAuth\Traits\HasApiTokensTrait;

class User extends Authenticatable
{
    use HasApiTokensTrait;

    protected $connection = 'mongodb_auth';
}
