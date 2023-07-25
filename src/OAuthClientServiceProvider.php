<?php

namespace QuetzalStudio\OAuthClient;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use QuetzalStudio\OAuthClient\Models\Client;
use QuetzalStudio\OAuthClient\Models\Token;

class OAuthClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/client.php', 'client');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPublishing();

        if (! $this->app->runningInConsole()) {
            $this->setupPassport();
        }
    }

    public function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/client.php' => config_path('client.php'),
            ], 'client-config');

            $this->publishes([
                __DIR__.'/../config/permission.php' => config_path('permission.php'),
            ], 'client-permission-config');
        }
    }

    protected function setupPassport()
    {
        Passport::ignoreMigrations();
        Passport::tokensCan($this->getScopes());
        Passport::useClientModel(Client::class);
        Passport::useTokenModel(Token::class);
    }

    protected function getScopes(): array
    {
        return get_permissions()
            ->filter(fn ($permission) => $permission->guard_name == config('client.permission.guard'))
            ->mapWithKeys(fn ($permission) => [$permission->name => ''])
            ->toArray();
    }
}
