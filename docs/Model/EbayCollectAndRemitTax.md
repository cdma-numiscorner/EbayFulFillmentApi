# # EbayCollectAndRemitTax

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\OpenAPI\EbayFulFillmentClient\Model\Amount**](Amount.md) |  | [optional]
**tax_type** | **string** | The type of tax and fees that eBay will collect and remit to the taxing or fee authority. See the TaxTypeEnum type definition for more information about each tax or fee type. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:TaxTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**collection_method** | **string** | This field indicates the collection method used to collect the &#39;Collect and Remit&#39; tax for the order. This field is always returned for orders subject to &#39;Collect and Remit&#39; tax, and its value is always NET. Note: Although the collectionMethod field is returned for all orders subject to &#39;Collect and Remit&#39; tax, the collectionMethod field and the CollectionMethodEnum type are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:CollectionMethodEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
