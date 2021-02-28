<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCourse;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    private $repository;

    public function __construct(Course $course)
    {
        $this->repository = $course;
    }

    public function index()
    {
        $courses = $this->repository->latest()->paginate();

        return view('admin.pages.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.pages.courses.create');
    }

    public function store(StoreUpdateCourse $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('courses.index');
    }

    public function show($id)
    {
        if (!$course = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.courses.show', compact('course'));
    }

    public function edit($id)
    {
        if (!$course = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.courses.edit', compact('course'));
    }

    public function update(StoreUpdateCourse $request, $id)
    {
        if (!$course = $this->repository->find($id)) {
            return redirect()->back();
        }

        $course->update($request->all());

        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        if (!$course = $this->repository->find($id)) {
            return redirect()->back();
        }

        $course->delete();

        return redirect()->route('courses.index');
    }

    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $courses = $this->repository->
                        where(function ($query) use ($request) {
                            if ($request->filter) {
                                $query->where('name', 'LIKE', "%{$request->filter}%")->
                                orWhere('description', 'LIKE', "%{$request->filter}%");
                            }
                        })->latest()->paginate();

        return view('admin.pages.courses.index', compact('courses', 'filters'));
    }
}
