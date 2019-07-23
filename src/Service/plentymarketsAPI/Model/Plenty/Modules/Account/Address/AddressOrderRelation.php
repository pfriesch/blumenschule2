<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

class AddressOrderRelation
{
    /**
     *  The ID of the address order relation
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the order
     * @var integer
     */
    public $orderId;
    
    /**
     *  The ID of the address type
     * 
     * 		Billing address = 1
     * 		Delivery address = 2
     * 		Sender address = 3
     * 		Return address = 4
     * 		Client address = 5
     * 		Contractor address = 6
     * 		Warehouse address = 7
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
     *  The address of the relation (Object)
     * @var object
     */
    public $address;
    
}
