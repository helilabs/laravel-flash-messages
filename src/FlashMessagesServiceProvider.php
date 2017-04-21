<?php

namespace Helilabs\FlashMessages;

use Illuminate\Support\ServiceProvider;

class FlashMessagesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'Helilabs\FlashMessages');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/helilabs/flashMessages'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Helilabs\FlashMessages', function ($app) {
            return new FlashMessages();
        });
    }
}
