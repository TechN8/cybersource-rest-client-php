# PtsV2PaymentsPost201ResponseOrderInformationAmountDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalAmount** | **string** | Amount you requested for the payment or capture.  This value is returned for partial authorizations. This field is also returned on incremental authorizations will contain the aggregated amount from the original authorizations and all the incremental authorizations. | [optional] 
**authorizedAmount** | **string** | Amount that was authorized.  Returned by authorization service.  #### FDMS South If you accept IDR or CLP currencies, see the entry for FDMS South in Merchant Descriptors Using the SCMP API. | [optional] 
**currency** | **string** | Currency used for the order. Use the three-character [ISO Standard Currency Codes.](http://apps.cybersource.com/library/documentation/sbc/quickref/currencies.pdf)  #### Used by **Authorization** Required field.  **Authorization Reversal** For an authorization reversal (&#x60;reversalInformation&#x60;) or a capture (&#x60;processingOptions.capture&#x60; is set to &#x60;true&#x60;), you must use the same currency that you used in your payment authorization request.  #### GPX This field is optional for reversing an authorization or credit.  #### DCC for First Data Your local currency. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


