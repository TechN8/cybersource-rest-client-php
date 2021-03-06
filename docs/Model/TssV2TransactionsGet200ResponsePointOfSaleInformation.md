# TssV2TransactionsGet200ResponsePointOfSaleInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entryMode** | **string** | Method of entering payment card information into the POS terminal. Possible values:   - &#x60;contact&#x60;: Read from direct contact with chip card.  - &#x60;contactless&#x60;: Read from a contactless interface using chip data.  - &#x60;keyed&#x60;: Manually keyed into POS terminal. This value is not supported on OmniPay Direct.  - &#x60;msd&#x60;: Read from a contactless interface using magnetic stripe data (MSD). This value is not supported on OmniPay Direct.  - &#x60;swiped&#x60;: Read from credit card magnetic stripe.  The &#x60;contact&#x60;, &#x60;contactless&#x60;, and &#x60;msd&#x60; values are supported only for EMV transactions.  #### Used by **Authorization** Required field.  #### Card Present Card present information about EMV applies only to credit card processing and PIN debit processing. All other card present information applies only to credit card processing. | [optional] 
**terminalCapability** | **int** | POS terminal’s capability. Possible values:   - &#x60;1&#x60;: Terminal has a magnetic stripe reader only.  - &#x60;2&#x60;: Terminal has a magnetic stripe reader and manual entry capability.  - &#x60;3&#x60;: Terminal has manual entry capability only.  - &#x60;4&#x60;: Terminal can read chip cards.  - &#x60;5&#x60;: Terminal can read contactless chip cards; cannot use contact to read chip cards.  For an EMV transaction, the value of this field must be &#x60;4&#x60; or &#x60;5&#x60;.  #### Used by **Authorization** Required for the following processors: - American Express Direct - Chase Paymentech Solutions - Credit Mutuel-CIC - FDC Nashville Global - FDMS Nashville - OmniPay Direct - SIX - Worldpay VAP  Optional for the following processors: - CyberSource through VisaNet - GPN - GPX - JCN Gateway - RBS WorldPay Atlanta - TSYS Acquiring Solutions | [optional] 
**emv** | [**\CyberSource\Model\Ptsv2paymentsidreversalsPointOfSaleInformationEmv**](Ptsv2paymentsidreversalsPointOfSaleInformationEmv.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


