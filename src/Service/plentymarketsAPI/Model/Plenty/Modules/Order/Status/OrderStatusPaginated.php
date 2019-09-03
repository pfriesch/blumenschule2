<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Status;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class OrderStatusPaginated extends PaginatedResponse
{
    /**
     * @var OrderStatus[]
     */
    public $entries;
}
