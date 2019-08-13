<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order;

use App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address\Address;

class Order
{
    /**
     *  The ID of the order
     * @var integer
     */
    public $id;

    /**
     *  The ID of the order type
     *                                                               It is possible to define individual order types. However,
     *                                                               the following types are availabel by default:
     *
     *     Sales order = 1
     *     Delivery = 2
     *     Returns = 3
     *     Credit note = 4
     *     Warranty = 5
     *     Repair = 6
     *     Offer = 7
     *     Advance order = 8
     *     Multi-order = 9
     *     Multi credit note = 10
     *     Multi delivery = 11
     *     Reorder = 12
     *     Partial delivery = 13
     *     Subscription = 14
     *     Redistribution = 15
     *
     * @var integer
     */
    public $typeId;

    /**
     *  The ID of the order status
     * @var float
     */
    public $statusId;

    /**
     *  The name for the status ID (read only)
     * @var string
     */
    public $statusName;

    /**
     *  The user ID of the order's owner
     * @var integer
     */
    public $ownerId;

    /**
     *  The referrer ID of the order
     * @var float
     */
    public $referrerId;

    /**
     *  The date that the order was created
     * @var string
     */
    public $createdAt;

    /**
     *  The date that the order was updated last
     * @var string
     */
    public $updatedAt;

    /**
     *  The plenty ID of the client that the order belongs to
     * @var integer
     */
    public $plentyId;

    /**
     *  The ID of the location that the order belongs to
     * @var integer
     */
    public $locationId;

    /**
     *  True means only the order's total amounts are rounded, false the order item price is rounded too. (read-only)
     * @var boolean
     */
    public $roundTotalsOnly;

    /**
     *  The number of decimals this order was rounded with. (read-only)
     * @var integer
     */
    public $numberOfDecimals;

    /**
     *  The lock status of the order. The following statuses are availabel:
     *
     *  unlocked
     *  permanentlyLocked
     *  reversibleLocked
     *
     * @var string
     */
    public $lockStatus;


    /**
     * @var \App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address\Address[]|null //TODO why do I need to give the full path here?
     */
    public $addresses;


    /**
     * @var array|null
     */
    public $addressRelations;

    /**
     * @var array|null
     */
    public $amounts;

    /**
     * @var array|null
     */
    public $dates;

    /**
     * @var string|null
     */
    public $deletedDate;

    /**
     * @var array|null
     */
    public $orderItems;

    /**
     * @var array|null
     */
    public $orderReferences;

    /**
     * @var array|null
     */
    public $properties;

    /**
     * @var array|null
     */
    public $relations;

    public function getLastname()
    {
        return $this->addresses[$_SERVER['addressUseId']]->name3;
    }

    public function getCompany()
    {
        return $this->addresses[$_SERVER['addressUseId']]->companyName;

    }

    public function getFirstname()
    {
        return $this->addresses[$_SERVER['addressUseId']]->name2;
    }

    public function getZIP()
    {
        return $this->addresses[$_SERVER['addressUseId']]->postalCode;
    }

    public function getCity()
    {
        return $this->addresses[$_SERVER['addressUseId']]->town;

    }

    public function getTelephone()
    {
        return $this->addresses[$_SERVER['addressUseId']]->phone;

    }

    public function getOrderID()
    {
        return $this->id;

    }


}
