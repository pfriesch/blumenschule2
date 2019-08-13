<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Type;

class ListingType
{
    /**
     *  The ID of the listing type.
     * @var integer
     */
    public $id;

    /**
     *  Flag that indicates if the type can be deleted.
     * @var integer
     */
    public $isErasable;

    /**
     *  The position for sorting.
     * @var integer
     */
    public $position;

}
