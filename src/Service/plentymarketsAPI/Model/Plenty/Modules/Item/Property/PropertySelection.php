<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Property;

class PropertySelection
{
    /**
     *  The unique ID of the selection
     * @var integer
     */
    public $id;

    /**
     *  The unique ID of the property
     * @var integer
     */
    public $propertyId;

    /**
     *  The code of the language for which name and description of the selection were saved.
     * @var string
     */
    public $lang;

    /**
     *  The name of the selection. The name is displayed in the online store.
     * @var string
     */
    public $name;

    /**
     *  The description of the selection. This description is displayed in the online store.
     * @var string
     */
    public $description;

}
