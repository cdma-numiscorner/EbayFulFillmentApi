<?php
/**
 * PaymentDispute
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\EbayFulFillmentClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * The version of the OpenAPI document: v1.19.3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\EbayFulFillmentClient\Model;

use \ArrayAccess;
use \OpenAPI\EbayFulFillmentClient\ObjectSerializer;

/**
 * PaymentDispute Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\EbayFulFillmentClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PaymentDispute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentDispute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\OpenAPI\EbayFulFillmentClient\Model\SimpleAmount',
        'available_choices' => 'string[]',
        'buyer_provided' => '\OpenAPI\EbayFulFillmentClient\Model\InfoFromBuyer',
        'buyer_username' => 'string',
        'closed_date' => 'string',
        'evidence' => '\OpenAPI\EbayFulFillmentClient\Model\DisputeEvidence[]',
        'evidence_requests' => '\OpenAPI\EbayFulFillmentClient\Model\EvidenceRequest[]',
        'line_items' => '\OpenAPI\EbayFulFillmentClient\Model\OrderLineItems[]',
        'monetary_transactions' => '\OpenAPI\EbayFulFillmentClient\Model\MonetaryTransaction[]',
        'open_date' => 'string',
        'order_id' => 'string',
        'payment_dispute_id' => 'string',
        'payment_dispute_status' => 'string',
        'reason' => 'string',
        'resolution' => '\OpenAPI\EbayFulFillmentClient\Model\PaymentDisputeOutcomeDetail',
        'respond_by_date' => 'string',
        'return_address' => '\OpenAPI\EbayFulFillmentClient\Model\ReturnAddress',
        'revision' => 'int',
        'seller_response' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'available_choices' => null,
        'buyer_provided' => null,
        'buyer_username' => null,
        'closed_date' => null,
        'evidence' => null,
        'evidence_requests' => null,
        'line_items' => null,
        'monetary_transactions' => null,
        'open_date' => null,
        'order_id' => null,
        'payment_dispute_id' => null,
        'payment_dispute_status' => null,
        'reason' => null,
        'resolution' => null,
        'respond_by_date' => null,
        'return_address' => null,
        'revision' => 'int32',
        'seller_response' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'available_choices' => 'availableChoices',
        'buyer_provided' => 'buyerProvided',
        'buyer_username' => 'buyerUsername',
        'closed_date' => 'closedDate',
        'evidence' => 'evidence',
        'evidence_requests' => 'evidenceRequests',
        'line_items' => 'lineItems',
        'monetary_transactions' => 'monetaryTransactions',
        'open_date' => 'openDate',
        'order_id' => 'orderId',
        'payment_dispute_id' => 'paymentDisputeId',
        'payment_dispute_status' => 'paymentDisputeStatus',
        'reason' => 'reason',
        'resolution' => 'resolution',
        'respond_by_date' => 'respondByDate',
        'return_address' => 'returnAddress',
        'revision' => 'revision',
        'seller_response' => 'sellerResponse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'available_choices' => 'setAvailableChoices',
        'buyer_provided' => 'setBuyerProvided',
        'buyer_username' => 'setBuyerUsername',
        'closed_date' => 'setClosedDate',
        'evidence' => 'setEvidence',
        'evidence_requests' => 'setEvidenceRequests',
        'line_items' => 'setLineItems',
        'monetary_transactions' => 'setMonetaryTransactions',
        'open_date' => 'setOpenDate',
        'order_id' => 'setOrderId',
        'payment_dispute_id' => 'setPaymentDisputeId',
        'payment_dispute_status' => 'setPaymentDisputeStatus',
        'reason' => 'setReason',
        'resolution' => 'setResolution',
        'respond_by_date' => 'setRespondByDate',
        'return_address' => 'setReturnAddress',
        'revision' => 'setRevision',
        'seller_response' => 'setSellerResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'available_choices' => 'getAvailableChoices',
        'buyer_provided' => 'getBuyerProvided',
        'buyer_username' => 'getBuyerUsername',
        'closed_date' => 'getClosedDate',
        'evidence' => 'getEvidence',
        'evidence_requests' => 'getEvidenceRequests',
        'line_items' => 'getLineItems',
        'monetary_transactions' => 'getMonetaryTransactions',
        'open_date' => 'getOpenDate',
        'order_id' => 'getOrderId',
        'payment_dispute_id' => 'getPaymentDisputeId',
        'payment_dispute_status' => 'getPaymentDisputeStatus',
        'reason' => 'getReason',
        'resolution' => 'getResolution',
        'respond_by_date' => 'getRespondByDate',
        'return_address' => 'getReturnAddress',
        'revision' => 'getRevision',
        'seller_response' => 'getSellerResponse'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['available_choices'] = $data['available_choices'] ?? null;
        $this->container['buyer_provided'] = $data['buyer_provided'] ?? null;
        $this->container['buyer_username'] = $data['buyer_username'] ?? null;
        $this->container['closed_date'] = $data['closed_date'] ?? null;
        $this->container['evidence'] = $data['evidence'] ?? null;
        $this->container['evidence_requests'] = $data['evidence_requests'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['monetary_transactions'] = $data['monetary_transactions'] ?? null;
        $this->container['open_date'] = $data['open_date'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['payment_dispute_id'] = $data['payment_dispute_id'] ?? null;
        $this->container['payment_dispute_status'] = $data['payment_dispute_status'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['resolution'] = $data['resolution'] ?? null;
        $this->container['respond_by_date'] = $data['respond_by_date'] ?? null;
        $this->container['return_address'] = $data['return_address'] ?? null;
        $this->container['revision'] = $data['revision'] ?? null;
        $this->container['seller_response'] = $data['seller_response'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amount
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\SimpleAmount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\SimpleAmount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets available_choices
     *
     * @return string[]|null
     */
    public function getAvailableChoices()
    {
        return $this->container['available_choices'];
    }

    /**
     * Sets available_choices
     *
     * @param string[]|null $available_choices The value(s) returned in this array indicate the choices that the seller has when responding to the payment dispute. Once the seller has responded to the payment dispute, this field will no longer be shown, and instead, the sellerResponse field will show the decision that the seller made.
     *
     * @return self
     */
    public function setAvailableChoices($available_choices)
    {
        $this->container['available_choices'] = $available_choices;

        return $this;
    }

    /**
     * Gets buyer_provided
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\InfoFromBuyer|null
     */
    public function getBuyerProvided()
    {
        return $this->container['buyer_provided'];
    }

    /**
     * Sets buyer_provided
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\InfoFromBuyer|null $buyer_provided buyer_provided
     *
     * @return self
     */
    public function setBuyerProvided($buyer_provided)
    {
        $this->container['buyer_provided'] = $buyer_provided;

        return $this;
    }

    /**
     * Gets buyer_username
     *
     * @return string|null
     */
    public function getBuyerUsername()
    {
        return $this->container['buyer_username'];
    }

    /**
     * Sets buyer_username
     *
     * @param string|null $buyer_username This is the eBay user ID of the buyer that initiated the payment dispute.
     *
     * @return self
     */
    public function setBuyerUsername($buyer_username)
    {
        $this->container['buyer_username'] = $buyer_username;

        return $this;
    }

    /**
     * Gets closed_date
     *
     * @return string|null
     */
    public function getClosedDate()
    {
        return $this->container['closed_date'];
    }

    /**
     * Sets closed_date
     *
     * @param string|null $closed_date The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the CLOSED state. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return self
     */
    public function setClosedDate($closed_date)
    {
        $this->container['closed_date'] = $closed_date;

        return $this;
    }

    /**
     * Gets evidence
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\DisputeEvidence[]|null
     */
    public function getEvidence()
    {
        return $this->container['evidence'];
    }

    /**
     * Sets evidence
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\DisputeEvidence[]|null $evidence This container shows any evidence that has been provided by the seller to contest the payment dispute. Evidence may include shipment tracking information, proof of authentication documentation, image(s) to proof that an item is as described, or financial documentation/invoice. This container is only returned if the seller has provided at least one document used as evidence against the payment dispute.
     *
     * @return self
     */
    public function setEvidence($evidence)
    {
        $this->container['evidence'] = $evidence;

        return $this;
    }

    /**
     * Gets evidence_requests
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\EvidenceRequest[]|null
     */
    public function getEvidenceRequests()
    {
        return $this->container['evidence_requests'];
    }

    /**
     * Sets evidence_requests
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\EvidenceRequest[]|null $evidence_requests This container is returned if one or more evidence documents are being requested from the seller.
     *
     * @return self
     */
    public function setEvidenceRequests($evidence_requests)
    {
        $this->container['evidence_requests'] = $evidence_requests;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\OrderLineItems[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\OrderLineItems[]|null $line_items This array is used to identify one or more order line items associated with the payment dispute. There will always be at least one itemId/lineItemId pair returned in this array.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets monetary_transactions
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\MonetaryTransaction[]|null
     */
    public function getMonetaryTransactions()
    {
        return $this->container['monetary_transactions'];
    }

    /**
     * Sets monetary_transactions
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\MonetaryTransaction[]|null $monetary_transactions This array provide details about one or more monetary transactions that occur as part of a payment dispute. This array is only returned once one or more monetary transacations occur with a payment dispute.
     *
     * @return self
     */
    public function setMonetaryTransactions($monetary_transactions)
    {
        $this->container['monetary_transactions'] = $monetary_transactions;

        return $this;
    }

    /**
     * Gets open_date
     *
     * @return string|null
     */
    public function getOpenDate()
    {
        return $this->container['open_date'];
    }

    /**
     * Sets open_date
     *
     * @param string|null $open_date The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return self
     */
    public function setOpenDate($open_date)
    {
        $this->container['open_date'] = $open_date;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id This is the unique identifier of the order involved in the payment dispute. Note: eBay rolled out a new Order ID format in June 2019. The legacy APIs still support the old and new order ID format to identify orders, but only the new order ID format is returned in REST-based API responses.
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets payment_dispute_id
     *
     * @return string|null
     */
    public function getPaymentDisputeId()
    {
        return $this->container['payment_dispute_id'];
    }

    /**
     * Sets payment_dispute_id
     *
     * @param string|null $payment_dispute_id This is the unique identifier of the payment dispute. This is the same identifier that is passed in to the call URI. This identifier is automatically created by eBay once the payment dispute comes into the eBay Managed Payments system.
     *
     * @return self
     */
    public function setPaymentDisputeId($payment_dispute_id)
    {
        $this->container['payment_dispute_id'] = $payment_dispute_id;

        return $this;
    }

    /**
     * Gets payment_dispute_status
     *
     * @return string|null
     */
    public function getPaymentDisputeStatus()
    {
        return $this->container['payment_dispute_status'];
    }

    /**
     * Sets payment_dispute_status
     *
     * @param string|null $payment_dispute_status The enumeration value in this field gives the current status of the payment dispute. The status of a payment dispute partially determines other fields that are returned in the response. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:DisputeStateEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setPaymentDisputeStatus($payment_dispute_status)
    {
        $this->container['payment_dispute_status'] = $payment_dispute_status;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See DisputeReasonEnum type for a description of the supported reasons that buyers can give for initiating a payment dispute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:DisputeReasonEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets resolution
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\PaymentDisputeOutcomeDetail|null
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\PaymentDisputeOutcomeDetail|null $resolution resolution
     *
     * @return self
     */
    public function setResolution($resolution)
    {
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets respond_by_date
     *
     * @return string|null
     */
    public function getRespondByDate()
    {
        return $this->container['respond_by_date'];
    }

    /**
     * Sets respond_by_date
     *
     * @param string|null $respond_by_date The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the ACTION_NEEDED state. For payment disputes that currently require action by the seller, that same seller should look at the availableChoices array to see the available actions. The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: yyyy-MM-ddThh:mm.ss.sssZ. An example would be 2019-08-04T19:09:02.768Z.
     *
     * @return self
     */
    public function setRespondByDate($respond_by_date)
    {
        $this->container['respond_by_date'] = $respond_by_date;

        return $this;
    }

    /**
     * Gets return_address
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\ReturnAddress|null
     */
    public function getReturnAddress()
    {
        return $this->container['return_address'];
    }

    /**
     * Sets return_address
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\ReturnAddress|null $return_address return_address
     *
     * @return self
     */
    public function setReturnAddress($return_address)
    {
        $this->container['return_address'] = $return_address;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int|null
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int|null $revision This integer value indicates the revision number of the payment dispute. Each time an action is taken against a payment dispute, this integer value increases by 1.
     *
     * @return self
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets seller_response
     *
     * @return string|null
     */
    public function getSellerResponse()
    {
        return $this->container['seller_response'];
    }

    /**
     * Sets seller_response
     *
     * @param string|null $seller_response The enumeration value returned in this field indicates how the seller has responded to the payment dispute. The seller has the option of accepting the payment dispute and agreeing to issue a refund, accepting the payment dispute and agreeing to issue a refund as long as the buyer returns the item, or contesting the payment dispute. This field is returned as soon as the seller makes an initial decision on the payment dispute. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:SellerResponseEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setSellerResponse($seller_response)
    {
        $this->container['seller_response'] = $seller_response;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


