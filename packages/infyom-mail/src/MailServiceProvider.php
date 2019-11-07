<?php

namespace InfyOm\Mail;

use Illuminate\Support\ServiceProvider;

class MailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__.'/../config/infyom_mail.php';
        $this->publishes([
            $configPath => config_path('infyom_mail.php'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('infyom_mail', function ($app) {
            return new MailManager();
        });
    }
}