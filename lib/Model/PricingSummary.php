<?php
/**
 * PricingSummary
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
 * PricingSummary Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\EbayFulFillmentClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PricingSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PricingSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adjustment' => '\OpenAPI\EbayFulFillmentClient\Model\Amount',
        'delivery_cost' => '\OpenAPI\EbayFulFillmentClient\Model\Amount',
        'delivery_discount' => '\OpenAPI\EbayFulFillmentClient\Model\Amount',
        'fee' => '\OpenAPI\EbayFulFillmentClient\Model\Amount',
        'price_discount_subtotal' => '\OpenAPI\EbayFulFillmentClient\Model\Amount',
        'price_subtotal' => '\OpenAPI\EbayFulFillmentClient\Model\Amount',
        'tax' => '\OpenAPI\EbayFulFillmentClient\Model\Amount',
        'total' => '\OpenAPI\EbayFulFillmentClient\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adjustment' => null,
        'delivery_cost' => null,
        'delivery_discount' => null,
        'fee' => null,
        'price_discount_subtotal' => null,
        'price_subtotal' => null,
        'tax' => null,
        'total' => null
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
        'adjustment' => 'adjustment',
        'delivery_cost' => 'deliveryCost',
        'delivery_discount' => 'deliveryDiscount',
        'fee' => 'fee',
        'price_discount_subtotal' => 'priceDiscountSubtotal',
        'price_subtotal' => 'priceSubtotal',
        'tax' => 'tax',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjustment' => 'setAdjustment',
        'delivery_cost' => 'setDeliveryCost',
        'delivery_discount' => 'setDeliveryDiscount',
        'fee' => 'setFee',
        'price_discount_subtotal' => 'setPriceDiscountSubtotal',
        'price_subtotal' => 'setPriceSubtotal',
        'tax' => 'setTax',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjustment' => 'getAdjustment',
        'delivery_cost' => 'getDeliveryCost',
        'delivery_discount' => 'getDeliveryDiscount',
        'fee' => 'getFee',
        'price_discount_subtotal' => 'getPriceDiscountSubtotal',
        'price_subtotal' => 'getPriceSubtotal',
        'tax' => 'getTax',
        'total' => 'getTotal'
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
        $this->container['adjustment'] = $data['adjustment'] ?? null;
        $this->container['delivery_cost'] = $data['delivery_cost'] ?? null;
        $this->container['delivery_discount'] = $data['delivery_discount'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['price_discount_subtotal'] = $data['price_discount_subtotal'] ?? null;
        $this->container['price_subtotal'] = $data['price_subtotal'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
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
     * Gets adjustment
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\Amount|null
     */
    public function getAdjustment()
    {
        return $this->container['adjustment'];
    }

    /**
     * Sets adjustment
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\Amount|null $adjustment adjustment
     *
     * @return self
     */
    public function setAdjustment($adjustment)
    {
        $this->container['adjustment'] = $adjustment;

        return $this;
    }

    /**
     * Gets delivery_cost
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\Amount|null
     */
    public function getDeliveryCost()
    {
        return $this->container['delivery_cost'];
    }

    /**
     * Sets delivery_cost
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\Amount|null $delivery_cost delivery_cost
     *
     * @return self
     */
    public function setDeliveryCost($delivery_cost)
    {
        $this->container['delivery_cost'] = $delivery_cost;

        return $this;
    }

    /**
     * Gets delivery_discount
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\Amount|null
     */
    public function getDeliveryDiscount()
    {
        return $this->container['delivery_discount'];
    }

    /**
     * Sets delivery_discount
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\Amount|null $delivery_discount delivery_discount
     *
     * @return self
     */
    public function setDeliveryDiscount($delivery_discount)
    {
        $this->container['delivery_discount'] = $delivery_discount;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\Amount|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\Amount|null $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets price_discount_subtotal
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\Amount|null
     */
    public function getPriceDiscountSubtotal()
    {
        return $this->container['price_discount_subtotal'];
    }

    /**
     * Sets price_discount_subtotal
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\Amount|null $price_discount_subtotal price_discount_subtotal
     *
     * @return self
     */
    public function setPriceDiscountSubtotal($price_discount_subtotal)
    {
        $this->container['price_discount_subtotal'] = $price_discount_subtotal;

        return $this;
    }

    /**
     * Gets price_subtotal
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\Amount|null
     */
    public function getPriceSubtotal()
    {
        return $this->container['price_subtotal'];
    }

    /**
     * Sets price_subtotal
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\Amount|null $price_subtotal price_subtotal
     *
     * @return self
     */
    public function setPriceSubtotal($price_subtotal)
    {
        $this->container['price_subtotal'] = $price_subtotal;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\Amount|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\Amount|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \OpenAPI\EbayFulFillmentClient\Model\Amount|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \OpenAPI\EbayFulFillmentClient\Model\Amount|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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


