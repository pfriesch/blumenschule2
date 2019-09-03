<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Accounting\Vat;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class VatPaginated extends PaginatedResponse
{
    /**
     * @var Vat[]
     */
    public $entries;
}
