<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\ShippingProfile;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ShippingProfilePaginated extends PaginatedResponse
{
    /**
     * @var ShippingProfile[]
     */
    public $entries;
}
