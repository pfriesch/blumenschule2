<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Status;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class OrderStatusPaginated extends PaginatedResponse
{
    /**
     * @var OrderStatus[]
    */
    public $entries;
}
