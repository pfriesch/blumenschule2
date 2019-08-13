<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ContactPaginated extends PaginatedResponse
{
    /**
     * @var Contact[]
     */
    public $entries;
}
