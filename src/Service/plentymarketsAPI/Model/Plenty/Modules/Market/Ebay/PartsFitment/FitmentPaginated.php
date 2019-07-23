<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Ebay\PartsFitment;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class FitmentPaginated extends PaginatedResponse
{
    /**
     * @var Fitment[]
    */
    public $entries;
}
