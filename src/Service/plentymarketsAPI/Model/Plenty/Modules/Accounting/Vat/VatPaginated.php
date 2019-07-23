<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Accounting\Vat;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class VatPaginated extends PaginatedResponse
{
    /**
     * @var Vat[]
     */
    public $entries;
}
