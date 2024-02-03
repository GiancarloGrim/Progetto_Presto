<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('categories')) { //se il nostro progetto ha una cartella categorie
            View::share('categories', Category::all()); //allora con la classe view e il metodo share condividiamo con tutte le viste del progetto una variabile categories che come valore avrà tutte le categorie
        }

        Paginator::useBootstrap();
    }



}
