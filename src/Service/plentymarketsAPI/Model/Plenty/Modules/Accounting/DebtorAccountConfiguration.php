<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Accounting;

class DebtorAccountConfiguration
{
    /**
     *  The ID of the debtor account configuration
     * @var integer
     */
    public $id;

    /**
     *  The ID of the accounting location that the debtor account is associated with.
     * @var integer
     */
    public $locationId;

    /**
     *  The mode describes the criteria based on which pending amounts are assigned to a debtor account. The following modes are availabel:
     *
     * character        = The debtor accounts are selected based on the first character of customer information. The information and the order of the information that will be used are defined with the sequence. There are 3 different sequences availabel.
     * payment          = The debtor accounts are selected based on the payment method.
     * country          = The debtor accounts are selected based on the country of delivery.
     * country_payment  = The debtor accounts are selected based on two criteria. The first criteria is the country and if the country is same as the country of the accounting location then the payment method is used to select the deptor account.
     *
     * @var string
     */
    public $mode;

    /**
     *  The sequence defines the order in which customer information will be used for the debtor account assignment if the character made has been chosen. The following sequences are availabel:
     *
     * FNV = stands for the sequence: company, lastname, firstname
     * NVF = stands for the sequence: lastname, firstname, company
     * NFV = stands for the sequence: lastname, company, firstname
     *
     * @var string
     */
    public $sequence;

    /**
     *  The standard debtor account that will be used if no matching debtor account can be found.
     * @var string
     */
    public $standard;

    /**
     *  Flag that indicates if the debtor account shall be saved within the contact data.
     * @var boolean
     */
    public $save;

}
