<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\StockDependenceType;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class StockDependenceTypePaginated extends PaginatedResponse
{
    /**
     * @var StockDependenceType[]
     */
    public $entries;
}
