<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MqttService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MqttService::class, function ($app) {
            return new MqttService();
        });
    }

    public function boot()
    {
        //
    }
}
