<?php

namespace App\Providers;

use Horsefly\Applicant;
use App\Observers\ApplicantObserver;

use Illuminate\Support\ServiceProvider;

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
        // Register the Applicant observer
        Applicant::observe(ApplicantObserver::class);
    }
}
