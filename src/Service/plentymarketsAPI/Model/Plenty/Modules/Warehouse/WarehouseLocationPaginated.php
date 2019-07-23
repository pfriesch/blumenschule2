<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Warehouse;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class WarehouseLocationPaginated extends PaginatedResponse
{
    /**
     * @var WarehouseLocation[]
    */
    public $entries;
}
