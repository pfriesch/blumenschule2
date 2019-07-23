<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Manufacturer;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ManufacturerPaginated extends PaginatedResponse
{
    /**
     * @var Manufacturer[]
    */
    public $entries;
}
