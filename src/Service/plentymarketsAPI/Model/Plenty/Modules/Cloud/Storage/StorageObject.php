<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Cloud\Storage;

class StorageObject
{
    /**
     *
     * @var string
     */
    public $key;

    /**
     *
     * @var string
     */
    public $lastModified;

    /**
     *
     * @var array
     */
    public $metaData;

    /**
     *
     * @var string
     */
    public $eTag;

    /**
     *
     * @var integer
     */
    public $size;

    /**
     *
     * @var string
     */
    public $storageClass;

    /**
     *
     * @var string
     */
    public $body;

    /**
     *
     * @var string
     */
    public $contentType;

    /**
     *
     * @var string
     */
    public $contentLength;

}
