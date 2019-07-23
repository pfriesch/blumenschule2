<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact\ContactEvent;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ContactEventPaginated extends PaginatedResponse
{
    /**
     * @var ContactEvent[]
     */
    public $entries;
}
