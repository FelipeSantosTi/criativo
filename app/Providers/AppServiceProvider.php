<?php

namespace App\Providers;

use App\Models\{
    Plan,
    School,
    Course
};
use App\Observers\{
    PlanObserver,
    SchoolObserver,
    CourseObserver
};
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
        Course::observe(CourseObserver::class);
    }
}
