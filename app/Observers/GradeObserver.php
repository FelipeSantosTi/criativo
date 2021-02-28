<?php

namespace App\Observers;

use App\Models\Grade;
use Illuminate\Support\Str;

class GradeObserver
{

    public function creating(Grade $grade)
    {
        $grade->url = Str::kebab($grade->name);
    }

    public function updating(Grade $grade)
    {
        $grade->url = Str::kebab($grade->name);
    }

}
