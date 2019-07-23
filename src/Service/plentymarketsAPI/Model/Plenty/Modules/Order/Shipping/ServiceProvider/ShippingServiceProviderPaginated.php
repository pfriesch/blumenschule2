<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\ServiceProvider;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ShippingServiceProviderPaginated extends PaginatedResponse
{
    /**
     * @var ShippingServiceProvider[]
     */
    public $entries;
}
