<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account;

class Account
{
    /**
     *  The ID of the account
     * @var integer
     */
    public $id;
    
    /**
     *  The number of the account
     * @var string
     */
    public $number;
    
    /**
     *  The company name
     * @var string
     */
    public $companyName;
    
    /**
     *  The ID of the tax number
     * @var string
     */
    public $taxIdNumber;
    
    /**
     *  The valuta date in days specified for the account
     * @var integer
     */
    public $valuta;
    
    /**
     *  The early payment discount period in days specified for the account
     * @var integer
     */
    public $discountDays;
    
    /**
     *  The early payment discount in percent specified for the account
     * @var float
     */
    public $discountPercent;
    
    /**
     *  The payment due date in days specified for the account
     * @var integer
     */
    public $timeForPaymentAllowedDays;
    
    /**
     *  The contact ID of the sales representative
     * @var integer
     */
    public $salesRepresentativeContactId;
    
    /**
     *  The ID of the account owner
     * @var integer
     */
    public $userId;
    
    /**
     *  The delivery time for the supplier
     * @var integer
     */
    public $deliveryTime;
    
    /**
     *  The minimum order value for the supplier
     * @var float
     */
    public $dealerMinOrderValue;
    
    /**
     *  The time the account was created as unix timestamp
     * @var string
     */
    public $createdAt;
    
    /**
     *  The time the account was last updated as unix timestamp
     * @var string
     */
    public $updatedAt;
    
}
