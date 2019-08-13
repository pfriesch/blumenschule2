<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\StockManagement\Warehouse\Management;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ShelfPaginated extends PaginatedResponse
{
    /**
     * @var Shelf[]
     */
    public $entries;
}
