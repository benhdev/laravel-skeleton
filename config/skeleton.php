<?php

use Skeleton\Skeleton;

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" for your application.
    |
    | You may change these defaults as required, however be aware this setting
    | will override the defaults configuration within config/auth.php
    |
    |
    */

    'defaults' => [
        'guard' => 'skeleton',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Custom authentication guard mappings for the application
    |
    | To create a new guard you can run
    | php artisan make:guard ExampleGuard
    |
    | You can then use this guard in route definitions
    | using the guard name as below
    |
    | Route::middleware('auth:custom')
    |
    */

    'guards' => [

        'skeleton' => [
            'driver' => \Skeleton\Guards\SkeletonGuard::class,
            'provider' => 'users'
        ],

        // 'custom' => [
        //     'driver' => \App\Guards\ExampleGuard::class,
        //     'provider' => 'users'
        // ],

    ],

];
