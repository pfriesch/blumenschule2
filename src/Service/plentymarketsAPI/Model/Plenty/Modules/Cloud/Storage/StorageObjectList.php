<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Cloud\Storage;

use App\Service\plentymarketsAPI\Model\Plenty\Modules\Cloud\Storage\StorageObject;

class StorageObjectList
{
    /**
     *
     * @var boolean
     */
    public $isTruncated;

    /**
     *
     * @var string
     */
    public $nextContinuationToken;

    /**
     *   (List)
     * @var StorageObject[]
     */
    public $objects;

    /**
     *
     * @var array
     */
    public $commonPrefixes;

}
