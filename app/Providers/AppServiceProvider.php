<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerMessageScrapperService();
    }

    protected function registerMessageScrapperService()
    {
        $this->app->bind('App\Services\Contracts\MessageScrapperInterface', function () {
            return new \App\Services\MessageScrapper\MessageScrapperService();
        });
    }
}
