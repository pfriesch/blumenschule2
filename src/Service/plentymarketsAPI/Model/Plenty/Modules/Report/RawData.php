<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Report;

class RawData
{
    /**
     *  The raw data id
     * @var string
     */
    public $id;

    /**
     *  Unix timestamp of creation of this raw data file
     * @var integer
     */
    public $createdAtTimestamp;

    /**
     *  The plentymarkets system id hash
     * @var string
     */
    public $plentyIdHash;

    /**
     *  The raw data name
     * @var string
     */
    public $dataName;

    /**
     *  Composite index of dataName#processStatus#
     * @var string
     */
    public $dataNameProcessStatus;

    /**
     *  Composite index of processStatus#plentyIdHash#
     * @var string
     */
    public $processStatusPlentyIdHash;

    /**
     *  Storage path to raw data file
     * @var string
     */
    public $path;

}
