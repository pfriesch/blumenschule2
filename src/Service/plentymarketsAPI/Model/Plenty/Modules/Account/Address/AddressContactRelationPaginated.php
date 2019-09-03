<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class AddressContactRelationPaginated extends PaginatedResponse
{
    /**
     * @var AddressContactRelation[]
     */
    public $entries;
}
