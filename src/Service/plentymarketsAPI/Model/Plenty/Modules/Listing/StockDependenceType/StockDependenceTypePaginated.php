<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\StockDependenceType;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class StockDependenceTypePaginated extends PaginatedResponse
{
    /**
     * @var StockDependenceType[]
    */
    public $entries;
}
