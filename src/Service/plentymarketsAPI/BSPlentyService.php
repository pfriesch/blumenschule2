<?php


namespace App\Service\plentymarketsAPI;

use App\Service\plentymarketsAPI\Api\ItemApi;
use App\Service\plentymarketsAPI\Api\OrderApi;

use App\Service\plentymarketsAPI\Api\WarehouseApi;
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

    private $defaultWarehouseId = null;

//    private $defaultStorageLocations = null;


    public function getStorageLocations()
    {

//
//    $config = Configuration::getDefaultConfiguration()->authenticated();
//    $warehouseApiInstance = new WarehouseApi(
//        new Client(),
//        $config
//    );
//
//    try {
//        $storageLocations = $warehouseApiInstance->restWarehousesWarehouseIdLocationsGet($this->getDefaultWarehouseId());
//    } catch (ApiException $e) {
//        throw new Exception("Exception: " . $e);
//    }
//
//    return array_map(function ($e) {
//        return ["id" => $e->id, "label" => $e->label];
//    }, $storageLocations->entries);


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


    private function getDefaultWarehouseId()
    {

        if ($this->defaultWarehouseId == null) {


//        $config = Configuration::getDefaultConfiguration()->authenticated();
//
//        $stockApiInstance = new StockManagementApi(
//            new Client(),
//            $config
//        );
//        try {
//            $warehouses = $stockApiInstance->restStockmanagementWarehousesGet();
//            if ($warehouses[0]->name != "Blumenschule"){
//                throw new Exception("Default warehouse wrong!");
//
//            }
//            $this->defaultWarehouseId = $warehouses[0]->id;
//        } catch (Exception $e) {
//            throw new Exception('Exception when calling $stockApiInstance->restStockmanagementWarehousesGet: ' . $e->getMessage());
//        }

//
//        try {
//            $this->defaultStorageLocations = $stockApiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet($this->defaultWarehouseId);
//        } catch (Exception $e) {
//            throw new Exception('Exception when calling $stockApiInstance->restStockmanagementWarehousesWarehouseIdManagementRacksRackIdShelvesShelfIdStorageLocationsGet: ' . $e->getMessage());
////        }


//        Looked up manually and shouldn't change, otherwise use code above
            $this->defaultWarehouseId = 11;
        }
        return $this->defaultWarehouseId;


    }

//    public function doGetOrdersWithState($state)
//    {
//
//
//// Configure OAuth2 access token for authorization: oAuth2
//        $config = Configuration::getDefaultConfiguration()->authenticated();
//
//        $apiInstance = new OrderApi(
//            new Client(),
//            $config
//        );
//        $order_type = null; // string | Filter that restricts the search result to orders of specific order types. The id of the order types must be specified. Several order types can be entered seperated by commas. @see order model typeId
//        $contact_id = null; // int | Filter that restricts the search result to orders of one order contact. The id of the contact must be specified.
//        $referrer_id = null; // double | Filter that restricts the search result to orders from one order referrer. The id of the order referrer must be specified.
//        $shipping_profile_id = null; // int | Filter that restricts the search result to orders with a specific shipping profile. The id of shipping profile must be specified.
//        $owner_user_id = null; // int | Filter that restricts the search result to orders of one owner. The user id of the owner must be specified.
//        $warehouse_id = null; // int | Filter that restricts the search result to orders with a specific main warehouse. The id of the warehouse must be specified.
//        $is_ebay_plus = null; // bool | Filter that restricts the search result to orders with ebay plus.
//        $included_variation = null; // int | Filter that restricts the search result to orders with a certain variation. The id of the variation must be specified.
//        $included_item = null; // int | Filter that restricts the search result to orders with a certain item. The id of the item must be specified.
//        $order_ids = null; // string[] | Filter that restricts the search result to orders. To list several orders the orders must be separated by comma.
//        $country_id = null; // int | Filter that restricts the search result to orders of one country. The id of the country must be specified.
//        $order_item_name = null; // string | Filter that restricts the search results to orders with a certain item name. The name of the item must be specified.
//        $variation_number = null; // int | Filter that restricts the search results to orders with a specific variation number. The number of the variation must be specified.
//        $sender_contact = null; // int | Filter that restricts the search results to orders with a specific sender of the type contact. The id of the sender must be specified.
//        $sender_warehouse = null; // int | Filter that restricts the search results to orders with a specific sender of the type warehouse. The id of the sender must be specified.
//        $receiver_contact = null; // int | Filter that restricts the search results to orders with a specific receiver of the type contact. The id of the receiver must be specified.
//        $receiver_warehouse = null; // int | Filter that restricts the search results to orders with a specific receiver of the type warehouse. The id of the receiver must be specified.
//        $external_order_id = null; // string | Filter that restricts the search result to an external order id. The external order id must be specified.
//        $client_id = null; // int | Filter that restricts the search result to order from one client. The id of the client must be specified.
//        $payment_status = null; // string | Filter that restricts the search result to order with a specific payment status. Valid values are unpaid,partlyPaid,fullyPaid,overpaid. One value must be specified.
//        $updated_at_from = null; // string | Filter that restricts the search result to orders that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
//        $updated_at_to = null; // string | Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
//        $created_at_from = null; // string | Filter that restricts the search result to orders that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
//        $created_at_to = null; // string | Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
//        $paid_at_from = null; // string | Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
//        $paid_at_to = null; // string | Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
//        $outgoing_items_booked_at_from = null; // string | Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
//        $outgoing_items_booked_at_to = null; // string | Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
//        $status_from = null; // double | Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified.
//        $status_to = null; // double | Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified.
//        $has_document = null; // string | Filter that restricts the search result to orders which hold the given document type. Valid values are <i>multi_invoice</i>, <i>multi_credit_note</i>, <i>success_confirmation</i>, <i>return_note</i>, <i>pickup_delivery</i>, <i>repair_bill</i>, <i>dunning_letter</i>, <i>offer</i>, <i>order_confirmation</i>, <i>credit_note</i>, <i>correction_document</i>, <i>delivery_note</i>, <i>invoice</i>, <i>invoice_external</i>, <i>receipt</i>
//        $has_document_number = null; // string | Filter that restricts the search result to orders which hold documents with given number.
//        $page = null; // int | The page to get. The default page that will be returned is page 1.
//        $items_per_page = null; // int | The number of orders to be displayed per page. The default number of orders per page is 50.
//        $with = null; // string[] | Load additional relations for an order. Currently possible are:     <ul>     <li>'addresses' = The address objects that are associated with the order.</li>     <li>'relations' = The order relation reference instances that are associated with the order. These instances contain information such as the the reference type, the ID of the reference and the relation itself.</li>     <li>'comments' = The order comments.</li>     <li>'location' = The accounting location of the order.</li>     <li>'payments' = The payments that are associated with the order.</li>     <li>'documents' = The documents that are associated with the order.</li>     <li>'contactSender' = The associated contact for the contact-sender relation.</li>     <li>'contactReceiver' = The associated contact for the contact-receiver relation.</li>     <li>'warehouseSender' = The associated warehouse for the warehouse-sender relation.</li>     <li>'warehouseReceiver' = The associated warehouse for the warehouse-receiver relation.</li>     <li>'orderItems.variation' = The variation that is associated with the order item.</li>     <li>'orderItems.giftCardCodes' = The gift card codes that are associated with the order item.</li>     <li>'orderItems.transactions' = The transactions that are associated with the order item.</li>     <li>'orderItems.serialNumbers' = The serial numbers that are associated with the order item.</li>     <li>'orderItems.variationBarcodes' = The barcodes that are associated with variation of the order item.</li>     <li>'orderItems.comments' = The comments that are associated with the order item.</li>     <li>'originOrderReferences' = The references to other orders, e.g. returns or credit notes, associated with this order.</li>     <li><b>deprecated</b> 'orderItems.warehouseLocations' = The warehouse locations that are associated with the order item.</li>     </ul>     Example: <code>?with[]=addresses&with[]=orderItems.variation</code>
//
//
//        $status_from = $state;
////        $status_from = 0; // TODO remove
//        $status_to = $state;
////        $with = [ 'contactSender', 'contactReceiver', 'orderItems.variation', 'orderItems.transactions', 'orderItems.serialNumbers',
////            'orderItems.variationBarcodes', 'orderItems.comments' . 'originOrderReferences'];
//        $with = ['addresses'];
//
//        try {
//            $result = $apiInstance->restOrdersGet($order_type, $contact_id, $referrer_id, $shipping_profile_id, $owner_user_id, $warehouse_id, $is_ebay_plus, $included_variation, $included_item, $order_ids, $country_id, $order_item_name, $variation_number, $sender_contact, $sender_warehouse, $receiver_contact, $receiver_warehouse, $external_order_id, $client_id, $payment_status, $updated_at_from, $updated_at_to, $created_at_from, $created_at_to, $paid_at_from, $paid_at_to, $outgoing_items_booked_at_from, $outgoing_items_booked_at_to, $status_from, $status_to, $has_document, $has_document_number, $page, $items_per_page, $with);
////            print_r($result);
//        } catch (Exception $e) {
//            echo 'Exception when calling OrderApi->restOrdersGet: ', $e->getMessage(), PHP_EOL;
//        }
//
//        return $result;
//    }
//
//    public function doSetOrderStatus($rOrder, $state)
//    {
//        throw new Exception("setting order status not implemented");
//    }
//
//    public function doGetOrdersInvoiceDocumentURLs($orderID)
//    {
//        throw new Exception("doGetOrdersInvoiceDocumentURLs not yet implemented");
//
//    }
//
//    public function doGetCustomers(array $array)
//    {
//        throw new Exception("doGetOrdersInvoiceDocumentURLs not yet implemented");
//
//    }

    /**
     * @param $name
     * @return Model\Plenty\Modules\Item\Item\ItemPaginated
     */
    public function searchItemsByName($search_name)
    {

        $config = Configuration::getDefaultConfiguration()->authenticated();
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
            $result = $apiInstance->restItemsGet($with, $lang, $page, $items_per_page, $search_name, $manufacturer_id, $tag_id, $flag_one, $flag_two, $updated_between, $variation_updated_between, $variation_related_updated_between);
        } catch (Exception $e) {
            echo 'Exception when calling ItemApi->restItemsGet: ', $e->getMessage(), PHP_EOL;
        }

//        TODO add stock to search display?
        return $result;
    }


    /**
     * @param $item_id
     * @return Item
     */
    public function getItemById($item_id)
    {
// Configure OAuth2 access token for authorization: oAuth2
        $config = Configuration::getDefaultConfiguration()->authenticated();

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
            echo 'Exception when calling ItemApi->restItemsItemIdGet: ', $e->getMessage(), PHP_EOL;
        }


        return $result;

    }

    public function getItemVariationsById($item_id)
    {
        $config = Configuration::getDefaultConfiguration()->authenticated();

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

    public function getItemByVariantenNrStorageLocationStock($article_id, $variation_id)
    {
        $config = Configuration::getDefaultConfiguration()->authenticated();

        $itemApiInstance = new ItemApi(
            new Client(),
            $config
        );

        $page = 0;
        $items_per_page = 50;
        $id = 0;

        $resultStorageLocation = $itemApiInstance->restItemsIdVariationsVariationIdStockStorageLocationsGet($article_id, $variation_id, $page, $items_per_page, $id);


//        $resultVariationStock = array_values(array_filter(
//            $resultVariation->stock,
//            function ($e) use (&$variation_id) {
//                return $e->variationId == $variation_id;
//            }
//        ))[0];


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

        $allStorageLocations = $this->getStorageLocations();
        $resultVariationStock = array_values(array_filter(
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

        if (count($resultVariationStock) > 1) {
            throw new Exception("Item is in more than one storage location. We do not model this case");
        } else {
            $resultVariationStock = $resultVariationStock[0];
        }
        return $resultVariationStock;
    }


    public function getItemByVariantenNr($article_id, $variation_id)
    {
// Configure OAuth2 access token for authorization: oAuth2
        $config = Configuration::getDefaultConfiguration()->authenticated();

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

        $resultVariationStock = $this->getItemByVariantenNrStorageLocationStock($article_id, $variation_id);


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
        return $item;

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
        $config = Configuration::getDefaultConfiguration()->authenticated();

        $itemApiInstance = new ItemApi(
            new Client(),
            $config
        );

        $now = new DateTime();
//        $now->sub(new DateInterval('PT12H'));
        $now = (string)$now->format(DateTime::W3C);

        $resultVariationStock = $this->getItemByVariantenNrStorageLocationStock($article_id, $variation_id);


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

        $resultVariationStock = $this->getItemByVariantenNrStorageLocationStock($article_id, $variation_id);

        $defaultWarehouseId = $this->getDefaultWarehouseId();
        $resultStock = array_filter($resultStock, function ($e) use (&$defaultWarehouseId, &$variation_id) {
            return $e->warehouseId == $defaultWarehouseId && $e->variationId == $variation_id;
        });

        return (object)["article_id" => $article_id, "variation_id" => $variation_id, "stock" => $resultVariationStock];


    }


//
//    public function getStorageLocation($article_id, $variation_id)
//    {
//
//        $config = Configuration::getDefaultConfiguration()->authenticated();
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


    public function correctStock($article_id, $variation_id, $new_quantity, $storageLocationId)
    {

        $config = Configuration::getDefaultConfiguration()->authenticated();

        $itemApiInstance = new ItemApi(
            new Client(),
            $config
        );
//        $page = 0;
//        $items_per_page = 50;
//        $id = 0;

//        $resultStorageLocation = $itemApiInstance->restItemsIdVariationsVariationIdStockStorageLocationsGet($article_id, $variation_id, $page, $items_per_page, $id);

//        $resultStorageLocationId = array_values(array_filter(
//            $resultStorageLocation->entries,
//            function ($e) use (&$variation_id) {
//                return $e->variationId == $variation_id && $e->storageLocationId > 0;
//            }
//        ));
//        if (count($resultStorageLocationId) > 1) {
//            throw new Exception("Item with id " . $article_id . " and variation id " . $variation_id . " has more than one storage location");
//        }
//        $resultStorageLocationId = $resultStorageLocationId[0]->storageLocationId;


        $resultStock = $itemApiInstance->restItemsIdVariationsVariationIdStockCorrectionPut($article_id, $variation_id, $this->getDefaultWarehouseId(), $storageLocationId, $new_quantity);


//        $defaultWarehouseId = $this->getDefaultWarehouseId();
//        $resultStock = array_filter($resultStock, function ($e) use (&$defaultWarehouseId, &$variation_id) {
//            return $e->warehouseId == $defaultWarehouseId && $e->variationId == $variation_id;
//        });

        return $this->getItemByVariantenNrStorageLocationStock($article_id, $variation_id);
    }
}