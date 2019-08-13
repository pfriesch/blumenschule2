<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Warehouse;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class WarehouseLocationPaginated extends PaginatedResponse
{
    /**
     * @var WarehouseLocation[]
     */
    public $entries;
}
