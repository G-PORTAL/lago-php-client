# LagoClient\InvoicesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvoice()**](InvoicesApi.md#createInvoice) | **POST** /invoices | Create a new invoice |
| [**downloadInvoice()**](InvoicesApi.md#downloadInvoice) | **POST** /invoices/{id}/download | Download an existing invoice |
| [**finalizeInvoice()**](InvoicesApi.md#finalizeInvoice) | **PUT** /invoices/{id}/finalize | Finalize a draft invoice |
| [**findAllInvoices()**](InvoicesApi.md#findAllInvoices) | **GET** /invoices | Find all invoices |
| [**findInvoice()**](InvoicesApi.md#findInvoice) | **GET** /invoices/{id} | Find invoice by ID |
| [**refreshInvoice()**](InvoicesApi.md#refreshInvoice) | **PUT** /invoices/{id}/refresh | Refresh a draft invoice |
| [**retryPayment()**](InvoicesApi.md#retryPayment) | **POST** /invoices/{id}/retry_payment | Retry invoice payment |
| [**updateInvoice()**](InvoicesApi.md#updateInvoice) | **PUT** /invoices/{id} | Update an existing invoice status |


## `createInvoice()`

```php
createInvoice($invoice_one_off_input): \LagoClient\Model\Invoice
```

Create a new invoice

Create a new one off Invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_one_off_input = new \LagoClient\Model\InvoiceOneOffInput(); // \LagoClient\Model\InvoiceOneOffInput | Invoice payload

try {
    $result = $apiInstance->createInvoice($invoice_one_off_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_one_off_input** | [**\LagoClient\Model\InvoiceOneOffInput**](../Model/InvoiceOneOffInput.md)| Invoice payload | |

### Return type

[**\LagoClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadInvoice()`

```php
downloadInvoice($id): \LagoClient\Model\Invoice
```

Download an existing invoice

Download an existing invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Invoice

try {
    $result = $apiInstance->downloadInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->downloadInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Invoice | |

### Return type

[**\LagoClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finalizeInvoice()`

```php
finalizeInvoice($id): \LagoClient\Model\Invoice
```

Finalize a draft invoice

Finalize a draft invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the draft Lago Invoice

try {
    $result = $apiInstance->finalizeInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->finalizeInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the draft Lago Invoice | |

### Return type

[**\LagoClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllInvoices()`

```php
findAllInvoices($external_customer_id, $issuing_date_from, $issuing_date_to, $status): \LagoClient\Model\InvoicesPaginated
```

Find all invoices

Find all invoices in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 12345; // string | External customer ID
$issuing_date_from = Fri Jul 08 00:00:00 UTC 2022; // \DateTime | Date from
$issuing_date_to = Tue Aug 09 00:00:00 UTC 2022; // \DateTime | Date to
$status = 'status_example'; // string | Status

try {
    $result = $apiInstance->findAllInvoices($external_customer_id, $issuing_date_from, $issuing_date_to, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->findAllInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| External customer ID | [optional] |
| **issuing_date_from** | **\DateTime**| Date from | [optional] |
| **issuing_date_to** | **\DateTime**| Date to | [optional] |
| **status** | **string**| Status | [optional] |

### Return type

[**\LagoClient\Model\InvoicesPaginated**](../Model/InvoicesPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findInvoice()`

```php
findInvoice($id): \LagoClient\Model\Invoice
```

Find invoice by ID

Return a single invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Invoice

try {
    $result = $apiInstance->findInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->findInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Invoice | |

### Return type

[**\LagoClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshInvoice()`

```php
refreshInvoice($id): \LagoClient\Model\Invoice
```

Refresh a draft invoice

Refresh a draft invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Invoice

try {
    $result = $apiInstance->refreshInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->refreshInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Invoice | |

### Return type

[**\LagoClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryPayment()`

```php
retryPayment($id)
```

Retry invoice payment

Retry invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Invoice

try {
    $apiInstance->retryPayment($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->retryPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Invoice | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoice()`

```php
updateInvoice($id, $invoice_input): \LagoClient\Model\Invoice
```

Update an existing invoice status

Update an existing invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Invoice
$invoice_input = new \LagoClient\Model\InvoiceInput(); // \LagoClient\Model\InvoiceInput | Update an existing invoice

try {
    $result = $apiInstance->updateInvoice($id, $invoice_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Invoice | |
| **invoice_input** | [**\LagoClient\Model\InvoiceInput**](../Model/InvoiceInput.md)| Update an existing invoice | |

### Return type

[**\LagoClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
