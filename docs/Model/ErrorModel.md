# # ErrorModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**detail** | **string** | A human-readable explanation specific to this occurrence of the problem. | [optional]
**errors** | [**\Alfaview\Client\Model\ErrorDetail[]**](ErrorDetail.md) | Optional list of individual error details | [optional]
**instance** | **string** | A URI reference that identifies the specific occurrence of the problem. | [optional]
**status** | **int** | HTTP status code | [optional]
**title** | **string** | A short, human-readable summary of the problem type. This value should not change between occurrences of the error. | [optional]
**type** | **string** | A URI reference to human-readable documentation for the error. | [optional] [default to 'about:blank']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
