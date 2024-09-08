<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CustomAuthController extends Controller
{
     public function authenticate(Request $request)
    {
        // Validate credentials
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            // Check if the user has roles
            if ($user->roles->isEmpty()) {
                Auth::logout(); // Log out the user
                return redirect()->route('/')->withErrors(['email' => 'You do not have any roles assigned.']);
            }
            
            // Redirect to intended route
            return redirect()->intended('/');
        }

        return redirect()->route('/')->withErrors(['email' => 'Invalid credentials']);
    }
}
