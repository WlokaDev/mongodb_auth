<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'connections' => [
        'mongodb_auth' => [
            'driver' => 'mongodb',
            'host' => env('MONGO_DB_HOST', '127.0.0.1'),
            'port' => env('MONGO_DB_PORT', 27017),
            'database' => env('MONGO_DB_DATABASE', 'homestead'),
            'username' => env('MONGO_DB_USERNAME', 'homestead'),
            'password' => env('MONGO_DB_PASSWORD', 'secret'),
            'options' => [
                // here you can pass more settings to the Mongo Driver Manager
                // see https://www.php.net/manual/en/mongodb-driver-manager.construct.php under "Uri Options" for a list of complete parameters that you can use

                'database' => env('DB_AUTHENTICATION_DATABASE', 'admin'), // required with Mongo 3+
            ],
        ]
    ]
];
