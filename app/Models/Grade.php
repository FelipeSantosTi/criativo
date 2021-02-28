<?php

namespace App\Models;

use App\School\Traits\SchoolTrait;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use SchoolTrait;

    protected $fillable = [
        'name',
        'description',
        'url'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function coursesAvailable($filter = null)
    {
        $courses = Course::whereNotIn('courses.id', function ($query) {
            $query->select('course_grade.course_id');
            $query->from('course_grade');
            $query->whereRaw("course_grade.grade_id={$this->id}");
        })
            ->where(function ($queryFilter) use ($filter) {
                if ($filter)
                    $queryFilter->where('courses.name', 'LIKE', "%{$filter}%");
            })
            ->paginate();

        return $courses;
    }
}
