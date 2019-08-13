<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

class AttributeValueMap
{
    /**
     *  The unique ID of the market.
     * @var float
     */
    public $marketId;

    /**
     *  The unique ID of the attribute.
     * @var integer
     */
    public $attributeId;

    /**
     *  The unique ID of the attribute value.
     * @var integer
     */
    public $attributeValueId;

    /**
     *  The name of the attribute value map. The name must be unique and must not contain commas, colons, semicolons or quotation marks. It is not visible in the plentymarkets front end.
     * @var string
     */
    public $name;

    /**
     *  The information regarding the marketplace.
     * @var string
     */
    public $marketInformation1;

    /**
     *  The information regarding the marketplace.
     * @var string
     */
    public $marketInformation2;

}
