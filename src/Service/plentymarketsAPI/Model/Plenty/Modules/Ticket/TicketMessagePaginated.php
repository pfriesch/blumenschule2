<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Ticket;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class TicketMessagePaginated extends PaginatedResponse
{
    /**
     * @var TicketMessage[]
     */
    public $entries;
}
