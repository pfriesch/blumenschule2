<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Barcode;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class BarcodePaginated extends PaginatedResponse
{
    /**
     * @var Barcode[]
     */
    public $entries;
}
