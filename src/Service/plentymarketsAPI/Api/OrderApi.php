<?php
/**
 * OrderApi
 * PHP version 7
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Pius Friesch
 */

/**
 * plentymarkets REST-API
 *
 * The plentymarkets REST API expands the functionality of the plentymarkets CMS and allows access to resources, i.e. data records, via unique URI paths
 *
 */

namespace BSApp\Service\plentymarketsAPI\Api;


use BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\OrderPaginated;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use function GuzzleHttp\Psr7\build_query;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BSApp\Service\plentymarketsAPI\ApiException;
use BSApp\Service\plentymarketsAPI\Configuration;
use BSApp\Service\plentymarketsAPI\HeaderSelector;
use BSApp\Service\plentymarketsAPI\ObjectSerializer;
use InvalidArgumentException;
use RuntimeException;
use stdClass;

/**
 * OrderApi Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    )
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation restOrdersGet
     *
     * List orders by filter options
     *
     * @param string $order_type Filter that restricts the search result to orders of specific order types. The id of the order types must be specified. Several order types can be entered seperated by commas. @see order model typeId (optional)
     * @param int $contact_id Filter that restricts the search result to orders of one order contact. The id of the contact must be specified. (optional)
     * @param int $referrer_id Filter that restricts the search result to orders from one order referrer. The id of the order referrer must be specified. (optional)
     * @param int $shipping_profile_id Filter that restricts the search result to orders with a specific shipping profile. The id of shipping profile must be specified. (optional)
     * @param int $owner_user_id Filter that restricts the search result to orders of one owner. The user id of the owner must be specified. (optional)
     * @param int $warehouse_id Filter that restricts the search result to orders with a specific main warehouse. The id of the warehouse must be specified. (optional)
     * @param bool $is_ebay_plus Filter that restricts the search result to orders with ebay plus. (optional)
     * @param int $included_variation Filter that restricts the search result to orders with a certain variation. The id of the variation must be specified. (optional)
     * @param int $included_item Filter that restricts the search result to orders with a certain item. The id of the item must be specified. (optional)
     * @param int $order_ids Filter that restricts the search result to orders. To list several orders the orders must be separated by comma. (optional)
     * @param int $country_id Filter that restricts the search result to orders of one country. The id of the country must be specified. (optional)
     * @param string $order_item_name Filter that restricts the search results to orders with a certain item name. The name of the item must be specified. (optional)
     * @param int $variation_number Filter that restricts the search results to orders with a specific variation number. The number of the variation must be specified. (optional)
     * @param int $sender_contact Filter that restricts the search results to orders with a specific sender of the type contact. The id of the sender must be specified. (optional)
     * @param int $sender_warehouse Filter that restricts the search results to orders with a specific sender of the type warehouse. The id of the sender must be specified. (optional)
     * @param int $receiver_contact Filter that restricts the search results to orders with a specific receiver of the type contact. The id of the receiver must be specified. (optional)
     * @param int $receiver_warehouse Filter that restricts the search results to orders with a specific receiver of the type warehouse. The id of the receiver must be specified. (optional)
     * @param string $external_order_id Filter that restricts the search result to an external order id. The external order id must be specified. (optional)
     * @param int $client_id Filter that restricts the search result to order from one client. The id of the client must be specified. (optional)
     * @param string $payment_status Filter that restricts the search result to order with a specific payment status. Valid values are unpaid,partlyPaid,fullyPaid,overpaid. One value must be specified. (optional)
     * @param string $updated_at_from Filter that restricts the search result to orders that were last updated on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $updated_at_to Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $created_at_from Filter that restricts the search result to orders that were created on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $created_at_to Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $paid_at_from Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $paid_at_to Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $outgoing_items_booked_at_from Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $outgoing_items_booked_at_to Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param int $status_from Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified. (optional)
     * @param int $status_to Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified. (optional)
     * @param string $has_document Filter that restricts the search result to orders which hold the given document type. Valid values are &lt;i&gt;multi_invoice&lt;/i&gt;, &lt;i&gt;multi_credit_note&lt;/i&gt;, &lt;i&gt;success_confirmation&lt;/i&gt;, &lt;i&gt;return_note&lt;/i&gt;, &lt;i&gt;pickup_delivery&lt;/i&gt;, &lt;i&gt;repair_bill&lt;/i&gt;, &lt;i&gt;dunning_letter&lt;/i&gt;, &lt;i&gt;offer&lt;/i&gt;, &lt;i&gt;order_confirmation&lt;/i&gt;, &lt;i&gt;credit_note&lt;/i&gt;, &lt;i&gt;correction_document&lt;/i&gt;, &lt;i&gt;delivery_note&lt;/i&gt;, &lt;i&gt;invoice&lt;/i&gt;, &lt;i&gt;invoice_external&lt;/i&gt;, &lt;i&gt;receipt&lt;/i&gt; (optional)
     * @param string $has_document_number Filter that restricts the search result to orders which hold documents with given number. (optional)
     * @param int $page The page to get. The default page that will be returned is page 1. (optional)
     * @param int $items_per_page The number of orders to be displayed per page. The default number of orders per page is 50. (optional)
     * @param int $with Load additional relations for an order. Currently possible are:     &lt;ul&gt;     &lt;li&gt;&#x27;addresses&#x27; &#x3D; The address objects that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;relations&#x27; &#x3D; The order relation reference instances that are associated with the order. These instances contain information such as the the reference type, the ID of the reference and the relation itself.&lt;/li&gt;     &lt;li&gt;&#x27;comments&#x27; &#x3D; The order comments.&lt;/li&gt;     &lt;li&gt;&#x27;location&#x27; &#x3D; The accounting location of the order.&lt;/li&gt;     &lt;li&gt;&#x27;payments&#x27; &#x3D; The payments that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;documents&#x27; &#x3D; The documents that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;contactSender&#x27; &#x3D; The associated contact for the contact-sender relation.&lt;/li&gt;     &lt;li&gt;&#x27;contactReceiver&#x27; &#x3D; The associated contact for the contact-receiver relation.&lt;/li&gt;     &lt;li&gt;&#x27;warehouseSender&#x27; &#x3D; The associated warehouse for the warehouse-sender relation.&lt;/li&gt;     &lt;li&gt;&#x27;warehouseReceiver&#x27; &#x3D; The associated warehouse for the warehouse-receiver relation.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.variation&#x27; &#x3D; The variation that is associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.giftCardCodes&#x27; &#x3D; The gift card codes that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.transactions&#x27; &#x3D; The transactions that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.serialNumbers&#x27; &#x3D; The serial numbers that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.variationBarcodes&#x27; &#x3D; The barcodes that are associated with variation of the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.comments&#x27; &#x3D; The comments that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;originOrderReferences&#x27; &#x3D; The references to other orders, e.g. returns or credit notes, associated with this order.&lt;/li&gt;     &lt;li&gt;&lt;b&gt;deprecated&lt;/b&gt; &#x27;orderItems.warehouseLocations&#x27; &#x3D; The warehouse locations that are associated with the order item.&lt;/li&gt;     &lt;/ul&gt;     Example: &lt;code&gt;?with[]&#x3D;addresses&amp;with[]&#x3D;orderItems.variation&lt;/code&gt; (optional)
     *
     * @return object
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function restOrdersGet($order_type = null, $contact_id = null, $referrer_id = null, $shipping_profile_id = null, $owner_user_id = null, $warehouse_id = null, $is_ebay_plus = null, $included_variation = null, $included_item = null, $order_ids = null, $country_id = null, $order_item_name = null, $variation_number = null, $sender_contact = null, $sender_warehouse = null, $receiver_contact = null, $receiver_warehouse = null, $external_order_id = null, $client_id = null, $payment_status = null, $updated_at_from = null, $updated_at_to = null, $created_at_from = null, $created_at_to = null, $paid_at_from = null, $paid_at_to = null, $outgoing_items_booked_at_from = null, $outgoing_items_booked_at_to = null, $status_from = null, $status_to = null, $has_document = null, $has_document_number = null, $page = null, $items_per_page = null, $with = null)
    {
        list($response) = $this->restOrdersGetWithHttpInfo($order_type, $contact_id, $referrer_id, $shipping_profile_id, $owner_user_id, $warehouse_id, $is_ebay_plus, $included_variation, $included_item, $order_ids, $country_id, $order_item_name, $variation_number, $sender_contact, $sender_warehouse, $receiver_contact, $receiver_warehouse, $external_order_id, $client_id, $payment_status, $updated_at_from, $updated_at_to, $created_at_from, $created_at_to, $paid_at_from, $paid_at_to, $outgoing_items_booked_at_from, $outgoing_items_booked_at_to, $status_from, $status_to, $has_document, $has_document_number, $page, $items_per_page, $with);
        return $response;
    }

    /**
     * Operation restOrdersGetWithHttpInfo
     *
     * List orders by filter options
     *
     * @param string $order_type Filter that restricts the search result to orders of specific order types. The id of the order types must be specified. Several order types can be entered seperated by commas. @see order model typeId (optional)
     * @param int $contact_id Filter that restricts the search result to orders of one order contact. The id of the contact must be specified. (optional)
     * @param int $referrer_id Filter that restricts the search result to orders from one order referrer. The id of the order referrer must be specified. (optional)
     * @param int $shipping_profile_id Filter that restricts the search result to orders with a specific shipping profile. The id of shipping profile must be specified. (optional)
     * @param int $owner_user_id Filter that restricts the search result to orders of one owner. The user id of the owner must be specified. (optional)
     * @param int $warehouse_id Filter that restricts the search result to orders with a specific main warehouse. The id of the warehouse must be specified. (optional)
     * @param bool $is_ebay_plus Filter that restricts the search result to orders with ebay plus. (optional)
     * @param int $included_variation Filter that restricts the search result to orders with a certain variation. The id of the variation must be specified. (optional)
     * @param int $included_item Filter that restricts the search result to orders with a certain item. The id of the item must be specified. (optional)
     * @param int $order_ids Filter that restricts the search result to orders. To list several orders the orders must be separated by comma. (optional)
     * @param int $country_id Filter that restricts the search result to orders of one country. The id of the country must be specified. (optional)
     * @param string $order_item_name Filter that restricts the search results to orders with a certain item name. The name of the item must be specified. (optional)
     * @param int $variation_number Filter that restricts the search results to orders with a specific variation number. The number of the variation must be specified. (optional)
     * @param int $sender_contact Filter that restricts the search results to orders with a specific sender of the type contact. The id of the sender must be specified. (optional)
     * @param int $sender_warehouse Filter that restricts the search results to orders with a specific sender of the type warehouse. The id of the sender must be specified. (optional)
     * @param int $receiver_contact Filter that restricts the search results to orders with a specific receiver of the type contact. The id of the receiver must be specified. (optional)
     * @param int $receiver_warehouse Filter that restricts the search results to orders with a specific receiver of the type warehouse. The id of the receiver must be specified. (optional)
     * @param string $external_order_id Filter that restricts the search result to an external order id. The external order id must be specified. (optional)
     * @param int $client_id Filter that restricts the search result to order from one client. The id of the client must be specified. (optional)
     * @param string $payment_status Filter that restricts the search result to order with a specific payment status. Valid values are unpaid,partlyPaid,fullyPaid,overpaid. One value must be specified. (optional)
     * @param string $updated_at_from Filter that restricts the search result to orders that were last updated on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $updated_at_to Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $created_at_from Filter that restricts the search result to orders that were created on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $created_at_to Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $paid_at_from Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $paid_at_to Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $outgoing_items_booked_at_from Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $outgoing_items_booked_at_to Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param int $status_from Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified. (optional)
     * @param int $status_to Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified. (optional)
     * @param string $has_document Filter that restricts the search result to orders which hold the given document type. Valid values are &lt;i&gt;multi_invoice&lt;/i&gt;, &lt;i&gt;multi_credit_note&lt;/i&gt;, &lt;i&gt;success_confirmation&lt;/i&gt;, &lt;i&gt;return_note&lt;/i&gt;, &lt;i&gt;pickup_delivery&lt;/i&gt;, &lt;i&gt;repair_bill&lt;/i&gt;, &lt;i&gt;dunning_letter&lt;/i&gt;, &lt;i&gt;offer&lt;/i&gt;, &lt;i&gt;order_confirmation&lt;/i&gt;, &lt;i&gt;credit_note&lt;/i&gt;, &lt;i&gt;correction_document&lt;/i&gt;, &lt;i&gt;delivery_note&lt;/i&gt;, &lt;i&gt;invoice&lt;/i&gt;, &lt;i&gt;invoice_external&lt;/i&gt;, &lt;i&gt;receipt&lt;/i&gt; (optional)
     * @param string $has_document_number Filter that restricts the search result to orders which hold documents with given number. (optional)
     * @param int $page The page to get. The default page that will be returned is page 1. (optional)
     * @param int $items_per_page The number of orders to be displayed per page. The default number of orders per page is 50. (optional)
     * @param int $with Load additional relations for an order. Currently possible are:     &lt;ul&gt;     &lt;li&gt;&#x27;addresses&#x27; &#x3D; The address objects that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;relations&#x27; &#x3D; The order relation reference instances that are associated with the order. These instances contain information such as the the reference type, the ID of the reference and the relation itself.&lt;/li&gt;     &lt;li&gt;&#x27;comments&#x27; &#x3D; The order comments.&lt;/li&gt;     &lt;li&gt;&#x27;location&#x27; &#x3D; The accounting location of the order.&lt;/li&gt;     &lt;li&gt;&#x27;payments&#x27; &#x3D; The payments that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;documents&#x27; &#x3D; The documents that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;contactSender&#x27; &#x3D; The associated contact for the contact-sender relation.&lt;/li&gt;     &lt;li&gt;&#x27;contactReceiver&#x27; &#x3D; The associated contact for the contact-receiver relation.&lt;/li&gt;     &lt;li&gt;&#x27;warehouseSender&#x27; &#x3D; The associated warehouse for the warehouse-sender relation.&lt;/li&gt;     &lt;li&gt;&#x27;warehouseReceiver&#x27; &#x3D; The associated warehouse for the warehouse-receiver relation.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.variation&#x27; &#x3D; The variation that is associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.giftCardCodes&#x27; &#x3D; The gift card codes that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.transactions&#x27; &#x3D; The transactions that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.serialNumbers&#x27; &#x3D; The serial numbers that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.variationBarcodes&#x27; &#x3D; The barcodes that are associated with variation of the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.comments&#x27; &#x3D; The comments that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;originOrderReferences&#x27; &#x3D; The references to other orders, e.g. returns or credit notes, associated with this order.&lt;/li&gt;     &lt;li&gt;&lt;b&gt;deprecated&lt;/b&gt; &#x27;orderItems.warehouseLocations&#x27; &#x3D; The warehouse locations that are associated with the order item.&lt;/li&gt;     &lt;/ul&gt;     Example: &lt;code&gt;?with[]&#x3D;addresses&amp;with[]&#x3D;orderItems.variation&lt;/code&gt; (optional)
     *
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function restOrdersGetWithHttpInfo($order_type = null, $contact_id = null, $referrer_id = null, $shipping_profile_id = null, $owner_user_id = null, $warehouse_id = null, $is_ebay_plus = null, $included_variation = null, $included_item = null, $order_ids = null, $country_id = null, $order_item_name = null, $variation_number = null, $sender_contact = null, $sender_warehouse = null, $receiver_contact = null, $receiver_warehouse = null, $external_order_id = null, $client_id = null, $payment_status = null, $updated_at_from = null, $updated_at_to = null, $created_at_from = null, $created_at_to = null, $paid_at_from = null, $paid_at_to = null, $outgoing_items_booked_at_from = null, $outgoing_items_booked_at_to = null, $status_from = null, $status_to = null, $has_document = null, $has_document_number = null, $page = null, $items_per_page = null, $with = null)
    {
        $returnType = OrderPaginated::class;
        $request = $this->restOrdersGetRequest($order_type, $contact_id, $referrer_id, $shipping_profile_id, $owner_user_id, $warehouse_id, $is_ebay_plus, $included_variation, $included_item, $order_ids, $country_id, $order_item_name, $variation_number, $sender_contact, $sender_warehouse, $receiver_contact, $receiver_warehouse, $external_order_id, $client_id, $payment_status, $updated_at_from, $updated_at_to, $created_at_from, $created_at_to, $paid_at_from, $paid_at_to, $outgoing_items_booked_at_from, $outgoing_items_booked_at_to, $status_from, $status_to, $has_document, $has_document_number, $page, $items_per_page, $with);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create request for operation 'restOrdersGet'
     *
     * @param string $order_type Filter that restricts the search result to orders of specific order types. The id of the order types must be specified. Several order types can be entered seperated by commas. @see order model typeId (optional)
     * @param int $contact_id Filter that restricts the search result to orders of one order contact. The id of the contact must be specified. (optional)
     * @param int $referrer_id Filter that restricts the search result to orders from one order referrer. The id of the order referrer must be specified. (optional)
     * @param int $shipping_profile_id Filter that restricts the search result to orders with a specific shipping profile. The id of shipping profile must be specified. (optional)
     * @param int $owner_user_id Filter that restricts the search result to orders of one owner. The user id of the owner must be specified. (optional)
     * @param int $warehouse_id Filter that restricts the search result to orders with a specific main warehouse. The id of the warehouse must be specified. (optional)
     * @param bool $is_ebay_plus Filter that restricts the search result to orders with ebay plus. (optional)
     * @param int $included_variation Filter that restricts the search result to orders with a certain variation. The id of the variation must be specified. (optional)
     * @param int $included_item Filter that restricts the search result to orders with a certain item. The id of the item must be specified. (optional)
     * @param int $order_ids Filter that restricts the search result to orders. To list several orders the orders must be separated by comma. (optional)
     * @param int $country_id Filter that restricts the search result to orders of one country. The id of the country must be specified. (optional)
     * @param string $order_item_name Filter that restricts the search results to orders with a certain item name. The name of the item must be specified. (optional)
     * @param int $variation_number Filter that restricts the search results to orders with a specific variation number. The number of the variation must be specified. (optional)
     * @param int $sender_contact Filter that restricts the search results to orders with a specific sender of the type contact. The id of the sender must be specified. (optional)
     * @param int $sender_warehouse Filter that restricts the search results to orders with a specific sender of the type warehouse. The id of the sender must be specified. (optional)
     * @param int $receiver_contact Filter that restricts the search results to orders with a specific receiver of the type contact. The id of the receiver must be specified. (optional)
     * @param int $receiver_warehouse Filter that restricts the search results to orders with a specific receiver of the type warehouse. The id of the receiver must be specified. (optional)
     * @param string $external_order_id Filter that restricts the search result to an external order id. The external order id must be specified. (optional)
     * @param int $client_id Filter that restricts the search result to order from one client. The id of the client must be specified. (optional)
     * @param string $payment_status Filter that restricts the search result to order with a specific payment status. Valid values are unpaid,partlyPaid,fullyPaid,overpaid. One value must be specified. (optional)
     * @param string $updated_at_from Filter that restricts the search result to orders that were last updated on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $updated_at_to Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $created_at_from Filter that restricts the search result to orders that were created on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $created_at_to Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $paid_at_from Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $paid_at_to Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $outgoing_items_booked_at_from Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $outgoing_items_booked_at_to Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param int $status_from Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified. (optional)
     * @param int $status_to Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified. (optional)
     * @param string $has_document Filter that restricts the search result to orders which hold the given document type. Valid values are &lt;i&gt;multi_invoice&lt;/i&gt;, &lt;i&gt;multi_credit_note&lt;/i&gt;, &lt;i&gt;success_confirmation&lt;/i&gt;, &lt;i&gt;return_note&lt;/i&gt;, &lt;i&gt;pickup_delivery&lt;/i&gt;, &lt;i&gt;repair_bill&lt;/i&gt;, &lt;i&gt;dunning_letter&lt;/i&gt;, &lt;i&gt;offer&lt;/i&gt;, &lt;i&gt;order_confirmation&lt;/i&gt;, &lt;i&gt;credit_note&lt;/i&gt;, &lt;i&gt;correction_document&lt;/i&gt;, &lt;i&gt;delivery_note&lt;/i&gt;, &lt;i&gt;invoice&lt;/i&gt;, &lt;i&gt;invoice_external&lt;/i&gt;, &lt;i&gt;receipt&lt;/i&gt; (optional)
     * @param string $has_document_number Filter that restricts the search result to orders which hold documents with given number. (optional)
     * @param int $page The page to get. The default page that will be returned is page 1. (optional)
     * @param int $items_per_page The number of orders to be displayed per page. The default number of orders per page is 50. (optional)
     * @param int $with Load additional relations for an order. Currently possible are:     &lt;ul&gt;     &lt;li&gt;&#x27;addresses&#x27; &#x3D; The address objects that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;relations&#x27; &#x3D; The order relation reference instances that are associated with the order. These instances contain information such as the the reference type, the ID of the reference and the relation itself.&lt;/li&gt;     &lt;li&gt;&#x27;comments&#x27; &#x3D; The order comments.&lt;/li&gt;     &lt;li&gt;&#x27;location&#x27; &#x3D; The accounting location of the order.&lt;/li&gt;     &lt;li&gt;&#x27;payments&#x27; &#x3D; The payments that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;documents&#x27; &#x3D; The documents that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;contactSender&#x27; &#x3D; The associated contact for the contact-sender relation.&lt;/li&gt;     &lt;li&gt;&#x27;contactReceiver&#x27; &#x3D; The associated contact for the contact-receiver relation.&lt;/li&gt;     &lt;li&gt;&#x27;warehouseSender&#x27; &#x3D; The associated warehouse for the warehouse-sender relation.&lt;/li&gt;     &lt;li&gt;&#x27;warehouseReceiver&#x27; &#x3D; The associated warehouse for the warehouse-receiver relation.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.variation&#x27; &#x3D; The variation that is associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.giftCardCodes&#x27; &#x3D; The gift card codes that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.transactions&#x27; &#x3D; The transactions that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.serialNumbers&#x27; &#x3D; The serial numbers that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.variationBarcodes&#x27; &#x3D; The barcodes that are associated with variation of the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.comments&#x27; &#x3D; The comments that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;originOrderReferences&#x27; &#x3D; The references to other orders, e.g. returns or credit notes, associated with this order.&lt;/li&gt;     &lt;li&gt;&lt;b&gt;deprecated&lt;/b&gt; &#x27;orderItems.warehouseLocations&#x27; &#x3D; The warehouse locations that are associated with the order item.&lt;/li&gt;     &lt;/ul&gt;     Example: &lt;code&gt;?with[]&#x3D;addresses&amp;with[]&#x3D;orderItems.variation&lt;/code&gt; (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    protected function restOrdersGetRequest($order_type = null, $contact_id = null, $referrer_id = null, $shipping_profile_id = null, $owner_user_id = null, $warehouse_id = null, $is_ebay_plus = null, $included_variation = null, $included_item = null, $order_ids = null, $country_id = null, $order_item_name = null, $variation_number = null, $sender_contact = null, $sender_warehouse = null, $receiver_contact = null, $receiver_warehouse = null, $external_order_id = null, $client_id = null, $payment_status = null, $updated_at_from = null, $updated_at_to = null, $created_at_from = null, $created_at_to = null, $paid_at_from = null, $paid_at_to = null, $outgoing_items_booked_at_from = null, $outgoing_items_booked_at_to = null, $status_from = null, $status_to = null, $has_document = null, $has_document_number = null, $page = null, $items_per_page = null, $with = null)
    {

        $resourcePath = '/rest/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($order_type !== null) {
            $queryParams['orderType'] = ObjectSerializer::toQueryValue($order_type);
        }
        // query params
        if ($contact_id !== null) {
            $queryParams['contactId'] = ObjectSerializer::toQueryValue($contact_id);
        }
        // query params
        if ($referrer_id !== null) {
            $queryParams['referrerId'] = ObjectSerializer::toQueryValue($referrer_id);
        }
        // query params
        if ($shipping_profile_id !== null) {
            $queryParams['shippingProfileId'] = ObjectSerializer::toQueryValue($shipping_profile_id);
        }
        // query params
        if ($owner_user_id !== null) {
            $queryParams['ownerUserId'] = ObjectSerializer::toQueryValue($owner_user_id);
        }
        // query params
        if ($warehouse_id !== null) {
            $queryParams['warehouseId'] = ObjectSerializer::toQueryValue($warehouse_id);
        }
        // query params
        if ($is_ebay_plus !== null) {
            $queryParams['isEbayPlus'] = ObjectSerializer::toQueryValue($is_ebay_plus);
        }
        // query params
        if ($included_variation !== null) {
            $queryParams['includedVariation'] = ObjectSerializer::toQueryValue($included_variation);
        }
        // query params
        if ($included_item !== null) {
            $queryParams['includedItem'] = ObjectSerializer::toQueryValue($included_item);
        }
        // query params
        if ($order_ids !== null) {
            $queryParams['orderIds'] = ObjectSerializer::toQueryValue($order_ids);
        }
        // query params
        if ($country_id !== null) {
            $queryParams['countryId'] = ObjectSerializer::toQueryValue($country_id);
        }
        // query params
        if ($order_item_name !== null) {
            $queryParams['orderItemName'] = ObjectSerializer::toQueryValue($order_item_name);
        }
        // query params
        if ($variation_number !== null) {
            $queryParams['variationNumber'] = ObjectSerializer::toQueryValue($variation_number);
        }
        // query params
        if ($sender_contact !== null) {
            $queryParams['sender.contact'] = ObjectSerializer::toQueryValue($sender_contact);
        }
        // query params
        if ($sender_warehouse !== null) {
            $queryParams['sender.warehouse'] = ObjectSerializer::toQueryValue($sender_warehouse);
        }
        // query params
        if ($receiver_contact !== null) {
            $queryParams['receiver.contact'] = ObjectSerializer::toQueryValue($receiver_contact);
        }
        // query params
        if ($receiver_warehouse !== null) {
            $queryParams['receiver.warehouse'] = ObjectSerializer::toQueryValue($receiver_warehouse);
        }
        // query params
        if ($external_order_id !== null) {
            $queryParams['externalOrderId'] = ObjectSerializer::toQueryValue($external_order_id);
        }
        // query params
        if ($client_id !== null) {
            $queryParams['clientId'] = ObjectSerializer::toQueryValue($client_id);
        }
        // query params
        if ($payment_status !== null) {
            $queryParams['paymentStatus'] = ObjectSerializer::toQueryValue($payment_status);
        }
        // query params
        if ($updated_at_from !== null) {
            $queryParams['updatedAtFrom'] = ObjectSerializer::toQueryValue($updated_at_from);
        }
        // query params
        if ($updated_at_to !== null) {
            $queryParams['updatedAtTo'] = ObjectSerializer::toQueryValue($updated_at_to);
        }
        // query params
        if ($created_at_from !== null) {
            $queryParams['createdAtFrom'] = ObjectSerializer::toQueryValue($created_at_from);
        }
        // query params
        if ($created_at_to !== null) {
            $queryParams['createdAtTo'] = ObjectSerializer::toQueryValue($created_at_to);
        }
        // query params
        if ($paid_at_from !== null) {
            $queryParams['paidAtFrom'] = ObjectSerializer::toQueryValue($paid_at_from);
        }
        // query params
        if ($paid_at_to !== null) {
            $queryParams['paidAtTo'] = ObjectSerializer::toQueryValue($paid_at_to);
        }
        // query params
        if ($outgoing_items_booked_at_from !== null) {
            $queryParams['outgoingItemsBookedAtFrom'] = ObjectSerializer::toQueryValue($outgoing_items_booked_at_from);
        }
        // query params
        if ($outgoing_items_booked_at_to !== null) {
            $queryParams['outgoingItemsBookedAtTo'] = ObjectSerializer::toQueryValue($outgoing_items_booked_at_to);
        }
        // query params
        if ($status_from !== null) {
            $queryParams['statusFrom'] = ObjectSerializer::toQueryValue($status_from);
        }
        // query params
        if ($status_to !== null) {
            $queryParams['statusTo'] = ObjectSerializer::toQueryValue($status_to);
        }
        // query params
        if ($has_document !== null) {
            $queryParams['hasDocument'] = ObjectSerializer::toQueryValue($has_document);
        }
        // query params
        if ($has_document_number !== null) {
            $queryParams['hasDocumentNumber'] = ObjectSerializer::toQueryValue($has_document_number);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($items_per_page !== null) {
            $queryParams['itemsPerPage'] = ObjectSerializer::toQueryValue($items_per_page);
        }
        // query params
        if ($with !== null) {
            $queryParams['with'] = ObjectSerializer::toQueryValue($with);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @return array of http client options
     * @throws RuntimeException on file opening failure
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * Operation restOrdersGetAsync
     *
     * List orders by filter options
     *
     * @param string $order_type Filter that restricts the search result to orders of specific order types. The id of the order types must be specified. Several order types can be entered seperated by commas. @see order model typeId (optional)
     * @param int $contact_id Filter that restricts the search result to orders of one order contact. The id of the contact must be specified. (optional)
     * @param int $referrer_id Filter that restricts the search result to orders from one order referrer. The id of the order referrer must be specified. (optional)
     * @param int $shipping_profile_id Filter that restricts the search result to orders with a specific shipping profile. The id of shipping profile must be specified. (optional)
     * @param int $owner_user_id Filter that restricts the search result to orders of one owner. The user id of the owner must be specified. (optional)
     * @param int $warehouse_id Filter that restricts the search result to orders with a specific main warehouse. The id of the warehouse must be specified. (optional)
     * @param bool $is_ebay_plus Filter that restricts the search result to orders with ebay plus. (optional)
     * @param int $included_variation Filter that restricts the search result to orders with a certain variation. The id of the variation must be specified. (optional)
     * @param int $included_item Filter that restricts the search result to orders with a certain item. The id of the item must be specified. (optional)
     * @param int $order_ids Filter that restricts the search result to orders. To list several orders the orders must be separated by comma. (optional)
     * @param int $country_id Filter that restricts the search result to orders of one country. The id of the country must be specified. (optional)
     * @param string $order_item_name Filter that restricts the search results to orders with a certain item name. The name of the item must be specified. (optional)
     * @param int $variation_number Filter that restricts the search results to orders with a specific variation number. The number of the variation must be specified. (optional)
     * @param int $sender_contact Filter that restricts the search results to orders with a specific sender of the type contact. The id of the sender must be specified. (optional)
     * @param int $sender_warehouse Filter that restricts the search results to orders with a specific sender of the type warehouse. The id of the sender must be specified. (optional)
     * @param int $receiver_contact Filter that restricts the search results to orders with a specific receiver of the type contact. The id of the receiver must be specified. (optional)
     * @param int $receiver_warehouse Filter that restricts the search results to orders with a specific receiver of the type warehouse. The id of the receiver must be specified. (optional)
     * @param string $external_order_id Filter that restricts the search result to an external order id. The external order id must be specified. (optional)
     * @param int $client_id Filter that restricts the search result to order from one client. The id of the client must be specified. (optional)
     * @param string $payment_status Filter that restricts the search result to order with a specific payment status. Valid values are unpaid,partlyPaid,fullyPaid,overpaid. One value must be specified. (optional)
     * @param string $updated_at_from Filter that restricts the search result to orders that were last updated on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $updated_at_to Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $created_at_from Filter that restricts the search result to orders that were created on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $created_at_to Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $paid_at_from Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $paid_at_to Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $outgoing_items_booked_at_from Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $outgoing_items_booked_at_to Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param int $status_from Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified. (optional)
     * @param int $status_to Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified. (optional)
     * @param string $has_document Filter that restricts the search result to orders which hold the given document type. Valid values are &lt;i&gt;multi_invoice&lt;/i&gt;, &lt;i&gt;multi_credit_note&lt;/i&gt;, &lt;i&gt;success_confirmation&lt;/i&gt;, &lt;i&gt;return_note&lt;/i&gt;, &lt;i&gt;pickup_delivery&lt;/i&gt;, &lt;i&gt;repair_bill&lt;/i&gt;, &lt;i&gt;dunning_letter&lt;/i&gt;, &lt;i&gt;offer&lt;/i&gt;, &lt;i&gt;order_confirmation&lt;/i&gt;, &lt;i&gt;credit_note&lt;/i&gt;, &lt;i&gt;correction_document&lt;/i&gt;, &lt;i&gt;delivery_note&lt;/i&gt;, &lt;i&gt;invoice&lt;/i&gt;, &lt;i&gt;invoice_external&lt;/i&gt;, &lt;i&gt;receipt&lt;/i&gt; (optional)
     * @param string $has_document_number Filter that restricts the search result to orders which hold documents with given number. (optional)
     * @param int $page The page to get. The default page that will be returned is page 1. (optional)
     * @param int $items_per_page The number of orders to be displayed per page. The default number of orders per page is 50. (optional)
     * @param int $with Load additional relations for an order. Currently possible are:     &lt;ul&gt;     &lt;li&gt;&#x27;addresses&#x27; &#x3D; The address objects that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;relations&#x27; &#x3D; The order relation reference instances that are associated with the order. These instances contain information such as the the reference type, the ID of the reference and the relation itself.&lt;/li&gt;     &lt;li&gt;&#x27;comments&#x27; &#x3D; The order comments.&lt;/li&gt;     &lt;li&gt;&#x27;location&#x27; &#x3D; The accounting location of the order.&lt;/li&gt;     &lt;li&gt;&#x27;payments&#x27; &#x3D; The payments that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;documents&#x27; &#x3D; The documents that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;contactSender&#x27; &#x3D; The associated contact for the contact-sender relation.&lt;/li&gt;     &lt;li&gt;&#x27;contactReceiver&#x27; &#x3D; The associated contact for the contact-receiver relation.&lt;/li&gt;     &lt;li&gt;&#x27;warehouseSender&#x27; &#x3D; The associated warehouse for the warehouse-sender relation.&lt;/li&gt;     &lt;li&gt;&#x27;warehouseReceiver&#x27; &#x3D; The associated warehouse for the warehouse-receiver relation.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.variation&#x27; &#x3D; The variation that is associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.giftCardCodes&#x27; &#x3D; The gift card codes that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.transactions&#x27; &#x3D; The transactions that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.serialNumbers&#x27; &#x3D; The serial numbers that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.variationBarcodes&#x27; &#x3D; The barcodes that are associated with variation of the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.comments&#x27; &#x3D; The comments that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;originOrderReferences&#x27; &#x3D; The references to other orders, e.g. returns or credit notes, associated with this order.&lt;/li&gt;     &lt;li&gt;&lt;b&gt;deprecated&lt;/b&gt; &#x27;orderItems.warehouseLocations&#x27; &#x3D; The warehouse locations that are associated with the order item.&lt;/li&gt;     &lt;/ul&gt;     Example: &lt;code&gt;?with[]&#x3D;addresses&amp;with[]&#x3D;orderItems.variation&lt;/code&gt; (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restOrdersGetAsync($order_type = null, $contact_id = null, $referrer_id = null, $shipping_profile_id = null, $owner_user_id = null, $warehouse_id = null, $is_ebay_plus = null, $included_variation = null, $included_item = null, $order_ids = null, $country_id = null, $order_item_name = null, $variation_number = null, $sender_contact = null, $sender_warehouse = null, $receiver_contact = null, $receiver_warehouse = null, $external_order_id = null, $client_id = null, $payment_status = null, $updated_at_from = null, $updated_at_to = null, $created_at_from = null, $created_at_to = null, $paid_at_from = null, $paid_at_to = null, $outgoing_items_booked_at_from = null, $outgoing_items_booked_at_to = null, $status_from = null, $status_to = null, $has_document = null, $has_document_number = null, $page = null, $items_per_page = null, $with = null)
    {
        return $this->restOrdersGetAsyncWithHttpInfo($order_type, $contact_id, $referrer_id, $shipping_profile_id, $owner_user_id, $warehouse_id, $is_ebay_plus, $included_variation, $included_item, $order_ids, $country_id, $order_item_name, $variation_number, $sender_contact, $sender_warehouse, $receiver_contact, $receiver_warehouse, $external_order_id, $client_id, $payment_status, $updated_at_from, $updated_at_to, $created_at_from, $created_at_to, $paid_at_from, $paid_at_to, $outgoing_items_booked_at_from, $outgoing_items_booked_at_to, $status_from, $status_to, $has_document, $has_document_number, $page, $items_per_page, $with)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restOrdersGetAsyncWithHttpInfo
     *
     * List orders by filter options
     *
     * @param string $order_type Filter that restricts the search result to orders of specific order types. The id of the order types must be specified. Several order types can be entered seperated by commas. @see order model typeId (optional)
     * @param int $contact_id Filter that restricts the search result to orders of one order contact. The id of the contact must be specified. (optional)
     * @param int $referrer_id Filter that restricts the search result to orders from one order referrer. The id of the order referrer must be specified. (optional)
     * @param int $shipping_profile_id Filter that restricts the search result to orders with a specific shipping profile. The id of shipping profile must be specified. (optional)
     * @param int $owner_user_id Filter that restricts the search result to orders of one owner. The user id of the owner must be specified. (optional)
     * @param int $warehouse_id Filter that restricts the search result to orders with a specific main warehouse. The id of the warehouse must be specified. (optional)
     * @param bool $is_ebay_plus Filter that restricts the search result to orders with ebay plus. (optional)
     * @param int $included_variation Filter that restricts the search result to orders with a certain variation. The id of the variation must be specified. (optional)
     * @param int $included_item Filter that restricts the search result to orders with a certain item. The id of the item must be specified. (optional)
     * @param int $order_ids Filter that restricts the search result to orders. To list several orders the orders must be separated by comma. (optional)
     * @param int $country_id Filter that restricts the search result to orders of one country. The id of the country must be specified. (optional)
     * @param string $order_item_name Filter that restricts the search results to orders with a certain item name. The name of the item must be specified. (optional)
     * @param int $variation_number Filter that restricts the search results to orders with a specific variation number. The number of the variation must be specified. (optional)
     * @param int $sender_contact Filter that restricts the search results to orders with a specific sender of the type contact. The id of the sender must be specified. (optional)
     * @param int $sender_warehouse Filter that restricts the search results to orders with a specific sender of the type warehouse. The id of the sender must be specified. (optional)
     * @param int $receiver_contact Filter that restricts the search results to orders with a specific receiver of the type contact. The id of the receiver must be specified. (optional)
     * @param int $receiver_warehouse Filter that restricts the search results to orders with a specific receiver of the type warehouse. The id of the receiver must be specified. (optional)
     * @param string $external_order_id Filter that restricts the search result to an external order id. The external order id must be specified. (optional)
     * @param int $client_id Filter that restricts the search result to order from one client. The id of the client must be specified. (optional)
     * @param string $payment_status Filter that restricts the search result to order with a specific payment status. Valid values are unpaid,partlyPaid,fullyPaid,overpaid. One value must be specified. (optional)
     * @param string $updated_at_from Filter that restricts the search result to orders that were last updated on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $updated_at_to Filter that restricts the search result to orders that were last updated within a specified period of time. This filter can be used alone or can be combined with the UpdatedAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $created_at_from Filter that restricts the search result to orders that were created on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $created_at_to Filter that restricts the search result to orders that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $paid_at_from Filter that restricts the search result to orders that received a payment on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $paid_at_to Filter that restricts the search result to orders that received a payment within a certain period of time. This filter can be used alone or can be combined with the paidAtFrom filter. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $outgoing_items_booked_at_from Filter that restricts the search result to orders where the outgoing items were booked on the specified date. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param string $outgoing_items_booked_at_to Filter that restricts the search result to orders where the outgoing items were booked within a specified period of time. The date has to be in the W3C format, e.g. &#x27;2016-10-24T13:33:23+02:00&#x27;. (optional)
     * @param int $status_from Filter that restricts the search result to orders in a specific order status. The value of the order status must be specified. (optional)
     * @param int $status_to Filter that restricts the search result to orders within a range of order statuses. This filter can be used alone or can be combined with the statusFrom filter. The value of the order status must be specified. (optional)
     * @param string $has_document Filter that restricts the search result to orders which hold the given document type. Valid values are &lt;i&gt;multi_invoice&lt;/i&gt;, &lt;i&gt;multi_credit_note&lt;/i&gt;, &lt;i&gt;success_confirmation&lt;/i&gt;, &lt;i&gt;return_note&lt;/i&gt;, &lt;i&gt;pickup_delivery&lt;/i&gt;, &lt;i&gt;repair_bill&lt;/i&gt;, &lt;i&gt;dunning_letter&lt;/i&gt;, &lt;i&gt;offer&lt;/i&gt;, &lt;i&gt;order_confirmation&lt;/i&gt;, &lt;i&gt;credit_note&lt;/i&gt;, &lt;i&gt;correction_document&lt;/i&gt;, &lt;i&gt;delivery_note&lt;/i&gt;, &lt;i&gt;invoice&lt;/i&gt;, &lt;i&gt;invoice_external&lt;/i&gt;, &lt;i&gt;receipt&lt;/i&gt; (optional)
     * @param string $has_document_number Filter that restricts the search result to orders which hold documents with given number. (optional)
     * @param int $page The page to get. The default page that will be returned is page 1. (optional)
     * @param int $items_per_page The number of orders to be displayed per page. The default number of orders per page is 50. (optional)
     * @param int $with Load additional relations for an order. Currently possible are:     &lt;ul&gt;     &lt;li&gt;&#x27;addresses&#x27; &#x3D; The address objects that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;relations&#x27; &#x3D; The order relation reference instances that are associated with the order. These instances contain information such as the the reference type, the ID of the reference and the relation itself.&lt;/li&gt;     &lt;li&gt;&#x27;comments&#x27; &#x3D; The order comments.&lt;/li&gt;     &lt;li&gt;&#x27;location&#x27; &#x3D; The accounting location of the order.&lt;/li&gt;     &lt;li&gt;&#x27;payments&#x27; &#x3D; The payments that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;documents&#x27; &#x3D; The documents that are associated with the order.&lt;/li&gt;     &lt;li&gt;&#x27;contactSender&#x27; &#x3D; The associated contact for the contact-sender relation.&lt;/li&gt;     &lt;li&gt;&#x27;contactReceiver&#x27; &#x3D; The associated contact for the contact-receiver relation.&lt;/li&gt;     &lt;li&gt;&#x27;warehouseSender&#x27; &#x3D; The associated warehouse for the warehouse-sender relation.&lt;/li&gt;     &lt;li&gt;&#x27;warehouseReceiver&#x27; &#x3D; The associated warehouse for the warehouse-receiver relation.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.variation&#x27; &#x3D; The variation that is associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.giftCardCodes&#x27; &#x3D; The gift card codes that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.transactions&#x27; &#x3D; The transactions that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.serialNumbers&#x27; &#x3D; The serial numbers that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.variationBarcodes&#x27; &#x3D; The barcodes that are associated with variation of the order item.&lt;/li&gt;     &lt;li&gt;&#x27;orderItems.comments&#x27; &#x3D; The comments that are associated with the order item.&lt;/li&gt;     &lt;li&gt;&#x27;originOrderReferences&#x27; &#x3D; The references to other orders, e.g. returns or credit notes, associated with this order.&lt;/li&gt;     &lt;li&gt;&lt;b&gt;deprecated&lt;/b&gt; &#x27;orderItems.warehouseLocations&#x27; &#x3D; The warehouse locations that are associated with the order item.&lt;/li&gt;     &lt;/ul&gt;     Example: &lt;code&gt;?with[]&#x3D;addresses&amp;with[]&#x3D;orderItems.variation&lt;/code&gt; (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restOrdersGetAsyncWithHttpInfo($order_type = null, $contact_id = null, $referrer_id = null, $shipping_profile_id = null, $owner_user_id = null, $warehouse_id = null, $is_ebay_plus = null, $included_variation = null, $included_item = null, $order_ids = null, $country_id = null, $order_item_name = null, $variation_number = null, $sender_contact = null, $sender_warehouse = null, $receiver_contact = null, $receiver_warehouse = null, $external_order_id = null, $client_id = null, $payment_status = null, $updated_at_from = null, $updated_at_to = null, $created_at_from = null, $created_at_to = null, $paid_at_from = null, $paid_at_to = null, $outgoing_items_booked_at_from = null, $outgoing_items_booked_at_to = null, $status_from = null, $status_to = null, $has_document = null, $has_document_number = null, $page = null, $items_per_page = null, $with = null)
    {
        $returnType = 'object';
        $request = $this->restOrdersGetRequest($order_type, $contact_id, $referrer_id, $shipping_profile_id, $owner_user_id, $warehouse_id, $is_ebay_plus, $included_variation, $included_item, $order_ids, $country_id, $order_item_name, $variation_number, $sender_contact, $sender_warehouse, $receiver_contact, $receiver_warehouse, $external_order_id, $client_id, $payment_status, $updated_at_from, $updated_at_to, $created_at_from, $created_at_to, $paid_at_from, $paid_at_to, $outgoing_items_booked_at_from, $outgoing_items_booked_at_to, $status_from, $status_to, $has_document, $has_document_number, $page, $items_per_page, $with);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }
}
