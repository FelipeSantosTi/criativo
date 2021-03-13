<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSubject;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    private $repository;

    public function __construct(Subject $subject)
    {
        $this->repository = $subject;

        $this->middleware(['can:Disciplinas']);
    }

    public function index()
    {
        $subjects = $this->repository->latest()->paginate();

        return view('admin.pages.subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('admin.pages.subjects.create');
    }

    public function store(StoreUpdateSubject $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('subjects.index');
    }

    public function show($id)
    {
        if (!$subject = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.subjects.show', compact('subject'));
    }

    public function edit($id)
    {
        if (!$subject = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.subjects.edit', compact('subject'));
    }

    public function update(StoreUpdateSubject $request, $id)
    {
        if (!$subject = $this->repository->find($id)) {
            return redirect()->back();
        }

        $subject->update($request->all());

        return redirect()->route('subjects.index');
    }

    public function destroy($id)
    {
        if (!$subject = $this->repository->find($id)) {
            return redirect()->back();
        }

        $subject->delete();

        return redirect()->route('subjects.index');
    }

    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $subjects = $this->repository->
        where(function ($query) use ($request) {
            if ($request->filter) {
                $query->where('name', 'LIKE', "%{$request->filter}%")->
                orWhere('description', 'LIKE', "%{$request->filter}%");
            }
        })->latest()->paginate();

        return view('admin.pages.subjects.index', compact('subjects', 'filters'));
    }
}
