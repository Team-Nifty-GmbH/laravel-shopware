<?php

namespace TeamNiftyGmbH\LaravelShopware;

use Illuminate\Support\ServiceProvider;
use TeamNiftyGmbH\Shopware\Shopware;

class ShopwareServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/shopware.php' => config_path('shopware.php'),
            ], 'shopware-config');
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/shopware.php', 'shopware');

        $this->app->singleton(Shopware::class, function ($app) {
            return new Shopware(
                baseUrl: config('shopware.base_url'),
                clientId: config('shopware.client_id'),
                clientSecret: config('shopware.client_secret'),
                tokenUrl: config('shopware.token_url'),
                scopes: config('shopware.scopes'),
            );
        });

        $this->app->alias(Shopware::class, 'shopware');
    }
}
