<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Returns;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class OrderReturnsPaginated extends PaginatedResponse
{
    /**
     * @var OrderReturns[]
    */
    public $entries;
}
