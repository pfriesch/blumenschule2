<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Log;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class LogPaginated extends PaginatedResponse
{
    /**
     * @var Log[]
     */
    public $entries;
}
