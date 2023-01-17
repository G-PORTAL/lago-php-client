<?php
/**
 * WalletObject
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lago API documentation
 *
 * Lago API allows your application to push customer information and metrics (events) from your application to the billing application.
 *
 * The version of the OpenAPI document: 0.20.0-beta
 * Contact: tech@getlago.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * WalletObject Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WalletObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WalletObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lago_id' => 'string',
        'lago_customer_id' => 'string',
        'external_customer_id' => 'string',
        'status' => 'string',
        'currency' => 'string',
        'name' => 'string',
        'rate_amount' => 'float',
        'credits_balance' => 'float',
        'balance' => 'float',
        'consumed_credits' => 'float',
        'created_at' => 'string',
        'expiration_at' => 'string',
        'last_balance_sync_at' => 'string',
        'last_consumed_credit_at' => 'string',
        'terminated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'lago_id' => null,
        'lago_customer_id' => null,
        'external_customer_id' => null,
        'status' => null,
        'currency' => null,
        'name' => null,
        'rate_amount' => null,
        'credits_balance' => null,
        'balance' => null,
        'consumed_credits' => null,
        'created_at' => null,
        'expiration_at' => null,
        'last_balance_sync_at' => null,
        'last_consumed_credit_at' => null,
        'terminated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lago_id' => false,
		'lago_customer_id' => false,
		'external_customer_id' => false,
		'status' => false,
		'currency' => false,
		'name' => false,
		'rate_amount' => false,
		'credits_balance' => false,
		'balance' => false,
		'consumed_credits' => false,
		'created_at' => false,
		'expiration_at' => false,
		'last_balance_sync_at' => false,
		'last_consumed_credit_at' => false,
		'terminated_at' => false
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
        'lago_customer_id' => 'lago_customer_id',
        'external_customer_id' => 'external_customer_id',
        'status' => 'status',
        'currency' => 'currency',
        'name' => 'name',
        'rate_amount' => 'rate_amount',
        'credits_balance' => 'credits_balance',
        'balance' => 'balance',
        'consumed_credits' => 'consumed_credits',
        'created_at' => 'created_at',
        'expiration_at' => 'expiration_at',
        'last_balance_sync_at' => 'last_balance_sync_at',
        'last_consumed_credit_at' => 'last_consumed_credit_at',
        'terminated_at' => 'terminated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lago_id' => 'setLagoId',
        'lago_customer_id' => 'setLagoCustomerId',
        'external_customer_id' => 'setExternalCustomerId',
        'status' => 'setStatus',
        'currency' => 'setCurrency',
        'name' => 'setName',
        'rate_amount' => 'setRateAmount',
        'credits_balance' => 'setCreditsBalance',
        'balance' => 'setBalance',
        'consumed_credits' => 'setConsumedCredits',
        'created_at' => 'setCreatedAt',
        'expiration_at' => 'setExpirationAt',
        'last_balance_sync_at' => 'setLastBalanceSyncAt',
        'last_consumed_credit_at' => 'setLastConsumedCreditAt',
        'terminated_at' => 'setTerminatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lago_id' => 'getLagoId',
        'lago_customer_id' => 'getLagoCustomerId',
        'external_customer_id' => 'getExternalCustomerId',
        'status' => 'getStatus',
        'currency' => 'getCurrency',
        'name' => 'getName',
        'rate_amount' => 'getRateAmount',
        'credits_balance' => 'getCreditsBalance',
        'balance' => 'getBalance',
        'consumed_credits' => 'getConsumedCredits',
        'created_at' => 'getCreatedAt',
        'expiration_at' => 'getExpirationAt',
        'last_balance_sync_at' => 'getLastBalanceSyncAt',
        'last_consumed_credit_at' => 'getLastConsumedCreditAt',
        'terminated_at' => 'getTerminatedAt'
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
        $this->setIfExists('lago_customer_id', $data ?? [], null);
        $this->setIfExists('external_customer_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('rate_amount', $data ?? [], null);
        $this->setIfExists('credits_balance', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('consumed_credits', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('expiration_at', $data ?? [], null);
        $this->setIfExists('last_balance_sync_at', $data ?? [], null);
        $this->setIfExists('last_consumed_credit_at', $data ?? [], null);
        $this->setIfExists('terminated_at', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * @return string|null
     */
    public function getLagoId()
    {
        return $this->container['lago_id'];
    }

    /**
     * Sets lago_id
     *
     * @param string|null $lago_id lago_id
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
     * Gets lago_customer_id
     *
     * @return string|null
     */
    public function getLagoCustomerId()
    {
        return $this->container['lago_customer_id'];
    }

    /**
     * Sets lago_customer_id
     *
     * @param string|null $lago_customer_id lago_customer_id
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
     * @return string|null
     */
    public function getExternalCustomerId()
    {
        return $this->container['external_customer_id'];
    }

    /**
     * Sets external_customer_id
     *
     * @param string|null $external_customer_id external_customer_id
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
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status
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
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rate_amount
     *
     * @return float|null
     */
    public function getRateAmount()
    {
        return $this->container['rate_amount'];
    }

    /**
     * Sets rate_amount
     *
     * @param float|null $rate_amount rate_amount
     *
     * @return self
     */
    public function setRateAmount($rate_amount)
    {
        if (is_null($rate_amount)) {
            throw new \InvalidArgumentException('non-nullable rate_amount cannot be null');
        }
        $this->container['rate_amount'] = $rate_amount;

        return $this;
    }

    /**
     * Gets credits_balance
     *
     * @return float|null
     */
    public function getCreditsBalance()
    {
        return $this->container['credits_balance'];
    }

    /**
     * Sets credits_balance
     *
     * @param float|null $credits_balance credits_balance
     *
     * @return self
     */
    public function setCreditsBalance($credits_balance)
    {
        if (is_null($credits_balance)) {
            throw new \InvalidArgumentException('non-nullable credits_balance cannot be null');
        }
        $this->container['credits_balance'] = $credits_balance;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets consumed_credits
     *
     * @return float|null
     */
    public function getConsumedCredits()
    {
        return $this->container['consumed_credits'];
    }

    /**
     * Sets consumed_credits
     *
     * @param float|null $consumed_credits consumed_credits
     *
     * @return self
     */
    public function setConsumedCredits($consumed_credits)
    {
        if (is_null($consumed_credits)) {
            throw new \InvalidArgumentException('non-nullable consumed_credits cannot be null');
        }
        $this->container['consumed_credits'] = $consumed_credits;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
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
     * Gets expiration_at
     *
     * @return string|null
     */
    public function getExpirationAt()
    {
        return $this->container['expiration_at'];
    }

    /**
     * Sets expiration_at
     *
     * @param string|null $expiration_at expiration_at
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
     * Gets last_balance_sync_at
     *
     * @return string|null
     */
    public function getLastBalanceSyncAt()
    {
        return $this->container['last_balance_sync_at'];
    }

    /**
     * Sets last_balance_sync_at
     *
     * @param string|null $last_balance_sync_at last_balance_sync_at
     *
     * @return self
     */
    public function setLastBalanceSyncAt($last_balance_sync_at)
    {
        if (is_null($last_balance_sync_at)) {
            throw new \InvalidArgumentException('non-nullable last_balance_sync_at cannot be null');
        }
        $this->container['last_balance_sync_at'] = $last_balance_sync_at;

        return $this;
    }

    /**
     * Gets last_consumed_credit_at
     *
     * @return string|null
     */
    public function getLastConsumedCreditAt()
    {
        return $this->container['last_consumed_credit_at'];
    }

    /**
     * Sets last_consumed_credit_at
     *
     * @param string|null $last_consumed_credit_at last_consumed_credit_at
     *
     * @return self
     */
    public function setLastConsumedCreditAt($last_consumed_credit_at)
    {
        if (is_null($last_consumed_credit_at)) {
            throw new \InvalidArgumentException('non-nullable last_consumed_credit_at cannot be null');
        }
        $this->container['last_consumed_credit_at'] = $last_consumed_credit_at;

        return $this;
    }

    /**
     * Gets terminated_at
     *
     * @return string|null
     */
    public function getTerminatedAt()
    {
        return $this->container['terminated_at'];
    }

    /**
     * Sets terminated_at
     *
     * @param string|null $terminated_at terminated_at
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


