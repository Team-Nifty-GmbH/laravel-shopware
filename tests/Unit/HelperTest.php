<?php

use TeamNiftyGmbH\Shopware\Shopware;

test('shopware6 helper returns connector instance', function (): void {
    $instance = shopware6();

    expect($instance)->toBeInstanceOf(Shopware::class);
});

test('shopware6 helper returns same singleton', function (): void {
    $instance1 = shopware6();
    $instance2 = shopware6();

    expect($instance1)->toBe($instance2);
});
