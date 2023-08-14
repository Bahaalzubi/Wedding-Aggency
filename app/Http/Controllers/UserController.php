<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function store(Request $request)
    {
        // Validate the request data as per your requirements
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Create a new User instance
        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']); // Hash the password
        // You can also assign any other user properties here

        // Save the user to the database
        $user->save();

        // Redirect to the users index page or perform any other action as desired
        return redirect()->route('admin.users.index');
    }
}

