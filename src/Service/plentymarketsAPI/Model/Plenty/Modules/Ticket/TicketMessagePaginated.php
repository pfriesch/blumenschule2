<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Ticket;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class TicketMessagePaginated extends PaginatedResponse
{
    /**
     * @var TicketMessage[]
    */
    public $entries;
}
