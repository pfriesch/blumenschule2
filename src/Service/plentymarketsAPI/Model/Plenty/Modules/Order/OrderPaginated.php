<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class OrderPaginated extends PaginatedResponse
{
    /**
     * @var Order[]
     */
    public $entries;
}
