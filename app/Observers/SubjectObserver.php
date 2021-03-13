<?php

namespace App\Observers;

use App\Models\Subject;
use Illuminate\Support\Str;

class SubjectObserver
{
    public function creating(Subject $subject)
    {
        $subject->url = Str::kebab($subject->name);
    }

    public function updating(Subject $subject)
    {
        $subject->url = Str::kebab($subject->name);
    }
}
