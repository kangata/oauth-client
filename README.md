```
composer require quetzal-studio/oauth-client:dev-main
```

```
'client' => \QuetzalStudio\OAuthClient\Http\Middleware\CheckClientCredentials::class,
'client_owner.permission' => \QuetzalStudio\OAuthClient\Http\Middleware\CheckClientOwnerPermission::class,
```
