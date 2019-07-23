<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ContactPaginated extends PaginatedResponse
{
    /**
     * @var Contact[]
     */
    public $entries;
}
