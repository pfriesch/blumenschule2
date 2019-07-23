<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\DataExchange;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ExportPaginated extends PaginatedResponse
{
    /**
     * @var Export[]
     */
    public $entries;
}
