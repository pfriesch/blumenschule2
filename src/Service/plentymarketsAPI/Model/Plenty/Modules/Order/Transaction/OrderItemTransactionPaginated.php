<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Transaction;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class OrderItemTransactionPaginated extends PaginatedResponse
{
    /**
     * @var OrderItemTransaction[]
     */
    public $entries;
}
