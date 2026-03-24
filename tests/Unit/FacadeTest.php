<?php

use TeamNiftyGmbH\LaravelShopware\Facades\Shopware;
use TeamNiftyGmbH\Shopware\Resource\Customer;
use TeamNiftyGmbH\Shopware\Resource\Order;
use TeamNiftyGmbH\Shopware\Resource\Product;

test('facade resolves connector', function (): void {
    expect(Shopware::getFacadeRoot())
        ->toBeInstanceOf(TeamNiftyGmbH\Shopware\Shopware::class);
});

test('facade proxies resource methods', function (): void {
    expect(Shopware::product())->toBeInstanceOf(Product::class)
        ->and(Shopware::order())->toBeInstanceOf(Order::class)
        ->and(Shopware::customer())->toBeInstanceOf(Customer::class);
});
