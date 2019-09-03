<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Returns;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ReturnsServiceProviderPaginated extends PaginatedResponse
{
    /**
     * @var ReturnsServiceProvider[]
     */
    public $entries;
}
