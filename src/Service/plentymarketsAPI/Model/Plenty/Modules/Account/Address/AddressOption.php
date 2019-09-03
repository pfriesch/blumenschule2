<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

class AddressOption
{
    /**
     *  The ID of the address option
     * @var integer
     */
    public $id;

    /**
     *  The ID of the address
     * @var integer
     */
    public $addressId;

    /**
     *  The ID of the address option type
     * @var integer
     */
    public $typeId;

    /**
     *  The option value
     * @var string
     */
    public $value;

    /**
     *  The position for sorting
     * @var integer
     */
    public $position;

    /**
     *  The time the option was created as unix timestamp
     * @var string
     */
    public $createdAt;

    /**
     *  The time the option was last updated as unix timestamp
     * @var string
     */
    public $updatedAt;

}
