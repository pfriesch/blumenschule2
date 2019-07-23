<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

class AttributeValue
{
    /**
     *  The unique ID of the attribute value.
     * @var integer
     */
    public $id;

    /**
     *  The unique ID of the attribute associated with the attribute value.
     * @var integer
     */
    public $attributeId;

    /**
     *  The back end name of the attribute value. This name can only be assigned once per attribute. It is not visible in the plentymarkets front end.
     * @var string
     */
    public $backendName;

    /**
     *  The position of the attribute value. Attribute values are sorted in ascending order by position.
     * @var integer
     */
    public $position;

    /**
     *  The name of the image associated with the attribute value; naming pattern is attr\_\{valueId\}.
     * @var string
     */
    public $image;

    /**
     *  Optional comment on the attribute value. Comments are not visible in the plentymarkets front end.
     * @var string
     */
    public $comment;

    /**
     *  The attribute value of the market Amazon that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the values specified by the market. Check documentation of the market for permitted values.
     * @var string
     */
    public $amazonValue;

    /**
     *  The attribute value of the market OTTO that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market.
     * @var string
     */
    public $ottoValue;

    /**
     *  The attribute value of the market Neckermann AT EP that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market. Check documentation of the market for permitted values.
     * @var string
     */
    public $neckermannAtEpValue;

    /**
     *  The attribute value of the market La Redoute that this attribute value maps to. To list variations on this market, attribute values must be linked to one of the attribute values specified by the market. Check documentation of the market for permitted values.
     * @var string
     */
    public $laRedouteValue;

    /**
     *
     * @var string
     */
    public $tracdelightValue;

    /**
     *  The percentage for automatic stock distribution of attribute values. When reordering an item, the quantities of attribute values is automatically distributed among the total quantity.
     * @var integer
     */
    public $percentageDistribution;

}
