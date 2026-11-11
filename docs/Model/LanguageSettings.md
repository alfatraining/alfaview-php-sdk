# LanguageSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_spoken_language** | **string** | The default spoken language. A room without a default spoken language transcribes in English. To get the available transcription languages, refer to the [List Available Languages](/v2/docs/openapi#/operations/ListAvailableLanguages) endpoint. | [optional]
**target_transcription_languages** | **string[]** | The languages that the translation feature is translating the spoken words to. The translation into all of these languages is happening permanently as long as the feature is enabled, even if no participant has selected that language. To get the available transcription languages, refer to the [List Available Languages](/v2/docs/openapi#/operations/ListAvailableLanguages) endpoint. | [optional]
**transcription_enabled** | **bool** | If true, the transcription feature is enabled in this room. |
**transcription_type** | **string** | The type of transcription as selectable for room administrators in the client. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
