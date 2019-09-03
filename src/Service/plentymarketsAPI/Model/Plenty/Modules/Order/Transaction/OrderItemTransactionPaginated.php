<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Transaction;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class OrderItemTransactionPaginated extends PaginatedResponse
{
    /**
     * @var OrderItemTransaction[]
     */
    public $entries;
}
