<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\StatusHistory;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class StatusHistoryEntryPaginated extends PaginatedResponse
{
    /**
     * @var StatusHistoryEntry[]
     */
    public $entries;
}
