<?php

namespace TeamNiftyGmbH\LaravelShopware\Facades;

use Illuminate\Support\Facades\Facade;
use TeamNiftyGmbH\Shopware\Shopware as ShopwareConnector;

/**
 * @see ShopwareConnector
 *
 * @method static \TeamNiftyGmbH\Shopware\Resource\Product product()
 * @method static \TeamNiftyGmbH\Shopware\Resource\Order order()
 * @method static \TeamNiftyGmbH\Shopware\Resource\Customer customer()
 * @method static \TeamNiftyGmbH\Shopware\Resource\Category category()
 * @method static \TeamNiftyGmbH\Shopware\Resource\Media media()
 * @method static \TeamNiftyGmbH\Shopware\Resource\SalesChannel salesChannel()
 * @method static \TeamNiftyGmbH\Shopware\Resource\Currency currency()
 * @method static \TeamNiftyGmbH\Shopware\Resource\Country country()
 * @method static \TeamNiftyGmbH\Shopware\Resource\Tax tax()
 * @method static \TeamNiftyGmbH\Shopware\Resource\PaymentMethod paymentMethod()
 * @method static \TeamNiftyGmbH\Shopware\Resource\ShippingMethod shippingMethod()
 * @method static \TeamNiftyGmbH\Shopware\Resource\PropertyGroup propertyGroup()
 * @method static \TeamNiftyGmbH\Shopware\Resource\PropertyGroupOption propertyGroupOption()
 * @method static \TeamNiftyGmbH\Shopware\Resource\Tag tag()
 * @method static \TeamNiftyGmbH\Shopware\Resource\OrderManagement orderManagement()
 * @method static \TeamNiftyGmbH\Shopware\Resource\BulkOperations bulkOperations()
 * @method static \TeamNiftyGmbH\Shopware\Resource\SystemOperations systemOperations()
 */
class Shopware extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ShopwareConnector::class;
    }
}
