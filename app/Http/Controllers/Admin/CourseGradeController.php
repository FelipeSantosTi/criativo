<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;

class CourseGradeController extends Controller
{
    protected $grade, $course;

    public function __construct(Grade $grade, Course $course)
    {
        $this->grade = $grade;
        $this->course = $course;
    }

    public function courses($idGrade)
    {
        if (!$grade = $this->grade->find($idGrade)) {
            return redirect()->back();
        }

        $courses = $grade->courses()->paginate();

        return view('admin.pages.grades.courses.courses', compact('grade', 'courses'));
    }

    public function grades($idCourse)
    {
        if (!$course = $this->course->find($idCourse)) {
            return redirect()->back();
        }

        $grades = $course->grades()->paginate();

        return view('admin.pages.courses.grades.grades', compact('course', 'grades'));
    }

    public function coursesAvailable(Request $request, $idGrade)
    {
        if (!$grade = $this->grade->find($idGrade)) {
            return redirect()->back();
        }

        $filters = $request->except('_token');

        $courses = $grade->coursesAvailable($request->filter);

        return view('admin.pages.grades.courses.available', compact('grade', 'courses', 'filters'));
    }

    public function attachCoursesGrade(Request $request, $idGrade)
    {
        if (!$grade = $this->grade->find($idGrade)) {
            return redirect()->back();
        }

        if (!$request->courses || count($request->courses) == 0) {
            return redirect()->back()->with('info', 'É necessário escolher um curso!');
        }

        $grade->courses()->attach($request->courses);

        return redirect()->route('grades.courses', $grade->id);
    }

    public function detachCoursesGrade($idGrade, $idCourse)
    {
        $grade = $this->grade->find($idGrade);
        $course = $this->course->find($idCourse);

        if (!$grade || !$course) {
            return redirect()->back();
        }

        $grade->courses()->detach($course);

        return redirect()->route('grades.courses', $grade->id);
    }
}
