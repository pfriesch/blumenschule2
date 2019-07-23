<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\StatusHistory;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class StatusHistoryEntryPaginated extends PaginatedResponse
{
    /**
     * @var StatusHistoryEntry[]
     */
    public $entries;
}
