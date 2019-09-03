<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Contact;

class ContactDepartment
{
    /**
     *  The ID of the contact department. It is possible to define individual departments. The following departments are availabel by default.
     *
     * 1 = Management
     * 2 = Purchasing Department
     * 3 = Sales Department
     * 4 = Research & Development Team
     * 5 = Production
     * 6 = Quality Assurance
     * 7 = Public Relations
     * 8 = Marketing Department
     * 9 = IT Department
     * 10 = EDP Team
     * 11 = Logistics
     * 12 = Warehousing Department
     * 13 = Export Department
     * 14 = Import Department
     * 15 = Customer Service
     * 16 = Technical Support Team
     * 17 = Human Resources
     * 18 = Accounting Department
     * 19 = Financial Department
     * 20 = Legal Department
     * 21 = Secretary's Office
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
