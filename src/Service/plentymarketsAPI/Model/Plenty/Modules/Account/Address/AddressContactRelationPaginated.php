<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class AddressContactRelationPaginated extends PaginatedResponse
{
    /**
     * @var AddressContactRelation[]
     */
    public $entries;
}
