<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Manufacturer;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ManufacturerPaginated extends PaginatedResponse
{
    /**
     * @var Manufacturer[]
     */
    public $entries;
}
