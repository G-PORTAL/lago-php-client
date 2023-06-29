<?php
/**
 * FeeObject
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
 * The version of the OpenAPI document: 0.37.0-beta
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
 * FeeObject Class Doc Comment
 *
 * @category Class
 * @package  LagoClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FeeObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeeObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lago_id' => 'string',
        'lago_group_id' => 'string',
        'lago_invoice_id' => 'string',
        'lago_true_up_fee_id' => 'string',
        'lago_true_up_parent_fee_id' => 'string',
        'external_subscription_id' => 'string',
        'amount_cents' => 'int',
        'amount_currency' => 'string',
        'vat_amount_cents' => 'int',
        'vat_amount_currency' => 'string',
        'units' => 'string',
        'total_amount_cents' => 'int',
        'total_amount_currency' => 'string',
        'events_count' => 'int',
        'pay_in_advance' => 'bool',
        'invoiceable' => 'bool',
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'payment_status' => 'string',
        'created_at' => '\DateTime',
        'succeeded_at' => '\DateTime',
        'failed_at' => '\DateTime',
        'refunded_at' => '\DateTime',
        'item' => '\LagoClient\Model\FeeObjectItem'
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
        'lago_group_id' => 'uuid',
        'lago_invoice_id' => 'uuid',
        'lago_true_up_fee_id' => 'uuid',
        'lago_true_up_parent_fee_id' => 'uuid',
        'external_subscription_id' => null,
        'amount_cents' => null,
        'amount_currency' => null,
        'vat_amount_cents' => null,
        'vat_amount_currency' => null,
        'units' => null,
        'total_amount_cents' => null,
        'total_amount_currency' => null,
        'events_count' => null,
        'pay_in_advance' => null,
        'invoiceable' => null,
        'from_date' => 'date-time',
        'to_date' => 'date-time',
        'payment_status' => null,
        'created_at' => 'date-time',
        'succeeded_at' => 'date-time',
        'failed_at' => 'date-time',
        'refunded_at' => 'date-time',
        'item' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lago_id' => false,
		'lago_group_id' => false,
		'lago_invoice_id' => false,
		'lago_true_up_fee_id' => false,
		'lago_true_up_parent_fee_id' => false,
		'external_subscription_id' => false,
		'amount_cents' => false,
		'amount_currency' => false,
		'vat_amount_cents' => false,
		'vat_amount_currency' => false,
		'units' => false,
		'total_amount_cents' => false,
		'total_amount_currency' => false,
		'events_count' => false,
		'pay_in_advance' => false,
		'invoiceable' => false,
		'from_date' => false,
		'to_date' => false,
		'payment_status' => false,
		'created_at' => false,
		'succeeded_at' => false,
		'failed_at' => false,
		'refunded_at' => false,
		'item' => false
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
        'lago_group_id' => 'lago_group_id',
        'lago_invoice_id' => 'lago_invoice_id',
        'lago_true_up_fee_id' => 'lago_true_up_fee_id',
        'lago_true_up_parent_fee_id' => 'lago_true_up_parent_fee_id',
        'external_subscription_id' => 'external_subscription_id',
        'amount_cents' => 'amount_cents',
        'amount_currency' => 'amount_currency',
        'vat_amount_cents' => 'vat_amount_cents',
        'vat_amount_currency' => 'vat_amount_currency',
        'units' => 'units',
        'total_amount_cents' => 'total_amount_cents',
        'total_amount_currency' => 'total_amount_currency',
        'events_count' => 'events_count',
        'pay_in_advance' => 'pay_in_advance',
        'invoiceable' => 'invoiceable',
        'from_date' => 'from_date',
        'to_date' => 'to_date',
        'payment_status' => 'payment_status',
        'created_at' => 'created_at',
        'succeeded_at' => 'succeeded_at',
        'failed_at' => 'failed_at',
        'refunded_at' => 'refunded_at',
        'item' => 'item'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lago_id' => 'setLagoId',
        'lago_group_id' => 'setLagoGroupId',
        'lago_invoice_id' => 'setLagoInvoiceId',
        'lago_true_up_fee_id' => 'setLagoTrueUpFeeId',
        'lago_true_up_parent_fee_id' => 'setLagoTrueUpParentFeeId',
        'external_subscription_id' => 'setExternalSubscriptionId',
        'amount_cents' => 'setAmountCents',
        'amount_currency' => 'setAmountCurrency',
        'vat_amount_cents' => 'setVatAmountCents',
        'vat_amount_currency' => 'setVatAmountCurrency',
        'units' => 'setUnits',
        'total_amount_cents' => 'setTotalAmountCents',
        'total_amount_currency' => 'setTotalAmountCurrency',
        'events_count' => 'setEventsCount',
        'pay_in_advance' => 'setPayInAdvance',
        'invoiceable' => 'setInvoiceable',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'payment_status' => 'setPaymentStatus',
        'created_at' => 'setCreatedAt',
        'succeeded_at' => 'setSucceededAt',
        'failed_at' => 'setFailedAt',
        'refunded_at' => 'setRefundedAt',
        'item' => 'setItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lago_id' => 'getLagoId',
        'lago_group_id' => 'getLagoGroupId',
        'lago_invoice_id' => 'getLagoInvoiceId',
        'lago_true_up_fee_id' => 'getLagoTrueUpFeeId',
        'lago_true_up_parent_fee_id' => 'getLagoTrueUpParentFeeId',
        'external_subscription_id' => 'getExternalSubscriptionId',
        'amount_cents' => 'getAmountCents',
        'amount_currency' => 'getAmountCurrency',
        'vat_amount_cents' => 'getVatAmountCents',
        'vat_amount_currency' => 'getVatAmountCurrency',
        'units' => 'getUnits',
        'total_amount_cents' => 'getTotalAmountCents',
        'total_amount_currency' => 'getTotalAmountCurrency',
        'events_count' => 'getEventsCount',
        'pay_in_advance' => 'getPayInAdvance',
        'invoiceable' => 'getInvoiceable',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'payment_status' => 'getPaymentStatus',
        'created_at' => 'getCreatedAt',
        'succeeded_at' => 'getSucceededAt',
        'failed_at' => 'getFailedAt',
        'refunded_at' => 'getRefundedAt',
        'item' => 'getItem'
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

    public const PAYMENT_STATUS_PENDING = 'pending';
    public const PAYMENT_STATUS_SUCCEEDED = 'succeeded';
    public const PAYMENT_STATUS_FAILED = 'failed';
    public const PAYMENT_STATUS_REFUNDED = 'refunded';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_PENDING,
            self::PAYMENT_STATUS_SUCCEEDED,
            self::PAYMENT_STATUS_FAILED,
            self::PAYMENT_STATUS_REFUNDED,
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
        $this->setIfExists('lago_group_id', $data ?? [], null);
        $this->setIfExists('lago_invoice_id', $data ?? [], null);
        $this->setIfExists('lago_true_up_fee_id', $data ?? [], null);
        $this->setIfExists('lago_true_up_parent_fee_id', $data ?? [], null);
        $this->setIfExists('external_subscription_id', $data ?? [], null);
        $this->setIfExists('amount_cents', $data ?? [], null);
        $this->setIfExists('amount_currency', $data ?? [], null);
        $this->setIfExists('vat_amount_cents', $data ?? [], null);
        $this->setIfExists('vat_amount_currency', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('total_amount_cents', $data ?? [], null);
        $this->setIfExists('total_amount_currency', $data ?? [], null);
        $this->setIfExists('events_count', $data ?? [], null);
        $this->setIfExists('pay_in_advance', $data ?? [], null);
        $this->setIfExists('invoiceable', $data ?? [], null);
        $this->setIfExists('from_date', $data ?? [], null);
        $this->setIfExists('to_date', $data ?? [], null);
        $this->setIfExists('payment_status', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('succeeded_at', $data ?? [], null);
        $this->setIfExists('failed_at', $data ?? [], null);
        $this->setIfExists('refunded_at', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
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
        if ($this->container['amount_cents'] === null) {
            $invalidProperties[] = "'amount_cents' can't be null";
        }
        if ($this->container['amount_currency'] === null) {
            $invalidProperties[] = "'amount_currency' can't be null";
        }
        if ($this->container['vat_amount_cents'] === null) {
            $invalidProperties[] = "'vat_amount_cents' can't be null";
        }
        if ($this->container['vat_amount_currency'] === null) {
            $invalidProperties[] = "'vat_amount_currency' can't be null";
        }
        if ($this->container['units'] === null) {
            $invalidProperties[] = "'units' can't be null";
        }
        if ($this->container['payment_status'] === null) {
            $invalidProperties[] = "'payment_status' can't be null";
        }
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_status', must be one of '%s'",
                $this->container['payment_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['item'] === null) {
            $invalidProperties[] = "'item' can't be null";
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
     * Gets lago_group_id
     *
     * @return string|null
     */
    public function getLagoGroupId()
    {
        return $this->container['lago_group_id'];
    }

    /**
     * Sets lago_group_id
     *
     * @param string|null $lago_group_id lago_group_id
     *
     * @return self
     */
    public function setLagoGroupId($lago_group_id)
    {
        if (is_null($lago_group_id)) {
            throw new \InvalidArgumentException('non-nullable lago_group_id cannot be null');
        }
        $this->container['lago_group_id'] = $lago_group_id;

        return $this;
    }

    /**
     * Gets lago_invoice_id
     *
     * @return string|null
     */
    public function getLagoInvoiceId()
    {
        return $this->container['lago_invoice_id'];
    }

    /**
     * Sets lago_invoice_id
     *
     * @param string|null $lago_invoice_id lago_invoice_id
     *
     * @return self
     */
    public function setLagoInvoiceId($lago_invoice_id)
    {
        if (is_null($lago_invoice_id)) {
            throw new \InvalidArgumentException('non-nullable lago_invoice_id cannot be null');
        }
        $this->container['lago_invoice_id'] = $lago_invoice_id;

        return $this;
    }

    /**
     * Gets lago_true_up_fee_id
     *
     * @return string|null
     */
    public function getLagoTrueUpFeeId()
    {
        return $this->container['lago_true_up_fee_id'];
    }

    /**
     * Sets lago_true_up_fee_id
     *
     * @param string|null $lago_true_up_fee_id lago_true_up_fee_id
     *
     * @return self
     */
    public function setLagoTrueUpFeeId($lago_true_up_fee_id)
    {
        if (is_null($lago_true_up_fee_id)) {
            throw new \InvalidArgumentException('non-nullable lago_true_up_fee_id cannot be null');
        }
        $this->container['lago_true_up_fee_id'] = $lago_true_up_fee_id;

        return $this;
    }

    /**
     * Gets lago_true_up_parent_fee_id
     *
     * @return string|null
     */
    public function getLagoTrueUpParentFeeId()
    {
        return $this->container['lago_true_up_parent_fee_id'];
    }

    /**
     * Sets lago_true_up_parent_fee_id
     *
     * @param string|null $lago_true_up_parent_fee_id lago_true_up_parent_fee_id
     *
     * @return self
     */
    public function setLagoTrueUpParentFeeId($lago_true_up_parent_fee_id)
    {
        if (is_null($lago_true_up_parent_fee_id)) {
            throw new \InvalidArgumentException('non-nullable lago_true_up_parent_fee_id cannot be null');
        }
        $this->container['lago_true_up_parent_fee_id'] = $lago_true_up_parent_fee_id;

        return $this;
    }

    /**
     * Gets external_subscription_id
     *
     * @return string|null
     */
    public function getExternalSubscriptionId()
    {
        return $this->container['external_subscription_id'];
    }

    /**
     * Sets external_subscription_id
     *
     * @param string|null $external_subscription_id external_subscription_id
     *
     * @return self
     */
    public function setExternalSubscriptionId($external_subscription_id)
    {
        if (is_null($external_subscription_id)) {
            throw new \InvalidArgumentException('non-nullable external_subscription_id cannot be null');
        }
        $this->container['external_subscription_id'] = $external_subscription_id;

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
     * Gets vat_amount_cents
     *
     * @return int
     */
    public function getVatAmountCents()
    {
        return $this->container['vat_amount_cents'];
    }

    /**
     * Sets vat_amount_cents
     *
     * @param int $vat_amount_cents vat_amount_cents
     *
     * @return self
     */
    public function setVatAmountCents($vat_amount_cents)
    {
        if (is_null($vat_amount_cents)) {
            throw new \InvalidArgumentException('non-nullable vat_amount_cents cannot be null');
        }
        $this->container['vat_amount_cents'] = $vat_amount_cents;

        return $this;
    }

    /**
     * Gets vat_amount_currency
     *
     * @return string
     */
    public function getVatAmountCurrency()
    {
        return $this->container['vat_amount_currency'];
    }

    /**
     * Sets vat_amount_currency
     *
     * @param string $vat_amount_currency vat_amount_currency
     *
     * @return self
     */
    public function setVatAmountCurrency($vat_amount_currency)
    {
        if (is_null($vat_amount_currency)) {
            throw new \InvalidArgumentException('non-nullable vat_amount_currency cannot be null');
        }
        $this->container['vat_amount_currency'] = $vat_amount_currency;

        return $this;
    }

    /**
     * Gets units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param string $units units
     *
     * @return self
     */
    public function setUnits($units)
    {
        if (is_null($units)) {
            throw new \InvalidArgumentException('non-nullable units cannot be null');
        }
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets total_amount_cents
     *
     * @return int|null
     */
    public function getTotalAmountCents()
    {
        return $this->container['total_amount_cents'];
    }

    /**
     * Sets total_amount_cents
     *
     * @param int|null $total_amount_cents total_amount_cents
     *
     * @return self
     */
    public function setTotalAmountCents($total_amount_cents)
    {
        if (is_null($total_amount_cents)) {
            throw new \InvalidArgumentException('non-nullable total_amount_cents cannot be null');
        }
        $this->container['total_amount_cents'] = $total_amount_cents;

        return $this;
    }

    /**
     * Gets total_amount_currency
     *
     * @return string|null
     */
    public function getTotalAmountCurrency()
    {
        return $this->container['total_amount_currency'];
    }

    /**
     * Sets total_amount_currency
     *
     * @param string|null $total_amount_currency total_amount_currency
     *
     * @return self
     */
    public function setTotalAmountCurrency($total_amount_currency)
    {
        if (is_null($total_amount_currency)) {
            throw new \InvalidArgumentException('non-nullable total_amount_currency cannot be null');
        }
        $this->container['total_amount_currency'] = $total_amount_currency;

        return $this;
    }

    /**
     * Gets events_count
     *
     * @return int|null
     */
    public function getEventsCount()
    {
        return $this->container['events_count'];
    }

    /**
     * Sets events_count
     *
     * @param int|null $events_count events_count
     *
     * @return self
     */
    public function setEventsCount($events_count)
    {
        if (is_null($events_count)) {
            throw new \InvalidArgumentException('non-nullable events_count cannot be null');
        }
        $this->container['events_count'] = $events_count;

        return $this;
    }

    /**
     * Gets pay_in_advance
     *
     * @return bool|null
     */
    public function getPayInAdvance()
    {
        return $this->container['pay_in_advance'];
    }

    /**
     * Sets pay_in_advance
     *
     * @param bool|null $pay_in_advance pay_in_advance
     *
     * @return self
     */
    public function setPayInAdvance($pay_in_advance)
    {
        if (is_null($pay_in_advance)) {
            throw new \InvalidArgumentException('non-nullable pay_in_advance cannot be null');
        }
        $this->container['pay_in_advance'] = $pay_in_advance;

        return $this;
    }

    /**
     * Gets invoiceable
     *
     * @return bool|null
     */
    public function getInvoiceable()
    {
        return $this->container['invoiceable'];
    }

    /**
     * Sets invoiceable
     *
     * @param bool|null $invoiceable invoiceable
     *
     * @return self
     */
    public function setInvoiceable($invoiceable)
    {
        if (is_null($invoiceable)) {
            throw new \InvalidArgumentException('non-nullable invoiceable cannot be null');
        }
        $this->container['invoiceable'] = $invoiceable;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime|null
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime|null $from_date from_date
     *
     * @return self
     */
    public function setFromDate($from_date)
    {
        if (is_null($from_date)) {
            throw new \InvalidArgumentException('non-nullable from_date cannot be null');
        }
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime|null
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime|null $to_date to_date
     *
     * @return self
     */
    public function setToDate($to_date)
    {
        if (is_null($to_date)) {
            throw new \InvalidArgumentException('non-nullable to_date cannot be null');
        }
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string $payment_status payment_status
     *
     * @return self
     */
    public function setPaymentStatus($payment_status)
    {
        if (is_null($payment_status)) {
            throw new \InvalidArgumentException('non-nullable payment_status cannot be null');
        }
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_status', must be one of '%s'",
                    $payment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

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
     * Gets succeeded_at
     *
     * @return \DateTime|null
     */
    public function getSucceededAt()
    {
        return $this->container['succeeded_at'];
    }

    /**
     * Sets succeeded_at
     *
     * @param \DateTime|null $succeeded_at succeeded_at
     *
     * @return self
     */
    public function setSucceededAt($succeeded_at)
    {
        if (is_null($succeeded_at)) {
            throw new \InvalidArgumentException('non-nullable succeeded_at cannot be null');
        }
        $this->container['succeeded_at'] = $succeeded_at;

        return $this;
    }

    /**
     * Gets failed_at
     *
     * @return \DateTime|null
     */
    public function getFailedAt()
    {
        return $this->container['failed_at'];
    }

    /**
     * Sets failed_at
     *
     * @param \DateTime|null $failed_at failed_at
     *
     * @return self
     */
    public function setFailedAt($failed_at)
    {
        if (is_null($failed_at)) {
            throw new \InvalidArgumentException('non-nullable failed_at cannot be null');
        }
        $this->container['failed_at'] = $failed_at;

        return $this;
    }

    /**
     * Gets refunded_at
     *
     * @return \DateTime|null
     */
    public function getRefundedAt()
    {
        return $this->container['refunded_at'];
    }

    /**
     * Sets refunded_at
     *
     * @param \DateTime|null $refunded_at refunded_at
     *
     * @return self
     */
    public function setRefundedAt($refunded_at)
    {
        if (is_null($refunded_at)) {
            throw new \InvalidArgumentException('non-nullable refunded_at cannot be null');
        }
        $this->container['refunded_at'] = $refunded_at;

        return $this;
    }

    /**
     * Gets item
     *
     * @return \LagoClient\Model\FeeObjectItem
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \LagoClient\Model\FeeObjectItem $item item
     *
     * @return self
     */
    public function setItem($item)
    {
        if (is_null($item)) {
            throw new \InvalidArgumentException('non-nullable item cannot be null');
        }
        $this->container['item'] = $item;

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


