<?php

namespace App\Providers;

use App\Base\OAuth\QQProvider;
use Illuminate\Support\ServiceProvider;

class OAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('Laravel\Socialite\Contracts\Factory')->extend('qq', function ($app) {
            $config = $app['config']['services.qq'];
            return new QQProvider(
                $app['request'],
                $config['client_id'],
                $config['client_secret'],
                $config['redirect']
            );
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
