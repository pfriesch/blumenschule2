<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\ItemImage;

use BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\ItemImage\ItemImageName;
use BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\ItemImage\ItemImageAvailability;

class ItemImage
{
    /**
     *  The unique ID of the image
     * @var integer
     */
    public $id;
    
    /**
     *  The unique ID of the item the image is associated with
     * @var integer
     */
    public $itemId;
    
    /**
     *  The file format of the image. Possible file formats: jpg, jpeg, png, gif, svg
     * @var string
     */
    public $fileType;
    
    /**
     *  The path under which the image is saved.
     * @var string
     */
    public $path;
    
    /**
     *  The position of the image. The position is used for sorting images in the online store.
     * @var integer
     */
    public $position;
    
    /**
     *  The time the image was uploaded.
     * @var string
     */
    public $createdAt;
    
    /**
     *  The time the image details were last updated.
     * @var string
     */
    public $updatedAt;
    
    /**
     *  The MD5 hash value of the image file
     * @var string
     */
    public $md5Checksum;
    
    /**
     *  The MD5 hash value of the original image file
     * @var string
     */
    public $md5ChecksumOriginal;
    
    /**
     *  The size of the image in pixels
     * @var integer
     */
    public $size;
    
    /**
     *  The width of the image in pixels
     * @var integer
     */
    public $width;
    
    /**
     *  The height of the image in pixels
     * @var integer
     */
    public $height;
    
    /**
     *  The URL under which the image can be accessed after the upload.
     * @var string
     */
    public $url;
    
    /**
     *  The URL that points to the  medium-sized version of the item image.
     * @var string
     */
    public $urlMiddle;
    
    /**
     *  The URL that points to the  first preview version of the item image.
     * @var string
     */
    public $urlPreview;
    
    /**
     *  The URL that points to the second preview version of the item image.
     * @var string
     */
    public $urlSecondPreview;
    
    /**
     *  Lists the image's name details as an array. (List)
     * @var ItemImageName[]
     */
    public $names;
    
    /**
     *  Lists the image's availability details as an array. (List)
     * @var ItemImageAvailability[]
     */
    public $availabilities;
    
}
