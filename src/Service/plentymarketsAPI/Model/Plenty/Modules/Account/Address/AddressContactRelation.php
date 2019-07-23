<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

class AddressContactRelation
{
    /**
     *  The ID of the address contact relation
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the contact
     * @var integer
     */
    public $contactId;
    
    /**
     *  The type ID of the address. Possible values:
     * 
     * Invoice address = 1
     * Delivery address = 2
     * 
     * @var integer
     */
    public $typeId;
    
    /**
     *  The ID of the address
     * @var integer
     */
    public $addressId;
    
    /**
     *  Flag that indicates if the address is primary
     * @var boolean
     */
    public $isPrimary;
    
}
