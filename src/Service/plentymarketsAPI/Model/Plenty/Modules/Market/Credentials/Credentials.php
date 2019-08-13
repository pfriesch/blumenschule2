<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Credentials;

class Credentials
{
    /**
     *  The ID of the credentials.
     * @var integer
     */
    public $id;

    /**
     *  The environment for the credentials. Possible values: sandbox, production
     * @var string
     */
    public $environment;

    /**
     *  The status of the credentials. Possible values: active, inactive, pending
     * @var string
     */
    public $status;

    /**
     *  The data of the credentials.
     * @var array
     */
    public $data;

    /**
     *  The market for the current credentials.
     * @var string
     */
    public $market;

    /**
     *  The date that the credentials was created.
     * @var string
     */
    public $createdAt;

    /**
     *  The date that the credentials was updated last.
     * @var string
     */
    public $updatedAt;

}
