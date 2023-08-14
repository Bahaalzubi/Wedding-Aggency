<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login_register');
    }

  
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            // Authentication successful
    
            // Store user's name and ID in session
            $user = Auth::user();
            Session::put('user_name', $user->name);
            Session::put('user_id', $user->id);
    
            return redirect()->intended('/');
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
    

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user using the data
        // Replace the User model and column names according to your application
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        // Authenticate the user
        Auth::login($user);

        return redirect()->intended('/');
    }
    
    public function logout()
    {
        Auth::logout();

        return redirect('/'); // Redirect to the desired page after logout
    }
}
