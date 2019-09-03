<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class SalesPricePaginated extends PaginatedResponse
{
    /**
     * @var SalesPrice[]
     */
    public $entries;
}
