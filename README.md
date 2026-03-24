# Laravel Shopware

Laravel integration for the [Shopware 6 Admin API SDK](https://github.com/team-nifty-gmbh/shopware-sdk).

Provides a ServiceProvider, Facade, config, and global helper for seamless Shopware 6 API access in Laravel applications.

## Installation

```bash
composer require team-nifty-gmbh/laravel-shopware
```

The ServiceProvider is auto-discovered. Publish the config:

```bash
php artisan vendor:publish --tag=shopware-config
```

## Configuration

Add to your `.env`:

```env
SHOPWARE_BASE_URL=https://your-shop.example.com/api
SHOPWARE_CLIENT_ID=your-client-id
SHOPWARE_CLIENT_SECRET=your-client-secret
```

## Usage

### Via Helper

```php
// Get all products
$products = shopware6()->product()->getProductList();

// Create a product
$response = shopware6()->product()->createProduct([
    'name' => 'My Product',
    'productNumber' => 'SW-001',
    'stock' => 100,
    'taxId' => '...',
    'price' => [['currencyId' => '...', 'gross' => 19.99, 'net' => 16.80, 'linked' => true]],
]);

// Search with criteria
use TeamNiftyGmbH\Shopware\Support\CriteriaBuilder;

$criteria = CriteriaBuilder::make()
    ->equals('active', true)
    ->contains('name', 'shirt')
    ->sort('name')
    ->limit(10)
    ->association('manufacturer')
    ->toArray();

$results = shopware6()->product()->searchProduct($criteria);
```

### Via Facade

```php
use TeamNiftyGmbH\LaravelShopware\Facades\Shopware;

$order = Shopware::order()->getOrder($orderId);
```

### Via Dependency Injection

```php
use TeamNiftyGmbH\Shopware\Shopware;

class OrderSyncService
{
    public function __construct(
        protected Shopware $shopware,
    ) {}

    public function syncOrders(): void
    {
        $orders = $this->shopware->order()->getOrderList();
        // ...
    }
}
```
