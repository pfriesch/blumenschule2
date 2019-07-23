<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\ItemImage;

class ItemImageName
{
    /**
     *  The ID of the image. The ID must be unique.
     * @var integer
     */
    public $imageId;
    
    /**
     *  The language of the image name
     * @var string
     */
    public $lang;
    
    /**
     *  The name of the image in the specified language
     * @var string
     */
    public $name;
    
    /**
     *  The alternative name of the image in the specified language
     * @var string
     */
    public $alternate;
    
}
