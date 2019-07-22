<?php


namespace BSApp\Service\plentymarketsAPI;

use BSApp\Service\plentymarketsAPI\Api\OrderApi;
use Exception;
use GuzzleHttp\Client;

/**
 * High level API Service to access the Plentymarkets shop system
 *
 *
 * Class BSPlentyService
 * @package BSApp\Service\plentymarketsAPI
 */
class BSPlentyService
{

    public function doGetOrdersWithState($state)
    {


// Configure OAuth2 access token for authorization: oAuth2
        $config = Configuration::getDefaultConfiguration()->authenticated();

        $apiInstance = new OrderApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            new Client(),
            $config
        );
        $order_type = null; // string | Filter that restricts the search result to orders of specific order types. The id of the order types must be specified. Several order types can be entered seperated by commas. @see order model typeId
        $contact_id = null; // int | Filter that restricts the search result to orders of one order contact. The id of the contact must be specified.
        $referrer_id = null; // double | Filter that restricts the search result to orders from one order referrer. The id of the order referrer must be specified.
        $shipping_profile_id = null; // int | Filter that restricts the search result to orders with a specific shipping profile. The id of shipping profile must be specified.
        $owner_user_id = null; // int | Filter that restricts the search result to orders of one owner. The user id of the owner must be specified.
        $warehouse_id = null; // int | Filter that restricts the search result to orders with a specific main warehouse. The id of the warehouse must be specified.
        $is_ebay_plus = null; // bool | Filter that restricts the search result to orders with ebay plus.
        $included_variation = null; // int | Filter that restricts the search result to orders with a certain variation. The id of the variation must be specified.
        $included_item = null; // int | Filter that restricts the search result to orders with a certain item. The id of the item must be specified.
        $order_ids = null; // string[] | Filter that restricts the search result to orders. To list several orders the orders must be separated by comma.
        $country_id = null; // int | Filter that restricts the search result to orders of one country. The id of the country must be specified.
        $order_item_name = null; // string | Filter that restricts the search results to orders with a certain item name. The name of the item must be specified.
        $variation_number = null; // int | Filter that restricts the search results to orders with a specific variation number. The number of the variation must be specified.
        $sender_contact = null; // int | Filter that restricts the search results to orders with a specific sender of the type contact. The id of the sender must be specified.
        $sender_warehouse = null; // int | Filter that restricts the search results to orders with a specific sender of the type warehouse. The id of the sender must be specified.
        $receiver_contact = null; // int | Filter that restricts the search results to orders with a specific receiver of the type contact. The id of the receiver must be specified.
        $receiver_warehouse = null; // int | Filter that restricts the search results to orders with a specific receiver of the type warehouse. The id of the receiver must be specified.
        $external_order_id = null; // string | Filter that restricts the search result to an external order id. The external order id must be specified.
        $client_id = null; // int | Filter that restricts the search result to order from one client. The id of the client must be specified.
        $payment_status = null; // string | Filter that restricts the search result to order with a specific payment status. Valid values are unpaid,partlyPaid,fullyPaid,overpaid. One value must be specified.
        $updated_at_from = null; // string | Filter that restricts the search result to orders that were last updated on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
        $updated_at_to = null; // string | Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
        $created_at_from = null; // string | Filter that restricts the search result to orders that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
        $created_at_to = null; // string | Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
        $paid_at_from = null; // string | Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
        $paid_at_to = null; // string | Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
        $outgoing_items_booked_at_from = null; // string | Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
        $outgoing_items_booked_at_to = null; // string | Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
        $status_from = null; // double | Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified.
        $status_to = null; // double | Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified.
        $has_document = null; // string | Filter that restricts the search result to orders which hold the given document type. Valid values are <i>multi_invoice</i>, <i>multi_credit_note</i>, <i>success_confirmation</i>, <i>return_note</i>, <i>pickup_delivery</i>, <i>repair_bill</i>, <i>dunning_letter</i>, <i>offer</i>, <i>order_confirmation</i>, <i>credit_note</i>, <i>correction_document</i>, <i>delivery_note</i>, <i>invoice</i>, <i>invoice_external</i>, <i>receipt</i>
        $has_document_number = null; // string | Filter that restricts the search result to orders which hold documents with given number.
        $page = null; // int | The page to get. The default page that will be returned is page 1.
        $items_per_page = null; // int | The number of orders to be displayed per page. The default number of orders per page is 50.
        $with = null; // string[] | Load additional relations for an order. Currently possible are:     <ul>     <li>'addresses' = The address objects that are associated with the order.</li>     <li>'relations' = The order relation reference instances that are associated with the order. These instances contain information such as the the reference type, the ID of the reference and the relation itself.</li>     <li>'comments' = The order comments.</li>     <li>'location' = The accounting location of the order.</li>     <li>'payments' = The payments that are associated with the order.</li>     <li>'documents' = The documents that are associated with the order.</li>     <li>'contactSender' = The associated contact for the contact-sender relation.</li>     <li>'contactReceiver' = The associated contact for the contact-receiver relation.</li>     <li>'warehouseSender' = The associated warehouse for the warehouse-sender relation.</li>     <li>'warehouseReceiver' = The associated warehouse for the warehouse-receiver relation.</li>     <li>'orderItems.variation' = The variation that is associated with the order item.</li>     <li>'orderItems.giftCardCodes' = The gift card codes that are associated with the order item.</li>     <li>'orderItems.transactions' = The transactions that are associated with the order item.</li>     <li>'orderItems.serialNumbers' = The serial numbers that are associated with the order item.</li>     <li>'orderItems.variationBarcodes' = The barcodes that are associated with variation of the order item.</li>     <li>'orderItems.comments' = The comments that are associated with the order item.</li>     <li>'originOrderReferences' = The references to other orders, e.g. returns or credit notes, associated with this order.</li>     <li><b>deprecated</b> 'orderItems.warehouseLocations' = The warehouse locations that are associated with the order item.</li>     </ul>     Example: <code>?with[]=addresses&with[]=orderItems.variation</code>


        $status_from = $state;
        $status_from = 0; // TODO remove
        $status_to = $state;
        $with = [ 'contactSender', 'contactReceiver', 'orderItems.variation', 'orderItems.transactions', 'orderItems.serialNumbers',
            'orderItems.variationBarcodes', 'orderItems.comments' . 'originOrderReferences'];

        try {
            $result = $apiInstance->restOrdersGet($order_type, $contact_id, $referrer_id, $shipping_profile_id, $owner_user_id, $warehouse_id, $is_ebay_plus, $included_variation, $included_item, $order_ids, $country_id, $order_item_name, $variation_number, $sender_contact, $sender_warehouse, $receiver_contact, $receiver_warehouse, $external_order_id, $client_id, $payment_status, $updated_at_from, $updated_at_to, $created_at_from, $created_at_to, $paid_at_from, $paid_at_to, $outgoing_items_booked_at_from, $outgoing_items_booked_at_to, $status_from, $status_to, $has_document, $has_document_number, $page, $items_per_page, $with);
//            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling OrderApi->restOrdersGet: ', $e->getMessage(), PHP_EOL;
        }

        return $result;
    }
}