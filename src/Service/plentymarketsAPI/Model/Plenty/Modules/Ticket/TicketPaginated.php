<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Ticket;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class TicketPaginated extends PaginatedResponse
{
    /**
     * @var Ticket[]
     */
    public $entries;
}
