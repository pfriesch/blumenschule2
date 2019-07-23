<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact;

class ContactPosition
{
    /**
     *  The ID of the contact position. It is possible to define individual contact positions. The following positions are available by default:
     * 
     * 1 = Analyst
     * 2 = Director of Boards
     * 3 = CEO
     * 4 = Buyer
     * 5 = Purchasing Manager
     * 6 = CFO
     * 7 = Director General
     * 8 = Managing Director
     * 9 = Codirector
     * 10 = Commercial Agent
     * 11 = Assistant
     * 12 = Service Engineer
     * 13 = Warehouse Manager
     * 14 = Warehouse Worker
     * 15 = Senior Executive
     * 16 = Assistent
     * 17 = Purchasing Assistent
     * 18 = Software Developer
     * 19 = Sales Representative
     * 20 = Sales Manager
     * 21 = Export Sales Manager
     * 22 = Wholesale Distributing Manager
     * 23 = Secretary
     * 24 = Economist
     * 25 = Management Board
     * 
     * @var integer
     */
    public $id;
    
    /**
     *  The position for sorting
     * @var integer
     */
    public $position;
    
}
