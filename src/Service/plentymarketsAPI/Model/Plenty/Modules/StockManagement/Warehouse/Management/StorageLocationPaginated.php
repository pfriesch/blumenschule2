<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\StockManagement\Warehouse\Management;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class StorageLocationPaginated extends PaginatedResponse
{
    /**
     * @var StorageLocation[]
     */
    public $entries;
}
