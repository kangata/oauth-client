```
composer require quetzal-studio/oauth-client:dev-master --with-dependencies
```

```
'client' => \QuetzalStudio\OAuthClient\Http\Middleware\CheckClientCredentials::class,
'client_owner.permission' => \QuetzalStudio\OAuthClient\Http\Middleware\CheckClientOwnerPermission::class,
```
