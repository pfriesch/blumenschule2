<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact;

class ContactOptionType
{
    /**
     *  The ID of the contact option type. It is possible to define individual option types. The following types are available by default and cannot be deleted.
     * 
     * 1 = Telephone
     * 2 = Email
     * 3 = Telefax
     * 4 = Web page
     * 5 = Marketplace
     * 6 = Identification number
     * 7 = Payment
     * 8 = User name
     * 9 = Group
     * 10 = Access
     * 11 = Additional
     * 
     * @var integer
     */
    public $id;
    
    /**
     *  The position for sorting
     * @var integer
     */
    public $position;
    
    /**
     *  Flag that indicates if the option type can be deleted
     * @var integer
     */
    public $nonErasable;
    
}
