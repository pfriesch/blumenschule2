<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Manufacturer;

class ManufacturerCommission
{
    /**
     *  The unique ID of the manufacturer commission
     * @var integer
     */
    public $id;

    /**
     *  The unique ID of the manufacturer
     * @var integer
     */
    public $manufacturerId;

    /**
     *  The unique ID of the client (store) that the commission applies to. The route /rest/webstores provides access to clients (stores).
     * @var integer
     */
    public $plentyId;

    /**
     *  The unique ID of the referrer that the commission applies to. The route /rest/orders/referrers provides access to referrers.
     * @var float
     */
    public $referrerId;

    /**
     *  The manufacturer commission value in percent
     * @var float
     */
    public $commission;

}
