<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function getUsers()
    {
        return view('users')->with('users', User::all());
    }

    public function createUser()
    {
        return view('createuser');
    }

    public function storeUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:2', 'max:64'],
            'email' => ['required', 'email', 'max:64', 'unique:users'],
            'phone' => ['numeric', 'min:11']
        ]);

        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->save();

        return redirect()->back()->with('status', 'User created successfully');
    }

    public function editUser(User $user)
    {
        return view('edituser')->with('user', $user);
    }

    public function updateUser(User $user, Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:2', 'max:64'],
            'email' => ['required', 'email', 'max:64', Rule::unique('users')->ignore($user->id)],
            'phone' => ['numeric', 'min:11']
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->update();

        return redirect()->back()->with('status', 'User updated successfully');
    }

    public function deleteUser(User $user)
    {
        $user->delete();

        return redirect()->back()->with('status', 'User deleted successfully');
    }
}
