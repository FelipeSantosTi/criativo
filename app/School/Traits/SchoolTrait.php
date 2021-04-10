<?php


namespace App\School\Traits;

use App\School\Observers\SchoolObserver;
use App\School\Scopes\SchoolScope;

trait SchoolTrait
{
    protected static function boot()
    {
        parent::boot();

        static::observe(SchoolObserver::class);

        static::addGlobalScope(new SchoolScope);
    }
}
