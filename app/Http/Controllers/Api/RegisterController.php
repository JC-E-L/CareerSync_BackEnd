<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return User::all();
    
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
       $validated = $request->validate([
            'username' => 'required|string|max:255',
            'Fname' => 'required|string|max:255',
            'Lname' => 'required|string|max:255',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|min:6|confirmed', 

       ]);

       $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        return $user;
    }

    public function show(string $id)
    {
        return User::findOrFail($id);
    }
    
    public function update(UserRequest $request, string $id)
    {
        $validated = $request->validated();
        $user = User::findOrFail($id);
        $user->update($validated);

        return $user;
    }

    public function email(UserRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validated();
        $user->email = $validated['email'];
        $user->save();

        return $user;
    }
    /**
     * Update the password of the specified resource in storage.
     */
    public function password(UserRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validated();
        $user->password = Hash::make($validated['password']);
        $user->save();

        return $user;
    }


   
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return $user;
    }
    
}
