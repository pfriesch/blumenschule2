<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Board;

class BoardTaskReference
{
    /**
     *  
     * @var string
     */
    public $id;
    
    /**
     *  The ID of the task to create a reference for
     * @var string
     */
    public $taskId;
    
    /**
     *  Reference type followed by foreign ID of the referenced object. Syntax: TYPE-ID Example: user-123456 Types: user,ticket,contact,order,item
     * @var string
     */
    public $referenceValue;
    
}
