<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Shopware API Base URL
    |--------------------------------------------------------------------------
    |
    | The base URL of your Shopware 6 instance API endpoint.
    | Example: https://your-shop.example.com/api
    |
    */
    'base_url' => env('SHOPWARE_BASE_URL', 'https://localhost/api'),

    /*
    |--------------------------------------------------------------------------
    | API Credentials
    |--------------------------------------------------------------------------
    |
    | Client credentials for the Shopware Admin API integration.
    | Create these in Shopware Admin > Settings > System > Integrations.
    |
    */
    'client_id' => env('SHOPWARE_CLIENT_ID'),
    'client_secret' => env('SHOPWARE_CLIENT_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | OAuth Token URL
    |--------------------------------------------------------------------------
    |
    | Override the default OAuth token endpoint. Leave null to use
    | {base_url}/oauth/token.
    |
    */
    'token_url' => env('SHOPWARE_TOKEN_URL'),

    /*
    |--------------------------------------------------------------------------
    | OAuth Scopes
    |--------------------------------------------------------------------------
    |
    | The OAuth scopes to request when authenticating, as a plain list.
    |
    | Saloon joins the *values* of this array into the scope string it sends, so
    | a name => label map asks the shop for a scope literally called "Full write
    | access". Shopware answers 400 with "The requested scope is invalid,
    | unknown, or malformed / Check the `Full` scope" on the token request, which
    | means no call to the shop ever succeeds.
    |
    */
    'scopes' => ['write'],
];
