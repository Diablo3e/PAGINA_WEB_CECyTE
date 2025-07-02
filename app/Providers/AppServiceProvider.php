<?php

namespace App\Providers;

use Illuminate\Support\Facades;
use Illuminate\View\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Plantel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Facades\View::composer('components.formulario', function (View $view){
            $plantelesDB = Plantel::all();
            
            $view->with([
                'planteles' => $plantelesDB,
            ]);
        });
    }
}
