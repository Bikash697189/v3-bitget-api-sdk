<?php
/**
 * SpotInfoResult
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
 * SpotInfoResult Class Doc Comment
 *
 * @category Class
 * @package  Bitget
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SpotInfoResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SpotInfoResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'max_count' => 'string',
        'surplus_count' => 'string',
        'symbol_id' => 'string',
        'symbol_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'max_count' => null,
        'surplus_count' => null,
        'symbol_id' => null,
        'symbol_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'max_count' => false,
		'surplus_count' => false,
		'symbol_id' => false,
		'symbol_name' => false
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
        'max_count' => 'maxCount',
        'surplus_count' => 'surplusCount',
        'symbol_id' => 'symbolId',
        'symbol_name' => 'symbolName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_count' => 'setMaxCount',
        'surplus_count' => 'setSurplusCount',
        'symbol_id' => 'setSymbolId',
        'symbol_name' => 'setSymbolName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_count' => 'getMaxCount',
        'surplus_count' => 'getSurplusCount',
        'symbol_id' => 'getSymbolId',
        'symbol_name' => 'getSymbolName'
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
        $this->setIfExists('max_count', $data ?? [], null);
        $this->setIfExists('surplus_count', $data ?? [], null);
        $this->setIfExists('symbol_id', $data ?? [], null);
        $this->setIfExists('symbol_name', $data ?? [], null);
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
     * Gets max_count
     *
     * @return string|null
     */
    public function getMaxCount()
    {
        return $this->container['max_count'];
    }

    /**
     * Sets max_count
     *
     * @param string|null $max_count max_count
     *
     * @return self
     */
    public function setMaxCount($max_count)
    {

        if (is_null($max_count)) {
            throw new \InvalidArgumentException('non-nullable max_count cannot be null');
        }

        $this->container['max_count'] = $max_count;

        return $this;
    }

    /**
     * Gets surplus_count
     *
     * @return string|null
     */
    public function getSurplusCount()
    {
        return $this->container['surplus_count'];
    }

    /**
     * Sets surplus_count
     *
     * @param string|null $surplus_count surplus_count
     *
     * @return self
     */
    public function setSurplusCount($surplus_count)
    {

        if (is_null($surplus_count)) {
            throw new \InvalidArgumentException('non-nullable surplus_count cannot be null');
        }

        $this->container['surplus_count'] = $surplus_count;

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
     * Gets symbol_name
     *
     * @return string|null
     */
    public function getSymbolName()
    {
        return $this->container['symbol_name'];
    }

    /**
     * Sets symbol_name
     *
     * @param string|null $symbol_name symbol_name
     *
     * @return self
     */
    public function setSymbolName($symbol_name)
    {

        if (is_null($symbol_name)) {
            throw new \InvalidArgumentException('non-nullable symbol_name cannot be null');
        }

        $this->container['symbol_name'] = $symbol_name;

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


