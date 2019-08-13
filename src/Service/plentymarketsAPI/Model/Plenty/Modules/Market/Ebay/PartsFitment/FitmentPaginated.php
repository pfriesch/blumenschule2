<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Ebay\PartsFitment;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class FitmentPaginated extends PaginatedResponse
{
    /**
     * @var Fitment[]
     */
    public $entries;
}
