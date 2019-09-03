<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact\ContactEvent;

use App\Service\plentymarketsAPI\Model\PaginatedResponse;

class ContactEventPaginated extends PaginatedResponse
{
    /**
     * @var ContactEvent[]
     */
    public $entries;
}
