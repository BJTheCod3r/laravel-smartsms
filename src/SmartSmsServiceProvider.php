<?php

/*
 * This file is part of the Laravel Smartsms package.
 *
 * (c) Bolaji Ajani <fabulousbj@hotmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BJTheCod3r\SmartSms;

use Illuminate\Support\ServiceProvider;

class SmartSmsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/smartsms.php', 'smartsms');

        // Register the service the package provides.
        $this->app->singleton('smartsms', function ($app) {
            return new SmartSms;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['smartsms'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/smartsms.php' => config_path('smartsms.php'),
        ], 'smartsms.config');

    }
}
