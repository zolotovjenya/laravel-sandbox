<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('\App\Classes\Payment\PaymentFactory', function ($app, $payment_type) {
            return \App\Classes\Payment\PaymentFactory::initial("\App\Classes\Payment\Data\\".ucfirst($payment_type[0]));
        });    
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
