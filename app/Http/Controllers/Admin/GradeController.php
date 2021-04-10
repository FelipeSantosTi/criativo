<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateGrade;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    private $repository;

    public function __construct(Grade $grade)
    {
        $this->repository = $grade;

        $this->middleware(['can:Classes']);
    }

    public function index()
    {
        $grades = $this->repository->latest()->paginate();

        return view('admin.pages.grades.index', compact('grades'));
    }

    public function create()
    {
        return view('admin.pages.grades.create');
    }

    public function store(StoreUpdateGrade $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('grades.index');
    }

    public function show($id)
    {
        if (!$grade = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.grades.show', compact('grade'));
    }

    public function edit($id)
    {
        if (!$grade = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.grades.edit', compact('grade'));
    }

    public function update(StoreUpdateGrade $request, $id)
    {
        if (!$grade = $this->repository->find($id)) {
            return redirect()->back();
        }

        $grade->update($request->all());

        return redirect()->route('grades.index');
    }

    public function destroy($id)
    {
        if (!$grade = $this->repository->find($id)) {
            return redirect()->back();
        }

        $grade->delete();

        return redirect()->route('grades.index');
    }

    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $grades = $this->repository->
        where(function ($query) use ($request) {
            if ($request->filter) {
                $query->where('name', 'LIKE', "%{$request->filter}%")->
                orWhere('description', 'LIKE', "%{$request->filter}%");
            }
        })->latest()->paginate();

        return view('admin.pages.grades.index', compact('grades', 'filters'));
    }
}
