<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class OrderPaginated extends PaginatedResponse
{
    /**
     * @var Order[]
     */
    public $entries;
}
