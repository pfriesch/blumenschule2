<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact;

class ContactBank
{
    /**
     *  The ID of the bank account
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the contact the bank account belongs to
     * @var integer
     */
    public $contactId;
    
    /**
     *  The ID of the order the bank account belongs to
     * @var integer
     */
    public $orderId;
    
    /**
     *  The owner of the bank account
     * @var string
     */
    public $accountOwner;
    
    /**
     *  The name of the bank
     * @var string
     */
    public $bankName;
    
    /**
     *  The address of the bank
     * @var string
     */
    public $bankAddress;
    
    /**
     *  The postcode and town of the bank
     * @var string
     */
    public $bankPostalCodeTown;
    
    /**
     *  The country of the bank
     * @var string
     */
    public $bankCountry;
    
    /**
     *  The IBAN of the bank account
     * @var string
     */
    public $iban;
    
    /**
     *  The BIC of the bank account
     * @var string
     */
    public $bic;
    
    /**
     *  The account number of the bank account
     * @var string
     */
    public $accountNumber;
    
    /**
     *  The sort code of the bank account
     * @var string
     */
    public $sortCode;
    
    /**
     *  The source of the last change (possible values: `customer`, `backend`, `import`)
     * @var string
     */
    public $lastUpdateBy;
    
    /**
     *  Flag that indicates if a direct debit mandate is available
     * @var integer
     */
    public $directDebitMandateAvailable;
    
    /**
     *  The time the direct debit mandate was created as unix timestamp
     * @var string
     */
    public $directDebitMandateAt;
    
    /**
     *  The direct debit method (possible values: `sepaDirectDebit`, `sepaB2bDirectDebit`)
     * @var string
     */
    public $directDebitMethod;
    
    /**
     *  The direct debit type (possible values: `first`, `next`)
     * @var string
     */
    public $directDebitType;
    
    /**
     *  The payment method (possible values: `recurrent`, `onOff`)
     * @var string
     */
    public $paymentMethod;
    
    /**
     *  The time the bank account was created as  unix timestamp
     * @var string
     */
    public $createdAt;
    
    /**
     *  The time the bank account was last updated as  unix timestamp
     * @var string
     */
    public $updatedAt;
    
}
