<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Returns;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class OrderReturnsPaginated extends PaginatedResponse
{
    /**
     * @var OrderReturns[]
     */
    public $entries;
}
