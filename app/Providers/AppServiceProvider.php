<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Apprentice;
use App\Observers\ApprenticeObserver;

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
        // Enlazar el modelo con su Observer
        Apprentice::observe(ApprenticeObserver::class);
    }
}
