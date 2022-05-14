<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Custom auth guard mappings for the application
     *
     * To create a new guard you can run
     * php artisan make:guard ExampleGuard
     *
     * The keys in this property belong to the 'driver'
     * key within the guards property in config/auth.php
     *
     * You can then use this guard in route definitions
     * using the guard name as below
     *
     * Route::middleware('auth:custom')
     */
    protected $guards = [
        // 'example' => 'App\Guards\ExampleGuard',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerGuards();
    }

    protected function registerGuards()
    {
        foreach ($this->guards as $guard => $driver) {
            $this->app->auth->extend($guard, function ($app, $name, Array $config) use($driver) {
                return new $driver (
                    $app->auth->createUserProvider($config['provider']), $app->request
                );
            });
        }

        /**
         * set the default guard used by the 'auth' middleware
         */

        // $this->app->auth->shouldUse('example');
    }
}
