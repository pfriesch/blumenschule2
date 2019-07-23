<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

class AddressPosRelation
{
    /**
     *  The ID of the address POS relation
     * @var integer
     */
    public $id;

    /**
     *  The ID of the POS base
     * @var string
     */
    public $posBaseId;

    /**
     *  The ID of the address
     * @var string
     */
    public $addressId;

    /**
     *  The ID of the relation type
     * @var integer
     */
    public $typeId;

}
