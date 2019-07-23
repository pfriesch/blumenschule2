<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Property;

class PropertyRelation
{
    /**
     *  The ID of the property relation
     * @var integer
     */
    public $id;

    /**
     *  The ID of the property
     * @var integer
     */
    public $propertyId;

    /**
     *  The identifier of the property relation
     * @var string
     */
    public $relationTypeIdentifier;

    /**
     *  The ID of the target of the relation
     * @var integer
     */
    public $relationTargetId;

    /**
     *  The ID of the selection relation
     * @var integer
     */
    public $selectionRelationId;

}
