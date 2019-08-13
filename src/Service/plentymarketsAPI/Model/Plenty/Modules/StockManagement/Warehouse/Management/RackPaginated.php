<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\StockManagement\Warehouse\Management;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class RackPaginated extends PaginatedResponse
{
    /**
     * @var Rack[]
     */
    public $entries;
}
