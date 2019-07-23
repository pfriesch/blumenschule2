<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Returns;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ReturnsServiceProviderPaginated extends PaginatedResponse
{
    /**
     * @var ReturnsServiceProvider[]
    */
    public $entries;
}
