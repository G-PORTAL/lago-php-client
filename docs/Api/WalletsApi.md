# LagoClient\WalletsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWallet()**](WalletsApi.md#createWallet) | **POST** /wallets | Create a new wallet |
| [**createWalletTransaction()**](WalletsApi.md#createWalletTransaction) | **POST** /wallet_transactions | Create a new wallet transaction |
| [**destroyWallet()**](WalletsApi.md#destroyWallet) | **DELETE** /wallets/{id} | Delete a wallet |
| [**findAllWalletTransactions()**](WalletsApi.md#findAllWalletTransactions) | **GET** /wallets/{id}/wallet_transactions | Find wallet transactions |
| [**findAllWallets()**](WalletsApi.md#findAllWallets) | **GET** /wallets | Find wallets |
| [**findWallet()**](WalletsApi.md#findWallet) | **GET** /wallets/{id} | Find wallet |
| [**updateWallet()**](WalletsApi.md#updateWallet) | **PUT** /wallets/{id} | Update an existing wallet |


## `createWallet()`

```php
createWallet($wallet_input): \LagoClient\Model\Wallet
```

Create a new wallet

Create a new wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_input = new \LagoClient\Model\WalletInput(); // \LagoClient\Model\WalletInput | Wallet payload

try {
    $result = $apiInstance->createWallet($wallet_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_input** | [**\LagoClient\Model\WalletInput**](../Model/WalletInput.md)| Wallet payload | |

### Return type

[**\LagoClient\Model\Wallet**](../Model/Wallet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWalletTransaction()`

```php
createWalletTransaction($wallet_transaction_input): \LagoClient\Model\WalletTransactions
```

Create a new wallet transaction

Create a new wallet transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_transaction_input = new \LagoClient\Model\WalletTransactionInput(); // \LagoClient\Model\WalletTransactionInput | Wallet transaction payload

try {
    $result = $apiInstance->createWalletTransaction($wallet_transaction_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWalletTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_transaction_input** | [**\LagoClient\Model\WalletTransactionInput**](../Model/WalletTransactionInput.md)| Wallet transaction payload | |

### Return type

[**\LagoClient\Model\WalletTransactions**](../Model/WalletTransactions.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyWallet()`

```php
destroyWallet($id): \LagoClient\Model\Wallet
```

Delete a wallet

Delete a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Lago ID of the existing wallet

try {
    $result = $apiInstance->destroyWallet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->destroyWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Lago ID of the existing wallet | |

### Return type

[**\LagoClient\Model\Wallet**](../Model/Wallet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllWalletTransactions()`

```php
findAllWalletTransactions($id, $status, $transaction_type): \LagoClient\Model\WalletTransactionsPaginated
```

Find wallet transactions

Find all wallet transactions for certain wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Lago ID of the existing wallet
$status = pending; // string | Status (pending or settled)
$transaction_type = inbound; // string | Transaction Type (inbound or outbound)

try {
    $result = $apiInstance->findAllWalletTransactions($id, $status, $transaction_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->findAllWalletTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Lago ID of the existing wallet | |
| **status** | **string**| Status (pending or settled) | [optional] |
| **transaction_type** | **string**| Transaction Type (inbound or outbound) | [optional] |

### Return type

[**\LagoClient\Model\WalletTransactionsPaginated**](../Model/WalletTransactionsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllWallets()`

```php
findAllWallets($external_customer_id): \LagoClient\Model\WalletsPaginated
```

Find wallets

Find all wallets for certain customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 12345; // string | External customer ID

try {
    $result = $apiInstance->findAllWallets($external_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->findAllWallets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| External customer ID | |

### Return type

[**\LagoClient\Model\WalletsPaginated**](../Model/WalletsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findWallet()`

```php
findWallet($id): \LagoClient\Model\Wallet
```

Find wallet

Return a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Lago ID of the existing wallet

try {
    $result = $apiInstance->findWallet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->findWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Lago ID of the existing wallet | |

### Return type

[**\LagoClient\Model\Wallet**](../Model/Wallet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWallet()`

```php
updateWallet($id, $wallet_update_input): \LagoClient\Model\Wallet
```

Update an existing wallet

Update an existing wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = LagoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new LagoClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Lago ID of the existing wallet
$wallet_update_input = new \LagoClient\Model\WalletUpdateInput(); // \LagoClient\Model\WalletUpdateInput | Update an existing wallet

try {
    $result = $apiInstance->updateWallet($id, $wallet_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->updateWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Lago ID of the existing wallet | |
| **wallet_update_input** | [**\LagoClient\Model\WalletUpdateInput**](../Model/WalletUpdateInput.md)| Update an existing wallet | |

### Return type

[**\LagoClient\Model\Wallet**](../Model/Wallet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
