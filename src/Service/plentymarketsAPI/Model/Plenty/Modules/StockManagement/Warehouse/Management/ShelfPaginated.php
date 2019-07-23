<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\StockManagement\Warehouse\Management;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ShelfPaginated extends PaginatedResponse
{
    /**
     * @var Shelf[]
    */
    public $entries;
}
