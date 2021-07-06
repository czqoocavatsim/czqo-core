<?php

namespace App\Providers;

use App\AppSettings;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AppSettings::class, function () {
            return AppSettings::make(storage_path('app/appsettings.json'));
        });


        $this->app->singleton(\Parsedown::class);
    }
}
