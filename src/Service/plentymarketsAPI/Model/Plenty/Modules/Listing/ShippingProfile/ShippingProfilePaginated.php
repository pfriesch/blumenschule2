<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\ShippingProfile;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ShippingProfilePaginated extends PaginatedResponse
{
    /**
     * @var ShippingProfile[]
    */
    public $entries;
}
