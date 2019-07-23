<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Unit;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class UnitPaginated extends PaginatedResponse
{
    /**
     * @var Unit[]
    */
    public $entries;
}
