<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $users = Admin::all();
        return view('admin.index', ['admin' => $users]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming data
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'admin' => 'required|boolean'
        ]);

        // Mass assignment protection in the Admin model
        $newUser = Admin::create($data);

        // Redirect after successful creation
        return redirect(route('admin.index'));
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', ['admin' => $admin]);
    }

    public function update(Admin $admin, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'admin' => 'required|boolean'
        ]);

        $admin->update($data);

        return redirect(route('admin.index'))->with('success', 'Update is Successful');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect(route('admin.index'))->with('success', 'Delete is Successful');
    }
}
