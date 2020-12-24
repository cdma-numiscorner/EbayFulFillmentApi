# # OrderRefund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\OpenAPI\EbayFulFillmentClient\Model\Amount**](Amount.md) |  | [optional]
**refund_date** | **string** | The date and time that the refund was issued. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the refund has been issued. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z | [optional]
**refund_id** | **string** | Unique identifier of a refund that was initiated for an order through the issueRefund method. If the issueRefund method was used to issue one or more refunds at the line item level, these refund identifiers are returned at the line item level instead (lineItems.refunds.refundId field). A refundId value is returned in the response of the issueRefund method, and this same value will be returned in the getOrders and getOrders responses for pending and completed refunds. The issueRefund method can only be used for eBay managed payment orders. For other refunds, see the refundReferenceId field. | [optional]
**refund_reference_id** | **string** | The eBay-generated unique identifier for the refund. This field is not returned until the refund has been issued. | [optional]
**refund_status** | **string** | This enumeration value indicates the current status of the refund to the buyer. This container is always returned for each refund. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:RefundStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
