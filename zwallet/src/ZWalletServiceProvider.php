<?php

namespace Zamena\ZWallet;

use Illuminate\Support\ServiceProvider;
use App;

class ZWalletServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/migrations' => base_path('database/migrations'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Zamena\ZWallet\controller\ZWalletController');
        App::bind('zwalletapi', function()
        {
            return new \Zamena\ZWallet\ZWalletApi;
        });
    }
}
