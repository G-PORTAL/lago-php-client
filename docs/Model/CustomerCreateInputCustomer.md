# # CustomerCreateInputCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | The customer external unique identifier (provided by your own application) |
**address_line1** | **string** | The first line of the billing address | [optional]
**address_line2** | **string** | The second line of the billing address | [optional]
**city** | **string** | The city of the customer&#39;s billing address | [optional]
**country** | **string** | Country code of the customer&#39;s billing address. Format must be ISO 3166 (alpha-2) | [optional]
**currency** | [**Currency**](Currency.md) |  | [optional]
**email** | **string** | The email of the customer | [optional]
**legal_name** | **string** | The legal company name of the customer | [optional]
**legal_number** | **string** | The legal company number of the customer | [optional]
**logo_url** | **string** | The logo URL of the customer | [optional]
**name** | **string** | The full name of the customer | [optional]
**phone** | **string** | The phone number of the customer | [optional]
**state** | **string** | The state of the customer&#39;s billing address | [optional]
**tax_identification_number** | **string** | The tax identification number of the customer | [optional]
**timezone** | [**Timezone**](Timezone.md) |  | [optional]
**url** | **string** | The custom website URL of the customer | [optional]
**zipcode** | **string** | The zipcode of the customer&#39;s billing address | [optional]
**billing_configuration** | [**\LagoClient\Model\CustomerBillingConfiguration**](CustomerBillingConfiguration.md) |  | [optional]
**metadata** | [**\LagoClient\Model\CustomerCreateInputCustomerMetadataInner[]**](CustomerCreateInputCustomerMetadataInner.md) | Set of key-value pairs that you can attach to a customer. This can be useful for storing additional information about the customer in a structured format | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
