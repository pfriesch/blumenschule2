<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class AddressPosRelationPaginated extends PaginatedResponse
{
    /**
     * @var AddressPosRelation[]
    */
    public $entries;
}
