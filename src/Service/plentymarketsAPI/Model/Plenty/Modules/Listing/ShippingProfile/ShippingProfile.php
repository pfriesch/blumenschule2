<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\ShippingProfile;

class ShippingProfile
{
    /**
     *  The listing shipping profile ID.
     * @var integer
     */
    public $id;

    /**
     *  The listing shipping profile name.
     * @var string
     */
    public $name;

    /**
     *  The credentials ID that this listing shipping profile belongs to.
     * @var integer
     */
    public $credentialsId;

    /**
     *  The referrer ID.
     * @var integer
     */
    public $referrerId;

    /**
     *  Who created the shipping profile. Possible values: 'migration','customer','external'.
     * @var string
     */
    public $createdBy;

    /**
     *  Tells if the current listing shipping profile is set as default.
     * @var boolean
     */
    public $isDefault;

    /**
     *  Extended data that defines the current shipping profile.
     * @var array
     */
    public $extendedData;

}
