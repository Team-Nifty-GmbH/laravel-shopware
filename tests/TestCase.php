<?php

namespace TeamNiftyGmbH\LaravelShopware\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use TeamNiftyGmbH\LaravelShopware\ShopwareServiceProvider;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ShopwareServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'Shopware' => \TeamNiftyGmbH\LaravelShopware\Facades\Shopware::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('shopware.base_url', 'https://test-shop.example.com/api');
        $app['config']->set('shopware.client_id', 'test-client-id');
        $app['config']->set('shopware.client_secret', 'test-client-secret');
    }
}
