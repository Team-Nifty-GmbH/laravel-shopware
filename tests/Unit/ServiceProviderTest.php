<?php

use TeamNiftyGmbH\Shopware\Shopware;

test('shopware connector is registered as singleton', function (): void {
    $instance1 = app(Shopware::class);
    $instance2 = app(Shopware::class);

    expect($instance1)->toBeInstanceOf(Shopware::class)
        ->and($instance1)->toBe($instance2);
});

test('shopware alias is registered', function (): void {
    $instance = app('shopware');

    expect($instance)->toBeInstanceOf(Shopware::class);
});

test('config is merged', function (): void {
    expect(config('shopware.base_url'))->toBe('https://test-shop.example.com/api')
        ->and(config('shopware.client_id'))->toBe('test-client-id')
        ->and(config('shopware.client_secret'))->toBe('test-client-secret');
});

test('config has default scopes as a list', function (): void {
    // A list, not a name => label map. Saloon joins the values into the scope
    // string it sends, so a map asks the shop for a scope called "Full write
    // access" and Shopware refuses the token request outright.
    expect(config('shopware.scopes'))->toBe(['write']);
});

test('config token_url defaults to null', function (): void {
    expect(config('shopware.token_url'))->toBeNull();
});

test('connector resolves base url from config', function (): void {
    $shopware = app(Shopware::class);

    expect($shopware->resolveBaseUrl())->toBe('https://test-shop.example.com/api');
});
