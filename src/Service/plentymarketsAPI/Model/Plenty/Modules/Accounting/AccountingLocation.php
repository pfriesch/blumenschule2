<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Accounting;

class AccountingLocation
{
    /**
     *  The ID of the accounting location
     * @var integer
     */
    public $id;

    /**
     *  The ID of the country of the accounting location
     * @var integer
     */
    public $countryId;

    /**
     *  The name of the accounting location
     * @var string
     */
    public $name;

    /**
     *  The ID of the client that the accounting location belongs to
     * @var integer
     */
    public $clientId;

    /**
     *  The plenty ID of the client that the accounting location belongs to
     * @var integer
     */
    public $plentyId;

}
