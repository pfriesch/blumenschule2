<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

class Attribute
{
    /**
     *  The unique ID of the attribute.
     * @var integer
     */
    public $id;

    /**
     *  The back end name of the attribute. The name must be unique and must not contain commas, colons, semicolons or quotation marks. It is not visible in the plentymarkets front end.
     * @var string
     */
    public $backendName;

    /**
     *  The position of the attribute. Attributes are displayed in the attribute overview in ascending order by position.
     * @var integer
     */
    public $position;

    /**
     *  Flag that indicates if the surcharge is percental.
     * @var boolean
     */
    public $isSurchargePercental;

    /**
     *  Flag that indicates if an image can be linked to the attribute.
     * @var boolean
     */
    public $isLinkableToImage;

    /**
     *  The attribute of the market Amazon that this attribute is liked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values.
     * @var string
     */
    public $amazonAttribute;

    /**
     *  The attribute of the market Fruugo that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market.
     * @var string
     */
    public $fruugoAttribute;

    /**
     *  The attribute of the market PIXmania that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values.
     * @var integer
     */
    public $pixmaniaAttribute;

    /**
     *  The attribute of the market OTTO that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market.
     * @var string
     */
    public $ottoAttribute;

    /**
     *  The attribute of the market Google Shopping that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market.
     * @var string
     */
    public $googleShoppingAttribute;

    /**
     *  The component of the market neckermann AT EP that this attribute is linked to. To list variations on this market, attributes must be linked to one of the components specified by the market. Check documentation of the market for permitted values.
     * @var integer
     */
    public $neckermannAtEpAttribute;

    /**
     *  How customers can select the attribute in the front end of a client. To allow attribute selection by check mark, attribute availability must be checked on the client side.
     * @var string
     */
    public $typeOfSelectionInOnlineStore;

    /**
     *  The attribute of the market La Redoute that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values.
     * @var integer
     */
    public $laRedouteAttribute;

    /**
     *  Flag that indicates if the attribute can be grouped in item lists. If yes, variations with this attribute can be shown in the ItemViewCategoriesList template first. Other attributes are nested and can only be selected after this attribute has been selected.
     * @var boolean
     */
    public $isGroupable;

}
