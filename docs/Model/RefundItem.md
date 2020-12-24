# # RefundItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refund_amount** | [**\OpenAPI\EbayFulFillmentClient\Model\SimpleAmount**](SimpleAmount.md) |  | [optional]
**line_item_id** | **string** | The unique identifier of an order line item. This identifier is created once a buyer purchases a &#39;Buy It Now&#39; item or if an auction listing ends with a winning bidder. Either this field or the legacyReference container is needed to identify an individual order line item that will receive a refund. Note: The lineItemId field is used to identify an order line item in REST API format, and the legacyReference container is used to identify an order line item in Trading/legacy API format. Both legacy and REST API identifiers are returned in getOrder (Fulfillment API) and GetOrders (Trading API). | [optional]
**legacy_reference** | [**\OpenAPI\EbayFulFillmentClient\Model\LegacyReference**](LegacyReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
