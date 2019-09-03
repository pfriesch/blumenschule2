<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\StockManagement\Warehouse\Management;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class StorageLocationPaginated extends PaginatedResponse
{
    /**
     * @var StorageLocation[]
     */
    public $entries;
}
