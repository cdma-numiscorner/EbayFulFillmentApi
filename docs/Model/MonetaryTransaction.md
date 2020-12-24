# # MonetaryTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **string** | This timestamp indicates when the monetary transaction occurred. A date is returned for all monetary transactions. The following format is used: YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2015-08-04T19:09:02.768Z. | [optional]
**type** | **string** | This enumeration value indicates whether the monetary transaction is a charge or a credit to the seller. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/api:MonetaryTransactionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**reason** | **string** | This enumeration value indicates the reason for the monetary transaction. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/api:MonetaryTransactionReasonEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**amount** | [**\OpenAPI\EbayFulFillmentClient\Model\DisputeAmount**](DisputeAmount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
