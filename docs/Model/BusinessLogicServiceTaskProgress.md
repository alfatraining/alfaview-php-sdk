# BusinessLogicServiceTaskProgress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tracking_info** | [**\Alfaview\Model\BusinessLogicServiceTrackingInfo**](BusinessLogicServiceTrackingInfo.md) |  | [optional] 
**state** | [**\Alfaview\Model\BusinessLogicServiceState**](BusinessLogicServiceState.md) |  | [optional] 
**execution** | **int** |  | [optional] 
**max_retries** | **int** |  | [optional] 
**next_run** | **string** | unix timestamp in seconds; optional, use it if non-empty; denotes timestamp after which execution will take place. | [optional] 
**metadata** | **map[string,string]** |  | [optional] 
**progress** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


