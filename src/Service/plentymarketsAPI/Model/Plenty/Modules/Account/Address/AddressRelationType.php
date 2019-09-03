<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

class AddressRelationType
{
    /**
     *  The ID of the address relation type. The following types are availabel by default and cannot be deleted:
     *
     * 1 = Billing address
     * 2 = Delivery address
     * 3 = Sender address
     * 4 = Return address
     * 5 = Client address
     * 6 = Contractor address
     * 7 = Warehouse address
     * 8 = POS address
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
     *  Flag that indicates if the type can be deleted
     * @var integer
     */
    public $nonErasable;

}
