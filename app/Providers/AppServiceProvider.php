<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**faire lien avec BD*/

use Illuminate\Support\facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //taille par defaut
        schema::defaultStringLength(191);
    }
}
