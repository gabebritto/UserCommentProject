<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request)
    {   
        $users = $this->model->getUsers(search: $request->search ?? '');
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index'); 
        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $user = $this->model->storeUser($request);
        return redirect(route('users.show', $user->id));
    }
    
    public function edit($id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index'); 
        return view('users.edit', compact('user'));
    }
    
    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = $this->model->find($id))
            return redirect()->route('users.index'); 
        $user->update($this->model->updateUser($request));
        return redirect()->route('users.index');
    }
}
