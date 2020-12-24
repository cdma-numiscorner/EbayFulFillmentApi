# # ShippingFulfillmentPagedCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fulfillments** | [**\OpenAPI\EbayFulFillmentClient\Model\ShippingFulfillment[]**](ShippingFulfillment.md) | This array contains one or more fulfillments required for the order that was specified in method endpoint. | [optional]
**total** | **int** | The total number of fulfillments in the specified order. Note: If no fulfillments are found for the order, this field is returned with a value of 0. | [optional]
**warnings** | [**\OpenAPI\EbayFulFillmentClient\Model\Error[]**](Error.md) | This array is only returned if one or more errors or warnings occur with the call request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
