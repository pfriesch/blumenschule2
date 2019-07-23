<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Referrer;

class OrderReferrer
{
    /**
     *  The ID of the order referrer
     * @var float
     */
    public $id;

    /**
     *  Flag that indicates if this referrer can be updated as well as deleted or not
     * True = the referrer can be edited and deleted
     * False = the referrer can neither be edited nor deleted
     * @var boolean
     */
    public $isEditable;

    /**
     *  The backend name of the referrer
     * @var string
     */
    public $backendName;

    /**
     *  The public name of the referrer as it is displayed e.g. on documents
     * @var string
     */
    public $name;

    /**
     *  The user ID of whoever owns new orders from this referrer
     * @var integer
     */
    public $orderOwnerId;

    /**
     *  Flag that indicates if this referrer can be used as a filter or not
     * True = Can be used as a filter
     * False = Cannot be used as a filter
     * @var boolean
     */
    public $isFilterable;

    /**
     *  The origin of this referrer
     * @var string
     */
    public $origin;

}
