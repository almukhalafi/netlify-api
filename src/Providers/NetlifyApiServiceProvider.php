<?php
namespace Almukhalafi\NetlifyApi\Providers;
use Illuminate\Support\ServiceProvider;

class NetlifyApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPublishables();

    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/netlify.php', 'netlify');


    }

    protected function registerPublishables(): void
    {
        $this->publishes([
            __DIR__.'/../config/netlify.php' => config_path('netlify.php'),
        ], 'config');


    }
}