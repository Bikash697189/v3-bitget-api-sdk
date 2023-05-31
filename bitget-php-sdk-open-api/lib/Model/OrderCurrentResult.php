<?php
/**
 * OrderCurrentResult
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Bitget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bitget Open API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bitget\Model;

use \ArrayAccess;
use \Bitget\ObjectSerializer;

/**
 * OrderCurrentResult Class Doc Comment
 *
 * @category Class
 * @package  Bitget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderCurrentResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderCurrentResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'buy_delegate_count' => 'string',
        'buy_price' => 'string',
        'buy_time' => 'string',
        'deal_count' => 'string',
        'hold_count' => 'string',
        'profit' => 'string',
        'profit_rate' => 'string',
        'stop_loss_price' => 'string',
        'stop_profit_price' => 'string',
        'symbol_display_name' => 'string',
        'symbol_id' => 'string',
        'tracking_no' => 'string',
        'tracking_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'buy_delegate_count' => null,
        'buy_price' => null,
        'buy_time' => null,
        'deal_count' => null,
        'hold_count' => null,
        'profit' => null,
        'profit_rate' => null,
        'stop_loss_price' => null,
        'stop_profit_price' => null,
        'symbol_display_name' => null,
        'symbol_id' => null,
        'tracking_no' => null,
        'tracking_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'buy_delegate_count' => false,
		'buy_price' => false,
		'buy_time' => false,
		'deal_count' => false,
		'hold_count' => false,
		'profit' => false,
		'profit_rate' => false,
		'stop_loss_price' => false,
		'stop_profit_price' => false,
		'symbol_display_name' => false,
		'symbol_id' => false,
		'tracking_no' => false,
		'tracking_type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'buy_delegate_count' => 'buyDelegateCount',
        'buy_price' => 'buyPrice',
        'buy_time' => 'buyTime',
        'deal_count' => 'dealCount',
        'hold_count' => 'holdCount',
        'profit' => 'profit',
        'profit_rate' => 'profitRate',
        'stop_loss_price' => 'stopLossPrice',
        'stop_profit_price' => 'stopProfitPrice',
        'symbol_display_name' => 'symbolDisplayName',
        'symbol_id' => 'symbolId',
        'tracking_no' => 'trackingNo',
        'tracking_type' => 'trackingType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buy_delegate_count' => 'setBuyDelegateCount',
        'buy_price' => 'setBuyPrice',
        'buy_time' => 'setBuyTime',
        'deal_count' => 'setDealCount',
        'hold_count' => 'setHoldCount',
        'profit' => 'setProfit',
        'profit_rate' => 'setProfitRate',
        'stop_loss_price' => 'setStopLossPrice',
        'stop_profit_price' => 'setStopProfitPrice',
        'symbol_display_name' => 'setSymbolDisplayName',
        'symbol_id' => 'setSymbolId',
        'tracking_no' => 'setTrackingNo',
        'tracking_type' => 'setTrackingType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buy_delegate_count' => 'getBuyDelegateCount',
        'buy_price' => 'getBuyPrice',
        'buy_time' => 'getBuyTime',
        'deal_count' => 'getDealCount',
        'hold_count' => 'getHoldCount',
        'profit' => 'getProfit',
        'profit_rate' => 'getProfitRate',
        'stop_loss_price' => 'getStopLossPrice',
        'stop_profit_price' => 'getStopProfitPrice',
        'symbol_display_name' => 'getSymbolDisplayName',
        'symbol_id' => 'getSymbolId',
        'tracking_no' => 'getTrackingNo',
        'tracking_type' => 'getTrackingType'
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
        $this->setIfExists('buy_delegate_count', $data ?? [], null);
        $this->setIfExists('buy_price', $data ?? [], null);
        $this->setIfExists('buy_time', $data ?? [], null);
        $this->setIfExists('deal_count', $data ?? [], null);
        $this->setIfExists('hold_count', $data ?? [], null);
        $this->setIfExists('profit', $data ?? [], null);
        $this->setIfExists('profit_rate', $data ?? [], null);
        $this->setIfExists('stop_loss_price', $data ?? [], null);
        $this->setIfExists('stop_profit_price', $data ?? [], null);
        $this->setIfExists('symbol_display_name', $data ?? [], null);
        $this->setIfExists('symbol_id', $data ?? [], null);
        $this->setIfExists('tracking_no', $data ?? [], null);
        $this->setIfExists('tracking_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets buy_delegate_count
     *
     * @return string|null
     */
    public function getBuyDelegateCount()
    {
        return $this->container['buy_delegate_count'];
    }

    /**
     * Sets buy_delegate_count
     *
     * @param string|null $buy_delegate_count buy_delegate_count
     *
     * @return self
     */
    public function setBuyDelegateCount($buy_delegate_count)
    {

        if (is_null($buy_delegate_count)) {
            throw new \InvalidArgumentException('non-nullable buy_delegate_count cannot be null');
        }

        $this->container['buy_delegate_count'] = $buy_delegate_count;

        return $this;
    }

    /**
     * Gets buy_price
     *
     * @return string|null
     */
    public function getBuyPrice()
    {
        return $this->container['buy_price'];
    }

    /**
     * Sets buy_price
     *
     * @param string|null $buy_price buy_price
     *
     * @return self
     */
    public function setBuyPrice($buy_price)
    {

        if (is_null($buy_price)) {
            throw new \InvalidArgumentException('non-nullable buy_price cannot be null');
        }

        $this->container['buy_price'] = $buy_price;

        return $this;
    }

    /**
     * Gets buy_time
     *
     * @return string|null
     */
    public function getBuyTime()
    {
        return $this->container['buy_time'];
    }

    /**
     * Sets buy_time
     *
     * @param string|null $buy_time buy_time
     *
     * @return self
     */
    public function setBuyTime($buy_time)
    {

        if (is_null($buy_time)) {
            throw new \InvalidArgumentException('non-nullable buy_time cannot be null');
        }

        $this->container['buy_time'] = $buy_time;

        return $this;
    }

    /**
     * Gets deal_count
     *
     * @return string|null
     */
    public function getDealCount()
    {
        return $this->container['deal_count'];
    }

    /**
     * Sets deal_count
     *
     * @param string|null $deal_count deal_count
     *
     * @return self
     */
    public function setDealCount($deal_count)
    {

        if (is_null($deal_count)) {
            throw new \InvalidArgumentException('non-nullable deal_count cannot be null');
        }

        $this->container['deal_count'] = $deal_count;

        return $this;
    }

    /**
     * Gets hold_count
     *
     * @return string|null
     */
    public function getHoldCount()
    {
        return $this->container['hold_count'];
    }

    /**
     * Sets hold_count
     *
     * @param string|null $hold_count hold_count
     *
     * @return self
     */
    public function setHoldCount($hold_count)
    {

        if (is_null($hold_count)) {
            throw new \InvalidArgumentException('non-nullable hold_count cannot be null');
        }

        $this->container['hold_count'] = $hold_count;

        return $this;
    }

    /**
     * Gets profit
     *
     * @return string|null
     */
    public function getProfit()
    {
        return $this->container['profit'];
    }

    /**
     * Sets profit
     *
     * @param string|null $profit profit
     *
     * @return self
     */
    public function setProfit($profit)
    {

        if (is_null($profit)) {
            throw new \InvalidArgumentException('non-nullable profit cannot be null');
        }

        $this->container['profit'] = $profit;

        return $this;
    }

    /**
     * Gets profit_rate
     *
     * @return string|null
     */
    public function getProfitRate()
    {
        return $this->container['profit_rate'];
    }

    /**
     * Sets profit_rate
     *
     * @param string|null $profit_rate profit_rate
     *
     * @return self
     */
    public function setProfitRate($profit_rate)
    {

        if (is_null($profit_rate)) {
            throw new \InvalidArgumentException('non-nullable profit_rate cannot be null');
        }

        $this->container['profit_rate'] = $profit_rate;

        return $this;
    }

    /**
     * Gets stop_loss_price
     *
     * @return string|null
     */
    public function getStopLossPrice()
    {
        return $this->container['stop_loss_price'];
    }

    /**
     * Sets stop_loss_price
     *
     * @param string|null $stop_loss_price stop_loss_price
     *
     * @return self
     */
    public function setStopLossPrice($stop_loss_price)
    {

        if (is_null($stop_loss_price)) {
            throw new \InvalidArgumentException('non-nullable stop_loss_price cannot be null');
        }

        $this->container['stop_loss_price'] = $stop_loss_price;

        return $this;
    }

    /**
     * Gets stop_profit_price
     *
     * @return string|null
     */
    public function getStopProfitPrice()
    {
        return $this->container['stop_profit_price'];
    }

    /**
     * Sets stop_profit_price
     *
     * @param string|null $stop_profit_price stop_profit_price
     *
     * @return self
     */
    public function setStopProfitPrice($stop_profit_price)
    {

        if (is_null($stop_profit_price)) {
            throw new \InvalidArgumentException('non-nullable stop_profit_price cannot be null');
        }

        $this->container['stop_profit_price'] = $stop_profit_price;

        return $this;
    }

    /**
     * Gets symbol_display_name
     *
     * @return string|null
     */
    public function getSymbolDisplayName()
    {
        return $this->container['symbol_display_name'];
    }

    /**
     * Sets symbol_display_name
     *
     * @param string|null $symbol_display_name symbol_display_name
     *
     * @return self
     */
    public function setSymbolDisplayName($symbol_display_name)
    {

        if (is_null($symbol_display_name)) {
            throw new \InvalidArgumentException('non-nullable symbol_display_name cannot be null');
        }

        $this->container['symbol_display_name'] = $symbol_display_name;

        return $this;
    }

    /**
     * Gets symbol_id
     *
     * @return string|null
     */
    public function getSymbolId()
    {
        return $this->container['symbol_id'];
    }

    /**
     * Sets symbol_id
     *
     * @param string|null $symbol_id symbol_id
     *
     * @return self
     */
    public function setSymbolId($symbol_id)
    {

        if (is_null($symbol_id)) {
            throw new \InvalidArgumentException('non-nullable symbol_id cannot be null');
        }

        $this->container['symbol_id'] = $symbol_id;

        return $this;
    }

    /**
     * Gets tracking_no
     *
     * @return string|null
     */
    public function getTrackingNo()
    {
        return $this->container['tracking_no'];
    }

    /**
     * Sets tracking_no
     *
     * @param string|null $tracking_no tracking_no
     *
     * @return self
     */
    public function setTrackingNo($tracking_no)
    {

        if (is_null($tracking_no)) {
            throw new \InvalidArgumentException('non-nullable tracking_no cannot be null');
        }

        $this->container['tracking_no'] = $tracking_no;

        return $this;
    }

    /**
     * Gets tracking_type
     *
     * @return string|null
     */
    public function getTrackingType()
    {
        return $this->container['tracking_type'];
    }

    /**
     * Sets tracking_type
     *
     * @param string|null $tracking_type tracking_type
     *
     * @return self
     */
    public function setTrackingType($tracking_type)
    {

        if (is_null($tracking_type)) {
            throw new \InvalidArgumentException('non-nullable tracking_type cannot be null');
        }

        $this->container['tracking_type'] = $tracking_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


