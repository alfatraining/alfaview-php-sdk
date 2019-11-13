# alfaview PHP SDK

A PHP library for the alfaview APIs. This SDK is the successor of the previous version that was based on gRPC. Starting with version `2.0` this SDK no longer requires the gRPC server module and relies solely on JSON-based API communication.

### Getting started
- Signup for an alfaview account on [alfaview.com](https://alfaview.com)
- Obtain your API credentials via our friendly support@alfaview.com
- Include this SDK via Composer and take it for a spin

### Convenient usage
Take a look the `Alfaview.php` in the `src` directory. It is a convenient entry point for most use cases like **authentication**, **listing rooms** or **creating join links**.

Here is an example for authenticating with the API and retrieving a list of rooms:

```php
        $av = new Alfaview();

        $credentials = new AuthenticationAuthorizationCodeCredentials();
        $credentials->setClientId('YOUR_API_CLIENT_ID');
        $credentials->setCode('YOUR_API_CODE');
        $credentials->setCompanyId('YOUR_API_COMPANY_ID');

        $response = $av->authenticate($credentials);
        $accessToken = $response->reply->getAccessToken();

        $response = $av->roomList($accessToken);
        var_dump($response->reply->getRooms());
```

### Advanced usage
Not all use cases are covered in the convenience wrapper. However, the complete API functionality is yet available by directly accessing our API endpoints described in the documentation below. And if you are awesome, feel free to contribute!

### Documentation
- [Authentication Service](docs/Api/AuthenticationServiceApi.md)
- [BusinessLogic Service](docs/Api/BusinessLogicServiceApi.md)
- [Company Service](docs/Api/CompanyServiceApi.md)
- [Room Service](docs/Api/RoomServiceApi.md)
- [User Service](docs/Api/UserServiceApi.md)
