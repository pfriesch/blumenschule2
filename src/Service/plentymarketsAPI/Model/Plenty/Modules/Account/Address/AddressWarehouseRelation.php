<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

class AddressWarehouseRelation
{
    /**
     *  The ID of the address warehouse relation
     * @var integer
     */
    public $id;

    /**
     *  The ID of the warehouse
     * @var integer
     */
    public $warehouseId;

    /**
     *  The ID of the type
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
