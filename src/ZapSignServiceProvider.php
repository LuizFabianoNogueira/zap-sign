<?php

namespace LuizFabianoNogueira\ZapSign;

use Illuminate\Support\ServiceProvider;

class ZapSignServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes/zap-sign.php');
        $this->loadMigrationsFrom(__DIR__ . '/Migrations');

        $this->publishesMigrations([
            __DIR__.'/Migrations' => database_path('migrations'),
        ], 'zap-sign-migrations');

        $this->publishes([
            __DIR__.'/Config/zap-sign.php' => config_path(),
        ], 'zap-sign-config');
    }
}
