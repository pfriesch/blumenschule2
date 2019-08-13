<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Property;

class PropertyRelationMarkup
{
    /**
     *  The ID of the property relation markup
     * @var integer
     */
    public $id;

    /**
     *  The ID of the property relation
     * @var integer
     */
    public $propertyRelationId;

    /**
     *  The variation sales price id of the property relation markup
     * @var integer
     */
    public $variationSalesPriceId;

    /**
     *  The markup of the property relation markup
     * @var float
     */
    public $markup;

}
