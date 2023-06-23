<?php
/**
 * AppliedCouponObjectExtended
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  LagoClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lago API documentation
 *
 * Lago API allows your application to push customer information and metrics (events) from your application to the billing application.
 *
 * The version of the OpenAPI document: 0.36.0-beta
 * Contact: tech@getlago.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace LagoClient\Model;

use \ArrayAccess;
use \LagoClient\ObjectSerializer;

/**
 * AppliedCouponObjectExtended Class Doc Comment
 *
 * @category Class
 * @package  LagoClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AppliedCouponObjectExtended implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppliedCouponObjectExtended';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lago_id' => 'string',
        'lago_coupon_id' => 'string',
        'coupon_code' => 'string',
        'lago_customer_id' => 'string',
        'external_customer_id' => 'string',
        'status' => 'string',
        'amount_cents' => 'int',
        'amount_cents_remaining' => 'int',
        'amount_currency' => 'string',
        'percentage_rate' => 'float',
        'frequency' => 'string',
        'frequency_duration' => 'int',
        'frequency_duration_remaining' => 'int',
        'expiration_at' => '\DateTime',
        'created_at' => '\DateTime',
        'terminated_at' => '\DateTime',
        'credits' => '\LagoClient\Model\CreditObject[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lago_id' => 'uuid',
        'lago_coupon_id' => 'uuid',
        'coupon_code' => null,
        'lago_customer_id' => 'uuid',
        'external_customer_id' => null,
        'status' => null,
        'amount_cents' => null,
        'amount_cents_remaining' => null,
        'amount_currency' => null,
        'percentage_rate' => null,
        'frequency' => null,
        'frequency_duration' => null,
        'frequency_duration_remaining' => null,
        'expiration_at' => 'date-time',
        'created_at' => 'date-time',
        'terminated_at' => 'date-time',
        'credits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lago_id' => false,
		'lago_coupon_id' => false,
		'coupon_code' => false,
		'lago_customer_id' => false,
		'external_customer_id' => false,
		'status' => false,
		'amount_cents' => false,
		'amount_cents_remaining' => false,
		'amount_currency' => false,
		'percentage_rate' => false,
		'frequency' => false,
		'frequency_duration' => false,
		'frequency_duration_remaining' => false,
		'expiration_at' => false,
		'created_at' => false,
		'terminated_at' => false,
		'credits' => false
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
        'lago_id' => 'lago_id',
        'lago_coupon_id' => 'lago_coupon_id',
        'coupon_code' => 'coupon_code',
        'lago_customer_id' => 'lago_customer_id',
        'external_customer_id' => 'external_customer_id',
        'status' => 'status',
        'amount_cents' => 'amount_cents',
        'amount_cents_remaining' => 'amount_cents_remaining',
        'amount_currency' => 'amount_currency',
        'percentage_rate' => 'percentage_rate',
        'frequency' => 'frequency',
        'frequency_duration' => 'frequency_duration',
        'frequency_duration_remaining' => 'frequency_duration_remaining',
        'expiration_at' => 'expiration_at',
        'created_at' => 'created_at',
        'terminated_at' => 'terminated_at',
        'credits' => 'credits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lago_id' => 'setLagoId',
        'lago_coupon_id' => 'setLagoCouponId',
        'coupon_code' => 'setCouponCode',
        'lago_customer_id' => 'setLagoCustomerId',
        'external_customer_id' => 'setExternalCustomerId',
        'status' => 'setStatus',
        'amount_cents' => 'setAmountCents',
        'amount_cents_remaining' => 'setAmountCentsRemaining',
        'amount_currency' => 'setAmountCurrency',
        'percentage_rate' => 'setPercentageRate',
        'frequency' => 'setFrequency',
        'frequency_duration' => 'setFrequencyDuration',
        'frequency_duration_remaining' => 'setFrequencyDurationRemaining',
        'expiration_at' => 'setExpirationAt',
        'created_at' => 'setCreatedAt',
        'terminated_at' => 'setTerminatedAt',
        'credits' => 'setCredits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lago_id' => 'getLagoId',
        'lago_coupon_id' => 'getLagoCouponId',
        'coupon_code' => 'getCouponCode',
        'lago_customer_id' => 'getLagoCustomerId',
        'external_customer_id' => 'getExternalCustomerId',
        'status' => 'getStatus',
        'amount_cents' => 'getAmountCents',
        'amount_cents_remaining' => 'getAmountCentsRemaining',
        'amount_currency' => 'getAmountCurrency',
        'percentage_rate' => 'getPercentageRate',
        'frequency' => 'getFrequency',
        'frequency_duration' => 'getFrequencyDuration',
        'frequency_duration_remaining' => 'getFrequencyDurationRemaining',
        'expiration_at' => 'getExpirationAt',
        'created_at' => 'getCreatedAt',
        'terminated_at' => 'getTerminatedAt',
        'credits' => 'getCredits'
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

    public const STATUS_ACTIVE = 'active';
    public const STATUS_TERMINATED = 'terminated';
    public const FREQUENCY_ONCE = 'once';
    public const FREQUENCY_RECURRING = 'recurring';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_TERMINATED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_ONCE,
            self::FREQUENCY_RECURRING,
        ];
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
        $this->setIfExists('lago_id', $data ?? [], null);
        $this->setIfExists('lago_coupon_id', $data ?? [], null);
        $this->setIfExists('coupon_code', $data ?? [], null);
        $this->setIfExists('lago_customer_id', $data ?? [], null);
        $this->setIfExists('external_customer_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('amount_cents', $data ?? [], null);
        $this->setIfExists('amount_cents_remaining', $data ?? [], null);
        $this->setIfExists('amount_currency', $data ?? [], null);
        $this->setIfExists('percentage_rate', $data ?? [], null);
        $this->setIfExists('frequency', $data ?? [], null);
        $this->setIfExists('frequency_duration', $data ?? [], null);
        $this->setIfExists('frequency_duration_remaining', $data ?? [], null);
        $this->setIfExists('expiration_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('terminated_at', $data ?? [], null);
        $this->setIfExists('credits', $data ?? [], null);
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

        if ($this->container['lago_id'] === null) {
            $invalidProperties[] = "'lago_id' can't be null";
        }
        if ($this->container['lago_coupon_id'] === null) {
            $invalidProperties[] = "'lago_coupon_id' can't be null";
        }
        if ($this->container['coupon_code'] === null) {
            $invalidProperties[] = "'coupon_code' can't be null";
        }
        if ($this->container['lago_customer_id'] === null) {
            $invalidProperties[] = "'lago_customer_id' can't be null";
        }
        if ($this->container['external_customer_id'] === null) {
            $invalidProperties[] = "'external_customer_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount_cents'] === null) {
            $invalidProperties[] = "'amount_cents' can't be null";
        }
        if ($this->container['amount_currency'] === null) {
            $invalidProperties[] = "'amount_currency' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'frequency', must be one of '%s'",
                $this->container['frequency'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['credits'] === null) {
            $invalidProperties[] = "'credits' can't be null";
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
     * Gets lago_id
     *
     * @return string
     */
    public function getLagoId()
    {
        return $this->container['lago_id'];
    }

    /**
     * Sets lago_id
     *
     * @param string $lago_id lago_id
     *
     * @return self
     */
    public function setLagoId($lago_id)
    {
        if (is_null($lago_id)) {
            throw new \InvalidArgumentException('non-nullable lago_id cannot be null');
        }
        $this->container['lago_id'] = $lago_id;

        return $this;
    }

    /**
     * Gets lago_coupon_id
     *
     * @return string
     */
    public function getLagoCouponId()
    {
        return $this->container['lago_coupon_id'];
    }

    /**
     * Sets lago_coupon_id
     *
     * @param string $lago_coupon_id lago_coupon_id
     *
     * @return self
     */
    public function setLagoCouponId($lago_coupon_id)
    {
        if (is_null($lago_coupon_id)) {
            throw new \InvalidArgumentException('non-nullable lago_coupon_id cannot be null');
        }
        $this->container['lago_coupon_id'] = $lago_coupon_id;

        return $this;
    }

    /**
     * Gets coupon_code
     *
     * @return string
     */
    public function getCouponCode()
    {
        return $this->container['coupon_code'];
    }

    /**
     * Sets coupon_code
     *
     * @param string $coupon_code coupon_code
     *
     * @return self
     */
    public function setCouponCode($coupon_code)
    {
        if (is_null($coupon_code)) {
            throw new \InvalidArgumentException('non-nullable coupon_code cannot be null');
        }
        $this->container['coupon_code'] = $coupon_code;

        return $this;
    }

    /**
     * Gets lago_customer_id
     *
     * @return string
     */
    public function getLagoCustomerId()
    {
        return $this->container['lago_customer_id'];
    }

    /**
     * Sets lago_customer_id
     *
     * @param string $lago_customer_id lago_customer_id
     *
     * @return self
     */
    public function setLagoCustomerId($lago_customer_id)
    {
        if (is_null($lago_customer_id)) {
            throw new \InvalidArgumentException('non-nullable lago_customer_id cannot be null');
        }
        $this->container['lago_customer_id'] = $lago_customer_id;

        return $this;
    }

    /**
     * Gets external_customer_id
     *
     * @return string
     */
    public function getExternalCustomerId()
    {
        return $this->container['external_customer_id'];
    }

    /**
     * Sets external_customer_id
     *
     * @param string $external_customer_id external_customer_id
     *
     * @return self
     */
    public function setExternalCustomerId($external_customer_id)
    {
        if (is_null($external_customer_id)) {
            throw new \InvalidArgumentException('non-nullable external_customer_id cannot be null');
        }
        $this->container['external_customer_id'] = $external_customer_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets amount_cents
     *
     * @return int
     */
    public function getAmountCents()
    {
        return $this->container['amount_cents'];
    }

    /**
     * Sets amount_cents
     *
     * @param int $amount_cents amount_cents
     *
     * @return self
     */
    public function setAmountCents($amount_cents)
    {
        if (is_null($amount_cents)) {
            throw new \InvalidArgumentException('non-nullable amount_cents cannot be null');
        }
        $this->container['amount_cents'] = $amount_cents;

        return $this;
    }

    /**
     * Gets amount_cents_remaining
     *
     * @return int|null
     */
    public function getAmountCentsRemaining()
    {
        return $this->container['amount_cents_remaining'];
    }

    /**
     * Sets amount_cents_remaining
     *
     * @param int|null $amount_cents_remaining amount_cents_remaining
     *
     * @return self
     */
    public function setAmountCentsRemaining($amount_cents_remaining)
    {
        if (is_null($amount_cents_remaining)) {
            throw new \InvalidArgumentException('non-nullable amount_cents_remaining cannot be null');
        }
        $this->container['amount_cents_remaining'] = $amount_cents_remaining;

        return $this;
    }

    /**
     * Gets amount_currency
     *
     * @return string
     */
    public function getAmountCurrency()
    {
        return $this->container['amount_currency'];
    }

    /**
     * Sets amount_currency
     *
     * @param string $amount_currency amount_currency
     *
     * @return self
     */
    public function setAmountCurrency($amount_currency)
    {
        if (is_null($amount_currency)) {
            throw new \InvalidArgumentException('non-nullable amount_currency cannot be null');
        }
        $this->container['amount_currency'] = $amount_currency;

        return $this;
    }

    /**
     * Gets percentage_rate
     *
     * @return float|null
     */
    public function getPercentageRate()
    {
        return $this->container['percentage_rate'];
    }

    /**
     * Sets percentage_rate
     *
     * @param float|null $percentage_rate percentage_rate
     *
     * @return self
     */
    public function setPercentageRate($percentage_rate)
    {
        if (is_null($percentage_rate)) {
            throw new \InvalidArgumentException('non-nullable percentage_rate cannot be null');
        }
        $this->container['percentage_rate'] = $percentage_rate;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency Frequency type
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        if (is_null($frequency)) {
            throw new \InvalidArgumentException('non-nullable frequency cannot be null');
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'frequency', must be one of '%s'",
                    $frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets frequency_duration
     *
     * @return int|null
     */
    public function getFrequencyDuration()
    {
        return $this->container['frequency_duration'];
    }

    /**
     * Sets frequency_duration
     *
     * @param int|null $frequency_duration frequency_duration
     *
     * @return self
     */
    public function setFrequencyDuration($frequency_duration)
    {
        if (is_null($frequency_duration)) {
            throw new \InvalidArgumentException('non-nullable frequency_duration cannot be null');
        }
        $this->container['frequency_duration'] = $frequency_duration;

        return $this;
    }

    /**
     * Gets frequency_duration_remaining
     *
     * @return int|null
     */
    public function getFrequencyDurationRemaining()
    {
        return $this->container['frequency_duration_remaining'];
    }

    /**
     * Sets frequency_duration_remaining
     *
     * @param int|null $frequency_duration_remaining frequency_duration_remaining
     *
     * @return self
     */
    public function setFrequencyDurationRemaining($frequency_duration_remaining)
    {
        if (is_null($frequency_duration_remaining)) {
            throw new \InvalidArgumentException('non-nullable frequency_duration_remaining cannot be null');
        }
        $this->container['frequency_duration_remaining'] = $frequency_duration_remaining;

        return $this;
    }

    /**
     * Gets expiration_at
     *
     * @return \DateTime|null
     */
    public function getExpirationAt()
    {
        return $this->container['expiration_at'];
    }

    /**
     * Sets expiration_at
     *
     * @param \DateTime|null $expiration_at expiration_at
     *
     * @return self
     */
    public function setExpirationAt($expiration_at)
    {
        if (is_null($expiration_at)) {
            throw new \InvalidArgumentException('non-nullable expiration_at cannot be null');
        }
        $this->container['expiration_at'] = $expiration_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets terminated_at
     *
     * @return \DateTime|null
     */
    public function getTerminatedAt()
    {
        return $this->container['terminated_at'];
    }

    /**
     * Sets terminated_at
     *
     * @param \DateTime|null $terminated_at terminated_at
     *
     * @return self
     */
    public function setTerminatedAt($terminated_at)
    {
        if (is_null($terminated_at)) {
            throw new \InvalidArgumentException('non-nullable terminated_at cannot be null');
        }
        $this->container['terminated_at'] = $terminated_at;

        return $this;
    }

    /**
     * Gets credits
     *
     * @return \LagoClient\Model\CreditObject[]
     */
    public function getCredits()
    {
        return $this->container['credits'];
    }

    /**
     * Sets credits
     *
     * @param \LagoClient\Model\CreditObject[] $credits credits
     *
     * @return self
     */
    public function setCredits($credits)
    {
        if (is_null($credits)) {
            throw new \InvalidArgumentException('non-nullable credits cannot be null');
        }
        $this->container['credits'] = $credits;

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


