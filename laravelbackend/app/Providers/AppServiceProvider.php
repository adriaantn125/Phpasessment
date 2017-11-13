<?php
//Edit by Adriaan van Niekerk

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Added this to resolve the error when to migrate the database
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Added this to resolve the error when to migrate the database
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
