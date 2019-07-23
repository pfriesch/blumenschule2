<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account;

class AccountContactRelation
{
    /**
     *  The ID of the account contact relation
     * @var integer
     */
    public $id;

    /**
     *  The ID of the foreign key account
     * @var integer
     */
    public $accountId;

    /**
     *  The ID of the foreign key contact
     * @var integer
     */
    public $contactId;

}
