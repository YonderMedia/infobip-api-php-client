<?php
/**
 * SmsAdvancedTextualRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 */

/**
 * Infobip Client API Libraries OpenAPI Specification
 *
 * OpenAPI specification containing public endpoints supported in client API libraries.
 *
 * Contact: support@infobip.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Infobip\Model;

use ArrayAccess;
use Infobip\ObjectSerializer;

/**
 * SmsAdvancedTextualRequest Class Doc Comment
 *
 * @category Class
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SmsAdvancedTextualRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmsAdvancedTextualRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bulkId' => 'string',
        'messages' => '\Infobip\Model\SmsTextualMessage[]',
        'sendingSpeedLimit' => '\Infobip\Model\SmsSendingSpeedLimit',
        'tracking' => '\Infobip\Model\SmsTracking'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bulkId' => null,
        'messages' => null,
        'sendingSpeedLimit' => null,
        'tracking' => null
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
        'bulkId' => 'bulkId',
        'messages' => 'messages',
        'sendingSpeedLimit' => 'sendingSpeedLimit',
        'tracking' => 'tracking'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bulkId' => 'setBulkId',
        'messages' => 'setMessages',
        'sendingSpeedLimit' => 'setSendingSpeedLimit',
        'tracking' => 'setTracking'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bulkId' => 'getBulkId',
        'messages' => 'getMessages',
        'sendingSpeedLimit' => 'getSendingSpeedLimit',
        'tracking' => 'getTracking'
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
        $this->container['bulkId'] = $data['bulkId'] ?? null;
        $this->container['messages'] = $data['messages'] ?? null;
        $this->container['sendingSpeedLimit'] = $data['sendingSpeedLimit'] ?? null;
        $this->container['tracking'] = $data['tracking'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['messages'] === null) {
            $invalidProperties[] = "'messages' can't be null";
        }
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
     * Gets bulkId
     *
     * @return string|null
     */
    public function getBulkId()
    {
        return $this->container['bulkId'];
    }

    /**
     * Sets bulkId
     *
     * @param string|null $bulkId Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request. If not provided, it will be auto-generated and returned in the API response. Typically, used to fetch [delivery reports](#channels/sms/get-outbound-sms-message-delivery-reports) and [message logs](#channels/sms/get-outbound-sms-message-logs).
     *
     * @return self
     */
    public function setBulkId($bulkId)
    {
        $this->container['bulkId'] = $bulkId;

        return $this;
    }

    /**
     * Gets messages
     *
     * @return \Infobip\Model\SmsTextualMessage[]
     */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
     * Sets messages
     *
     * @param \Infobip\Model\SmsTextualMessage[] $messages An array of message objects of a single message or multiple messages sent under one bulk ID.
     *
     * @return self
     */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;

        return $this;
    }

    /**
     * Gets sendingSpeedLimit
     *
     * @return \Infobip\Model\SmsSendingSpeedLimit|null
     */
    public function getSendingSpeedLimit()
    {
        return $this->container['sendingSpeedLimit'];
    }

    /**
     * Sets sendingSpeedLimit
     *
     * @param \Infobip\Model\SmsSendingSpeedLimit|null $sendingSpeedLimit sendingSpeedLimit
     *
     * @return self
     */
    public function setSendingSpeedLimit($sendingSpeedLimit)
    {
        $this->container['sendingSpeedLimit'] = $sendingSpeedLimit;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return \Infobip\Model\SmsTracking|null
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param \Infobip\Model\SmsTracking|null $tracking tracking
     *
     * @return self
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

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
    public function offsetGet($offset): mixed
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
    public function jsonSerialize(): mixed
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
