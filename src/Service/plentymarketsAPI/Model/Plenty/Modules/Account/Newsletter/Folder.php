<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Newsletter;

class Folder
{
    /**
     *  The ID of the newsletter folder
     * @var integer
     */
    public $id;
    
    /**
     *  The name of the newsletter folder
     * @var string
     */
    public $name;
    
    /**
     *  Flag that indicates if the newsletter folder can be deleted. The folders 'Customers' and 'Interested parties' are available by default and cannot be deleted.
     * @var boolean
     */
    public $isDeletable;
    
    /**
     *  The position of the newsletter folder
     * @var integer
     */
    public $position;
    
    /**
     *  Flag that indicates if the newsletter folder can be selected by customers in the online store. If this is allowed, the folder will be displayed in the My account area of the online store. Customers will then be able to subscribe to the newsletters that are included in this folder.
     * @var boolean
     */
    public $isSelectable;
    
}
