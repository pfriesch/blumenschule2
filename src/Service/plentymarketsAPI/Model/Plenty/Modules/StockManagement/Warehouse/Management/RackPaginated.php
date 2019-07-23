<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\StockManagement\Warehouse\Management;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class RackPaginated extends PaginatedResponse
{
    /**
     * @var Rack[]
     */
    public $entries;
}
