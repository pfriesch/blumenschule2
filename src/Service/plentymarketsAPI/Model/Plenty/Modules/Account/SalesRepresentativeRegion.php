<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account;

class SalesRepresentativeRegion
{
    /**
     *  The ID of the account contact sales representative relation
     * @var integer
     */
    public $id;

    /**
     *  The ID of the foreign key account contact relation
     * @var integer
     */
    public $accountContactRelationId;

    /**
     *
     * @var string
     */
    public $postalCodeArea;

    /**
     *
     * @var integer
     */
    public $countryId;

}
