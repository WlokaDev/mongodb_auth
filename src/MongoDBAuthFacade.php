<?php

namespace Wlokadev\MongoDBAuth;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wlokadev\MongoDBAuth\Skeleton\SkeletonClass
 */
class MongoDBAuthFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mongodbauth';
    }
}
