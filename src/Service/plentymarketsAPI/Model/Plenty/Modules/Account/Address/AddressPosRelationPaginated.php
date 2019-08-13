<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class AddressPosRelationPaginated extends PaginatedResponse
{
    /**
     * @var AddressPosRelation[]
     */
    public $entries;
}
