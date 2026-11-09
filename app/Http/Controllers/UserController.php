<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    public function create()
    {
        return view('user-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'full_name' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'full_name' => $request->full_name
        ]);

        return redirect('/users');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('user-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'username' => 'required|unique:users,username,' . $id,
            'full_name' => 'required'
        ]);

        $user->update([
            'username' => $request->username,
            'full_name' => $request->full_name
        ]);

        return redirect('/users');
    }
}