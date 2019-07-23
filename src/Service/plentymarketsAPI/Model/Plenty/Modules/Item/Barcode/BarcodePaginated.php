<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Barcode;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class BarcodePaginated extends PaginatedResponse
{
    /**
     * @var Barcode[]
    */
    public $entries;
}
