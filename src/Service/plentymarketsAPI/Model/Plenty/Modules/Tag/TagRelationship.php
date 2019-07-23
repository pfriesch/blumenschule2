<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Tag;

class TagRelationship
{
    /**
     *  The ID of the tag
     * @var integer
     */
    public $tagId;
    
    /**
     *  The type of tag.
     * @var string
     */
    public $tagType;
    
    /**
     *  The ID of the data record for which a tag relationship is created
     * @var integer
     */
    public $relationshipValue;
    
    /**
     *  The ID of the data record for which a tag relationship is created. For models with uuid5 as primary key
     * @var string
     */
    public $relationshipUUID5;
    
}
