<?php

namespace App\Observers;

use App\Models\School;
use Illuminate\Support\Str;

class SchoolObserver
{
    public function creating(School $school)
    {
        $school->uuid = Str::uuid();
        $school->url = Str::kebab($school->name);
    }

    public function updating(School $school)
    {
        $school->url = Str::kebab($school->name);
    }
}
