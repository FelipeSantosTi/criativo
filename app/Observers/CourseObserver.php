<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Support\Str;

class CourseObserver
{

    public function creating(Course $course)
    {
        $course->url = Str::kebab($course->name);
    }

    public function updating(Course $course)
    {
        $course->url = Str::kebab($course->name);
    }
}
