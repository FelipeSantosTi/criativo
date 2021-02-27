<?php

namespace App\Providers;

use App\Models\Plan;
use App\Models\School;
use App\Observers\PlanObserver;
use App\Observers\SchoolObserver;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Plan::observe(PlanObserver::class);
        School::observe(SchoolObserver::class);
    }
}
