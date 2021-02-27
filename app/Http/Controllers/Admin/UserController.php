<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $repository;

    public function __construct(User $user)
    {
        $this->repository = $user;
    }

    public function index()
    {
        $users = $this->repository->paginate();

        return view('admin.pages.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.pages.users.create');
    }

    public function store(StoreUpdateUser $request)
    {
        $school = auth()->user()->school;
        $data = $request->all();
        $data['school_id'] = $school->id;

        $this->repository->create($data);

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        if (!$user = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.users.show', compact('user'));
    }

    public function edit($id)
    {
        if (!$user = $this->repository->find($id)) {
            return redirect()->back();
        }

        return view('admin.pages.users.edit', compact('user'));
    }

    public function update(StoreUpdateUser $request, $id)
    {
        if (!$user = $this->repository->find($id)) {
            return redirect()->back();
        }

        $user->update($request->all());

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        if (!$user = $this->repository->find($id)) {
            return redirect()->back();
        }

        $user->delete();

        return redirect()->route('users.index');
    }

    public function search(Request $request)
    {
        $filters = $request->only('filter');

        $users = $this->repository->
        where(function ($query) use ($request) {
            if ($request->filter) {
                $query->where('name', $request->filter)->
                orWhere('email', 'LIKE', "%{$request->filter}%");
            }
        })->paginate();

        return view('admin.pages.users.index', compact('users', 'filters'));
    }
}