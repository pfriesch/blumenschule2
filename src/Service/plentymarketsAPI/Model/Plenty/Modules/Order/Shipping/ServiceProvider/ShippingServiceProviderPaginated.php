<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\ServiceProvider;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ShippingServiceProviderPaginated extends PaginatedResponse
{
    /**
     * @var ShippingServiceProvider[]
     */
    public $entries;
}
