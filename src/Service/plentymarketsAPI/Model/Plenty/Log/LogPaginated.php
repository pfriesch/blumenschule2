<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Log;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class LogPaginated extends PaginatedResponse
{
    /**
     * @var Log[]
     */
    public $entries;
}
