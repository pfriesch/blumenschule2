<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Ticket;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class TicketPaginated extends PaginatedResponse
{
    /**
     * @var Ticket[]
     */
    public $entries;
}
