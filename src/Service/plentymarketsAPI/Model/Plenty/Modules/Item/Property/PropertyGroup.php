<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Property;

class PropertyGroup
{
    /**
     *  The unique ID of the property group
     * @var integer
     */
    public $id;

    /**
     *  The back end name of the property group. This name is not visible to customers.
     * @var string
     */
    public $backendName;

    /**
     *  Indicates how order properties are grouped for selection in the order process. This parameter is applicable to order properties of the type None only.none = Order properties are not grouped.single = One of the grouped order properties can be selected from the drop-down list.multi = Multiple order properties can be selected.
     * @var string
     */
    public $orderPropertyGroupingType;

    /**
     *  Flag that indicates if surcharge values are calculated in percent.
     * @var boolean
     */
    public $isSurchargePercental;

    /**
     *
     * @var integer
     */
    public $ottoComponentId;

}
