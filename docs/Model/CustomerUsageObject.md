# # CustomerUsageObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_datetime** | **\DateTime** | The lower bound of the billing period, expressed in the ISO 8601 datetime format in Coordinated Universal Time (UTC). |
**to_datetime** | **\DateTime** | The upper bound of the billing period, expressed in the ISO 8601 datetime format in Coordinated Universal Time (UTC). |
**issuing_date** | **\DateTime** | The date of creation of the invoice. |
**amount_cents** | **int** | The amount in cents, tax excluded. |
**amount_currency** | [**Currency**](Currency.md) |  |
**total_amount_cents** | **int** | The total amount in cents, tax included. |
**total_amount_currency** | [**Currency**](Currency.md) |  |
**vat_amount_cents** | **int** | The tax amount in cents. |
**vat_amount_currency** | [**Currency**](Currency.md) |  |
**charges_usage** | [**\LagoClient\Model\CustomerChargeUsageObject[]**](CustomerChargeUsageObject.md) | Array of charges that comprise the current usage. It contains detailed information about individual charge items associated with the usage. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
