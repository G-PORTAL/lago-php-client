<?php
/**
 * CustomerObject
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
 * CustomerObject Class Doc Comment
 *
 * @category Class
 * @package  LagoClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'lago_id' => 'string',
        'external_id' => 'string',
        'name' => 'string',
        'sequential_id' => 'int',
        'slug' => 'string',
        'created_at' => '\DateTime',
        'country' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'state' => 'string',
        'zipcode' => 'string',
        'email' => 'string',
        'city' => 'string',
        'url' => 'string',
        'phone' => 'string',
        'lago_url' => 'string',
        'legal_name' => 'string',
        'legal_number' => 'string',
        'tax_identification_number' => 'string',
        'currency' => 'string',
        'timezone' => 'string',
        'applicable_timezone' => 'string',
        'billing_configuration' => '\LagoClient\Model\BillingConfigurationCustomer',
        'metadata' => '\LagoClient\Model\CustomerMetadataObject[]'
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
        'external_id' => null,
        'name' => null,
        'sequential_id' => null,
        'slug' => null,
        'created_at' => 'date-time',
        'country' => null,
        'address_line1' => null,
        'address_line2' => null,
        'state' => null,
        'zipcode' => null,
        'email' => 'email',
        'city' => null,
        'url' => null,
        'phone' => null,
        'lago_url' => null,
        'legal_name' => null,
        'legal_number' => null,
        'tax_identification_number' => null,
        'currency' => null,
        'timezone' => null,
        'applicable_timezone' => null,
        'billing_configuration' => null,
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'lago_id' => false,
		'external_id' => false,
		'name' => false,
		'sequential_id' => false,
		'slug' => false,
		'created_at' => false,
		'country' => false,
		'address_line1' => false,
		'address_line2' => false,
		'state' => false,
		'zipcode' => false,
		'email' => false,
		'city' => false,
		'url' => false,
		'phone' => false,
		'lago_url' => false,
		'legal_name' => false,
		'legal_number' => false,
		'tax_identification_number' => false,
		'currency' => false,
		'timezone' => false,
		'applicable_timezone' => false,
		'billing_configuration' => false,
		'metadata' => false
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
        'external_id' => 'external_id',
        'name' => 'name',
        'sequential_id' => 'sequential_id',
        'slug' => 'slug',
        'created_at' => 'created_at',
        'country' => 'country',
        'address_line1' => 'address_line1',
        'address_line2' => 'address_line2',
        'state' => 'state',
        'zipcode' => 'zipcode',
        'email' => 'email',
        'city' => 'city',
        'url' => 'url',
        'phone' => 'phone',
        'lago_url' => 'lago_url',
        'legal_name' => 'legal_name',
        'legal_number' => 'legal_number',
        'tax_identification_number' => 'tax_identification_number',
        'currency' => 'currency',
        'timezone' => 'timezone',
        'applicable_timezone' => 'applicable_timezone',
        'billing_configuration' => 'billing_configuration',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lago_id' => 'setLagoId',
        'external_id' => 'setExternalId',
        'name' => 'setName',
        'sequential_id' => 'setSequentialId',
        'slug' => 'setSlug',
        'created_at' => 'setCreatedAt',
        'country' => 'setCountry',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'state' => 'setState',
        'zipcode' => 'setZipcode',
        'email' => 'setEmail',
        'city' => 'setCity',
        'url' => 'setUrl',
        'phone' => 'setPhone',
        'lago_url' => 'setLagoUrl',
        'legal_name' => 'setLegalName',
        'legal_number' => 'setLegalNumber',
        'tax_identification_number' => 'setTaxIdentificationNumber',
        'currency' => 'setCurrency',
        'timezone' => 'setTimezone',
        'applicable_timezone' => 'setApplicableTimezone',
        'billing_configuration' => 'setBillingConfiguration',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lago_id' => 'getLagoId',
        'external_id' => 'getExternalId',
        'name' => 'getName',
        'sequential_id' => 'getSequentialId',
        'slug' => 'getSlug',
        'created_at' => 'getCreatedAt',
        'country' => 'getCountry',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'state' => 'getState',
        'zipcode' => 'getZipcode',
        'email' => 'getEmail',
        'city' => 'getCity',
        'url' => 'getUrl',
        'phone' => 'getPhone',
        'lago_url' => 'getLagoUrl',
        'legal_name' => 'getLegalName',
        'legal_number' => 'getLegalNumber',
        'tax_identification_number' => 'getTaxIdentificationNumber',
        'currency' => 'getCurrency',
        'timezone' => 'getTimezone',
        'applicable_timezone' => 'getApplicableTimezone',
        'billing_configuration' => 'getBillingConfiguration',
        'metadata' => 'getMetadata'
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
        $this->setIfExists('lago_id', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('sequential_id', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('address_line1', $data ?? [], null);
        $this->setIfExists('address_line2', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('zipcode', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('lago_url', $data ?? [], null);
        $this->setIfExists('legal_name', $data ?? [], null);
        $this->setIfExists('legal_number', $data ?? [], null);
        $this->setIfExists('tax_identification_number', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('applicable_timezone', $data ?? [], null);
        $this->setIfExists('billing_configuration', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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
        if ($this->container['external_id'] === null) {
            $invalidProperties[] = "'external_id' can't be null";
        }
        if ($this->container['sequential_id'] === null) {
            $invalidProperties[] = "'sequential_id' can't be null";
        }
        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

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
     * Gets sequential_id
     *
     * @return int
     */
    public function getSequentialId()
    {
        return $this->container['sequential_id'];
    }

    /**
     * Sets sequential_id
     *
     * @param int $sequential_id sequential_id
     *
     * @return self
     */
    public function setSequentialId($sequential_id)
    {
        if (is_null($sequential_id)) {
            throw new \InvalidArgumentException('non-nullable sequential_id cannot be null');
        }
        $this->container['sequential_id'] = $sequential_id;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        if (is_null($slug)) {
            throw new \InvalidArgumentException('non-nullable slug cannot be null');
        }
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
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
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 address_line1
     *
     * @return self
     */
    public function setAddressLine1($address_line1)
    {
        if (is_null($address_line1)) {
            throw new \InvalidArgumentException('non-nullable address_line1 cannot be null');
        }
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 address_line2
     *
     * @return self
     */
    public function setAddressLine2($address_line2)
    {
        if (is_null($address_line2)) {
            throw new \InvalidArgumentException('non-nullable address_line2 cannot be null');
        }
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string|null
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string|null $zipcode zipcode
     *
     * @return self
     */
    public function setZipcode($zipcode)
    {
        if (is_null($zipcode)) {
            throw new \InvalidArgumentException('non-nullable zipcode cannot be null');
        }
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets lago_url
     *
     * @return string|null
     */
    public function getLagoUrl()
    {
        return $this->container['lago_url'];
    }

    /**
     * Sets lago_url
     *
     * @param string|null $lago_url lago_url
     *
     * @return self
     */
    public function setLagoUrl($lago_url)
    {
        if (is_null($lago_url)) {
            throw new \InvalidArgumentException('non-nullable lago_url cannot be null');
        }
        $this->container['lago_url'] = $lago_url;

        return $this;
    }

    /**
     * Gets legal_name
     *
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }

    /**
     * Sets legal_name
     *
     * @param string|null $legal_name legal_name
     *
     * @return self
     */
    public function setLegalName($legal_name)
    {
        if (is_null($legal_name)) {
            throw new \InvalidArgumentException('non-nullable legal_name cannot be null');
        }
        $this->container['legal_name'] = $legal_name;

        return $this;
    }

    /**
     * Gets legal_number
     *
     * @return string|null
     */
    public function getLegalNumber()
    {
        return $this->container['legal_number'];
    }

    /**
     * Sets legal_number
     *
     * @param string|null $legal_number legal_number
     *
     * @return self
     */
    public function setLegalNumber($legal_number)
    {
        if (is_null($legal_number)) {
            throw new \InvalidArgumentException('non-nullable legal_number cannot be null');
        }
        $this->container['legal_number'] = $legal_number;

        return $this;
    }

    /**
     * Gets tax_identification_number
     *
     * @return string|null
     */
    public function getTaxIdentificationNumber()
    {
        return $this->container['tax_identification_number'];
    }

    /**
     * Sets tax_identification_number
     *
     * @param string|null $tax_identification_number tax_identification_number
     *
     * @return self
     */
    public function setTaxIdentificationNumber($tax_identification_number)
    {
        if (is_null($tax_identification_number)) {
            throw new \InvalidArgumentException('non-nullable tax_identification_number cannot be null');
        }
        $this->container['tax_identification_number'] = $tax_identification_number;

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
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone timezone
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets applicable_timezone
     *
     * @return string|null
     */
    public function getApplicableTimezone()
    {
        return $this->container['applicable_timezone'];
    }

    /**
     * Sets applicable_timezone
     *
     * @param string|null $applicable_timezone applicable_timezone
     *
     * @return self
     */
    public function setApplicableTimezone($applicable_timezone)
    {
        if (is_null($applicable_timezone)) {
            throw new \InvalidArgumentException('non-nullable applicable_timezone cannot be null');
        }
        $this->container['applicable_timezone'] = $applicable_timezone;

        return $this;
    }

    /**
     * Gets billing_configuration
     *
     * @return \LagoClient\Model\BillingConfigurationCustomer|null
     */
    public function getBillingConfiguration()
    {
        return $this->container['billing_configuration'];
    }

    /**
     * Sets billing_configuration
     *
     * @param \LagoClient\Model\BillingConfigurationCustomer|null $billing_configuration billing_configuration
     *
     * @return self
     */
    public function setBillingConfiguration($billing_configuration)
    {
        if (is_null($billing_configuration)) {
            throw new \InvalidArgumentException('non-nullable billing_configuration cannot be null');
        }
        $this->container['billing_configuration'] = $billing_configuration;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \LagoClient\Model\CustomerMetadataObject[]|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \LagoClient\Model\CustomerMetadataObject[]|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

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


