# # CancelStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancelled_date** | **string** | The date and time the order was cancelled, if applicable. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2015-08-04T19:09:02.768Z | [optional]
**cancel_requests** | [**\OpenAPI\EbayFulFillmentClient\Model\CancelRequest[]**](CancelRequest.md) | This array contains details of one or more buyer requests to cancel the order. For the getOrders call: This array is returned but is always empty. For the getOrder call: This array is returned fully populated with information about any cancellation requests. | [optional]
**cancel_state** | **string** | The state of the order with regard to cancellation. This field is always returned, and if there are no cancellation requests, a value of NONE_REQUESTED is returned. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:CancelStateEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
