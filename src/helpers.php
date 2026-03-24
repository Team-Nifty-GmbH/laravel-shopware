<?php

if (! function_exists('shopware6')) {
    /**
     * Get the Shopware 6 Admin API connector instance.
     */
    function shopware6(): TeamNiftyGmbH\Shopware\Shopware
    {
        return app(TeamNiftyGmbH\Shopware\Shopware::class);
    }
}
