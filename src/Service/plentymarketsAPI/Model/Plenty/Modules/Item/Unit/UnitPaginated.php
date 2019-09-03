<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Unit;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class UnitPaginated extends PaginatedResponse
{
    /**
     * @var Unit[]
     */
    public $entries;
}
