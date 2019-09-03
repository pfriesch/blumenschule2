<?php


namespace App\Service\plentymarketsAPI;

use App\Service\plentymarketsAPI\Api\ItemApi;

use App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Item\Item;
use DateTime;
use Exception;
use GuzzleHttp\Client;

/**
 * High level API Service to access the Plentymarkets shop system
 *
 *
 * Class BSPlentyService
 * @package App\Service\plentymarketsAPI
 */
class BSPlentyService
{

    /**
     * @var Configuration
     */
    private $config;

    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    public function getStorageLocationMap()
    {
        //     No need to fetch the storage locations all the time since they won't change anytime soon
        $storageLocationMap = [
            42 => "Laden",
            43 => "Haus-1",
            44 => "Haus-3",
            45 => "Staudenbeet1",
            46 => "Block1",
            47 => "Sonstige1",
        ];
        return $storageLocationMap;
    }

    public function getStorageLocations()
    {
        //     No need to fetch the storage locations all the time since they won't change anytime soon
        $storageLocations = [
            ["id" => 42, "label" => "Laden"],
            ["id" => 43, "label" => "Haus-1"],
            ["id" => 44, "label" => "Haus-3"],
            ["id" => 45, "label" => "Staudenbeet1"],
            ["id" => 46, "label" => "Block1"],
            ["id" => 47, "label" => "Sonstige1"],
        ];
        return $storageLocations;
    }

    public function getStorageLocationIds()
    {
        //     No need to fetch the storage locations all the time since they won't change anytime soon
        $storageLocationIds = [42, 43, 44, 45, 46, 47];
        return $storageLocationIds;
    }


    private function getDefaultWarehouseId()
    {
        //   No need to fetch the warehouse, since it should not change.
        return 11;
    }


    /**
     * @param $name
     * @return Model\Plenty\Modules\Item\Item\ItemPaginated
     */
    public function searchItemsByName($search_name)
    {

        $config = $this->config->authenticated();
        $apiInstance = new ItemApi(
            new Client(),
            $config
        );

        $with = "variations"; // string | Includes the specified variation information in the results. The following parameters are availabel: itemProperties, itemCrossSelling, variations, itemImages, itemShippingProfiles, ebayTitles
//        $with = null; // string | Includes the specified variation information in the results. The following parameters are availabel: itemProperties, itemCrossSelling, variations, itemImages, itemShippingProfiles, ebayTitles
        $lang = "de"; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
        $page = 0; // int | Limits the results to a specific page. The page number must be specified.
        $items_per_page = 20; // int | Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
//        $name = "name_example"; // string | Filter restricts the list of results to items with the specified item name. An item name must be specified.
        $manufacturer_id = null; // string | Filter restricts the list of results to items with the specified manufacturerId.
        $tag_id = null; // int | Filter restricts the list of results to items with the specified tagId. More than one ID should be separated by commas.
        $flag_one = null; // int | Filter restricts the list of results to items with the specified flagOne.
        $flag_two = null; // int | Filter restricts the list of results to items with the specified flagTwo.
        $updated_between = null; // string | Filter restricts the list of results to items updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items updated since 2016-01-01. The PHP function strtotime is also supported.
        $variation_updated_between = null; // string | Filter restricts the list of results to items with variations that were updated during the specified period. The end date (to) is optional. If no end date is specified, items with variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items with variations that were updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items with variations that were updated since 2016-01-01. The PHP function strtotime is also supported.
        $variation_related_updated_between = null; // string | Filter restricts the list of results to items with variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.

        try {
            $result = $apiInstance->restItemsGet($with, $lang, $page, $items_per_page, "like:" . $search_name, $manufacturer_id, $tag_id, $flag_one, $flag_two, $updated_between, $variation_updated_between, $variation_related_updated_between);
        } catch (Exception $e) {
            echo 'Exception when calling ItemApi->restItemsGet: ', $e->getMessage(), PHP_EOL;
        }

        return $result;
    }


    /**
     * @param $item_id
     * @return Item
     */
    public function getItemById($item_id)
    {
// Configure OAuth2 access token for authorization: oAuth2
        $config = $this->config->authenticated();

        $apiInstance = new ItemApi(
            new Client(),
            $config
        );
//        $item_id = 2474; // int |
//        $item_id = $itemId
        $lang = "de"; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.

        try {
            $result = $apiInstance->restItemsItemIdGet($item_id, $lang);
        } catch (Exception $e) {
            throw new Exception('Exception when calling ItemApi->restItemsItemIdGet: ' . $e->getMessage());
        }
        return $result;

    }

    public function getItemVariationsById($item_id)
    {
        $config = $this->config->authenticated();

        $apiInstance = new ItemApi(
            new Client(),
            $config
        );

//        $item_id = 56; // int |
        $with = "variationSalesPrices,images,itemImages,parent,item,stock"; // string | Includes the specified variation information in the results. The following parameters are availabel: <ul><li>properties</b> = The properties linked to the variation</li><li>variationProperties</b> = The properties linked to the variation</li><li>variationBarcodes</b> = The barcode linked to the variation and the saved code</li><li>variationBundleComponents</b> = The bundle components of the variation and their quantities</li><li>variationComponentBundles</b> = The bundles that this variation is a component of</li><li>variationSalesPrices</b> = The sales prices linked to the variation and the saved price</li><li>marketItemNumbers</b> = The market ident number of the variation</li><li>variationCategories</b> = The categories linked to the variation</li><li>variationClients</b> = The clients (stores) for which the variation is activated</li><li>variationMarkets</b> = The markets for which the variation is activated </li><li>variationDefaultCategory</b> = The default category of the variation</li><li>variationSuppliers</b> = The supplier data associated with the variation</li><li>variationWarehouses</b> = The warehouse data associated with the variation</li><li>images</b> = The images linked to the variation</li><li>itemImages</b> = The images linked to the item</li><li>variationAttributeValues</b> = The attribute values of the variation</li><li>variationSkus</b> = The SKU data associated with the variation</li><li>variationAdditionalSkus</b> = The additional SKU data associated with the variation</li><li>unit</b> = The unit assigned to the variation</li><li>parent</b> = The main variation of the variation. Value is null if this variation is the item's main variation.</li><li>item</b> = The item of the variation</li><li>stock</b> = The stock data of the variation</li></ul> For example, specifying the parameters variationCategories and variationDefaultCategory will include the default category and all other categories the variations are linked to. More than one parameter should be separated by commas.
        $lang = "de"; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
        $page = 0; // int | Limits the results to a specific page. The page number must be specified.
        $items_per_page = 50; // int | Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
        $is_main = false; // bool | Filter restricts the list of results to variations that are main variations.
        $is_active = false; // bool | Filter restricts the list of results to variations that are active.
        $barcode = null; // string | Filter restricts the list of results to variations with the specified barcode. A barcode must be specified.
        $number_exact = null; // string | Filter restricts the list of results to the variation with the variation number specified.
        $number_fuzzy = null; // string | Filter restricts the list of results to variations with numbers that contain the variation number specified (SQL LIKE operator). For example, if variations with variation numbers 1 to 400 exist in the system, filtering by 12 will list variation numbers 12, 112, 120-129, 212 and 312.
        $is_bundle = null; // bool | Filter restricts the list of results to variations to which variations were added to create a bundle.
        $supplier_number = null; // string | Filter restricts the list of results to variations with the specified supplier number. A supplier number must be specified.
        $manufacturer_id = null; // int | Filter restricts the list of results to variations with the specified manufacturer ID.
        $updated_between = null; // string | Filter restricts the list of results to variations updated during the specified period. The end date (to) is optional. If no end date is specified, variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?updatedBetween=1451606400,1456790400 will list variations updated between 2016-01-01 and 2016-03-01. .../variations?updatedBetween=1451606400 will list variations updated since 2016-01-01. The PHP function strtotime is also supported.
        $created_between = null; // string | Filter restricts the list of results to variations created during the specified period. The end date (to) is optional. If no end date is specified, variations created between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../variations?createdBetween=1451606400,1456790400 will list variations created between 2016-01-01 and 2016-03-01. .../variations?createdBetween=1451606400 will list variations created since 2016-01-01. The PHP function strtotime is also supported.
        $related_updated_between = null; // string | Filter restricts the list of results to those variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.

        try {
            $resultVariation = $apiInstance->restItemsItemIdVariationsGet($item_id, $with, $lang, $page, $items_per_page, $is_main, $is_active, $barcode, $number_exact, $number_fuzzy, $is_bundle, $supplier_number, $manufacturer_id, $updated_between, $created_between, $related_updated_between);
        } catch (Exception $e) {
            throw new Exception('Exception when calling ItemApi->restItemsItemIdGet: ' . $e->getMessage());
        }

        return $resultVariation;
    }

    public function getItemByVariantenNrStorageLocationStock($article_id, $variation_id, $valid = true)
    {
        $config = $this->config->authenticated();

        $itemApiInstance = new ItemApi(
            new Client(),
            $config
        );

        $page = 0;
        $items_per_page = 50;
        $id = 0;

        $resultStorageLocation = $itemApiInstance->restItemsIdVariationsVariationIdStockStorageLocationsGet($article_id, $variation_id, $page, $items_per_page, $id);


        // Map to better to handle representation
        $resultVariationStock = array_values(array_map(
            function ($e) use (&$variation_id) {
                if ($e->variationId != $variation_id) {
                    throw new Exception("wrong variation id when getting stock.");
                }
                $stock = array();
                $stock["storageLocationId"] = $e->storageLocationId;
                $stock["quantity"] = $e->quantity;
                return $stock;
            }, $resultStorageLocation->entries
        ));

        $allStorageLocationIds = $this->getStorageLocationIds();


        // Only allow defined storage locations
        $resultVariationStock = array_values(array_filter(
            $resultVariationStock,
            function ($e) use (&$allStorageLocationIds) {
                return in_array($e["storageLocationId"], $allStorageLocationIds);
            }
        ));


        $allStorageLocations = $this->getStorageLocations();

        //Get Stock location with max quantity
        $resultVariationStockMaxLocation = array_reduce($resultVariationStock, function ($a, $b) {
            if ($a) {
                if ($a["quantity"] > $b["quantity"]) {
                    return ($a);
                } else {
                    return ($b);
                }
            } else {
                return $b;
            }
        });

        // Get all storage locations with current stock (greater 0)
        $resultVariationStockGreaterZero = array_values(array_filter(
            $resultVariationStock,
            function ($e) use (&$allStorageLocations) {
                foreach ($allStorageLocations as $location) {
                    if ($e["storageLocationId"] == $location['id'] and $e["quantity"] > 0) {
                        return true;
                    }
                }
                return false;
            }
        ));

        $notification = "";
        if ($valid) {
            if (count($resultVariationStockGreaterZero) > 1) {
                // Since we only allow one storage location, remove stock the locations with less stock

                //TODO do as batch request
                $removedSockAtStorageLocationId = [];
                foreach ($resultVariationStockGreaterZero as $location) {
                    if ($location["storageLocationId"] != $resultVariationStockMaxLocation["storageLocationId"]) {
                        $this->correctStock($article_id, $variation_id, 0, $location["storageLocationId"], $valid = false);
                        array_push($removedSockAtStorageLocationId, $location["storageLocationId"]);
                    }
                }
                //TODO fix this horrible notification hack with retrun and http header
                $notification = 'Nur ein Lager erlaubt! Bestand in den Lagern: "' . implode(", ", array_map(function ($storageLocationId) {
                        return $this->getStorageLocationMap()[$storageLocationId];

                    }, $removedSockAtStorageLocationId)) . '" auf Null (0) gesetzt!';
            } else if (count($resultVariationStockGreaterZero) == 0) {

//            ["id" => 47, "label" => "Sonstige1"],
                $miscStorageLocationID = 47;
                $initQuantity = 5;

                $this->correctStock($article_id, $variation_id, $initQuantity, $miscStorageLocationID, $valid = false);
                $resultVariationStockMaxLocation = [
                    "storageLocationId" => $miscStorageLocationID,
                    "quantity" => $initQuantity
                ];

                //TODO fix this horrible notification hack
                $notification = "Dieser Artikel hatte noch kein Bestand! Daher wurde er dem Lager \"" .
                    $this->getStorageLocationMap()[$miscStorageLocationID] .
                    "\" mit einem Bestand von " . $initQuantity . " hinzugefuegt.";
            }
        }

        return [$resultVariationStockMaxLocation, $notification];
    }


    public function getItemByVariantenNr($article_id, $variation_id)
    {
// Configure OAuth2 access token for authorization: oAuth2
        $config = $this->config->authenticated();

        $itemApiInstance = new ItemApi(
            new Client(),
            $config
        );
//        $id = $article_id; // int |
//        $variation_id = $variation_id; // int |

        $result = $this->getItemById($article_id);
        $resultVariation = $this->getItemVariationsById($article_id);

//        try {
//            $resultImage = $itemApiInstance->restItemsIdImagesGet($article_id, null);
//        } catch (Exception $e) {
//            throw new Exception('Exception when calling ItemApi->restItemsIdImagesGet: ' . $e->getMessage());
//        }

//        try {
//            $resultPrice = $itemApiInstance->restItemsIdVariationsVariationIdVariationSalesPricesGet($article_id, $variation_id);
////            print_r($result);
//
//        } catch (Exception $e) {
//            throw new Exception('Exception when calling ItemApi->restItemsIdVariationsVariationIdVariationSalesPricesGet: ' . $e->getMessage());
//        }

//        try {
//            $resultStock = $itemApiInstance->restItemsIdVariationsVariationIdStockGet($article_id, $variation_id, 0);
////            print_r($result);
//
//            $defaultWarehouseId = $this->getDefaultWarehouseId();
//            $resultStock = array_filter($resultStock, function ($e) use (&$defaultWarehouseId, &$variation_id) {
//                return $e->warehouseId == $defaultWarehouseId && $e->variationId == $variation_id;
//            });
//        } catch (Exception $e) {
//            throw new Exception('Exception when calling ItemApi->restItemsIdVariationsVariationIdStockGet: ' . $e->getMessage());
//        }


        $item = array();
        $item['article_id'] = $article_id;
        $item['variant_id'] = $variation_id;


        $resultVariation = array_values(array_filter(
            $resultVariation->entries,
            function ($e) use (&$variation_id) {
                return $e->id == $variation_id;
            }
        ))[0];

        [$resultVariationStock, $notification] = $this->getItemByVariantenNrStorageLocationStock($article_id, $variation_id);


        $item['code'] = $resultVariation->number;
        $item['name'] = $result->getName();
        $item['name_botanic'] = $result->getNameBotanic();
        $item['label_text'] = $result->getLabelText();
        $item['description_short'] = $result->getDescription();
        $item['price'] = $resultVariation->variationSalesPrices[0]->price;
        $item['stock'] = $resultVariationStock;
        if (count($resultVariation->itemImages) > 0) {
            $item['picurl'] = $resultVariation->itemImages[0]->url;
        } else {
            $item['picurl'] = "";
        }
        return [$item, $notification];

    }

//    public function doGetMethodOfPayments()
//    {
//        throw new Exception("doGetOrdersInvoiceDocumentURLs not yet implemented");
//
//    }
//
//    public function doAddCustomers($form)
//    {
//        throw new Exception("adding coustomers not implemented");
//
//    }
//
//    public function doAddOrders(\App\Controller\RequestAddOrders $pm_orders)
//    {
//        throw new Exception("adding orders not implemented");
//
//    }
//
//    public function doAddItemsBase($getCode, int $int, $getName, $getLatein, $getLabeltext)
//    {
//        throw new Exception("adding items not implemented");
//
//    }

    /**
     * @param $article_id
     * @param $variation_id
     * @param $quantity
     * @return object
     * @throws Exception
     */
    public function bookIncommingStock($article_id, $variation_id, $quantity)
    {
        $config = $this->config->authenticated();

        $itemApiInstance = new ItemApi(
            new Client(),
            $config
        );

        $now = new DateTime();
//        $now->sub(new DateInterval('PT12H'));
        $now = (string)$now->format(DateTime::W3C);

        [$resultVariationStock, $notification] = $this->getItemByVariantenNrStorageLocationStock($article_id, $variation_id);


        $body = (object)[
            "warehouseId" => $this->getDefaultWarehouseId(),
            "deliveredAt" => $now,
            "currency" => "EUR",

            "quantity" => $quantity,
            "storageLocationId" => $resultVariationStock['storageLocationId'],
//    The ID of the reason. The following IDs are available:
//
//    101: Incoming items
//    102: Booked in by stocktaking
//    104: Rebooked into stock because no production errors were found
//    106: Maculation canceled
//    107: Packing error, items are re-booked
//    109: Incoming items (logistics)
//    115: Incoming items (second choice)
//    116: Booked in by correction
//    117: Unpacked item
//    180: Incoming items (purchase order)
//    181: Incoming items (warehousing)
            "reasonId" => 101];


        $resultStock = $itemApiInstance->restItemsIdVariationsVariationIdStockBookIncomingItemsPut($article_id, $variation_id, 0, $body);

        [$resultVariationStock, $notification2] = $this->getItemByVariantenNrStorageLocationStock($article_id, $variation_id);

        $defaultWarehouseId = $this->getDefaultWarehouseId();
        $resultStock = array_filter($resultStock, function ($e) use (&$defaultWarehouseId, &$variation_id) {
            return $e->warehouseId == $defaultWarehouseId && $e->variationId == $variation_id;
        });

        return [(object)["article_id" => $article_id, "variation_id" => $variation_id, "stock" => $resultVariationStock], $notification . $notification2];


    }


//
//    public function getStorageLocation($article_id, $variation_id)
//    {
//
//        $config = $this->config->authenticated();
//
//        $itemApiInstance = new ItemApi(
//            new Client(),
//            $config
//        );
//        $page = 0;
//        $items_per_page = 50;
//        $id = 0;
//
//        $resultStorageLocation = $itemApiInstance->restItemsIdVariationsVariationIdStockStorageLocationsGet($article_id, $variation_id, $page, $items_per_page, $id);
//
//    }


    public function correctStock($article_id, $variation_id, $new_quantity, $storageLocationId, $valid = true)
    {

        $config = $this->config->authenticated();

        $itemApiInstance = new ItemApi(
            new Client(),
            $config
        );

        $resultStock = $itemApiInstance->restItemsIdVariationsVariationIdStockCorrectionPut($article_id, $variation_id, $this->getDefaultWarehouseId(), $storageLocationId, $new_quantity);

        [$result, $notification] = $this->getItemByVariantenNrStorageLocationStock($article_id, $variation_id, $valid);
        return [$result, $notification];
    }

}