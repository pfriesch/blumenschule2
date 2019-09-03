<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\DataExchange;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ExportPaginated extends PaginatedResponse
{
    /**
     * @var Export[]
     */
    public $entries;
}
