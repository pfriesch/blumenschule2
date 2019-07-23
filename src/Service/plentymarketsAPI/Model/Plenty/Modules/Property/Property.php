<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Property;

class Property
{
    /**
     *  The ID of the property
     * @var integer
     */
    public $id;

    /**
     *  The cast of the property (array values: 'empty','int','float','selection','shortText','longText','date','file')
     * @var string
     */
    public $cast;

    /**
     *  The position of the property
     * @var integer
     */
    public $position;

}
