<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
    return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        // Store user data in the session
        session(['user' => $googleUser]);
        // Redirect to the home route or any other route
  
        return redirect()->intended('/dashboard');
    }

//     public function logout(Request $request)
// {
//     auth()->logout(); // Log the user out
//     $request->session()->invalidate(); // Invalidate the session
//     $request->session()->regenerateToken(); // Regenerate CSRF token

//     return redirect('/'); // Redirect the user to the login page after logout
// }

}
