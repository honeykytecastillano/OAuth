<?php

use App\Http\Controllers\GoogleLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

//----For Google redirect and callback functions
Route::get('login/google/redirect', [GoogleLoginController::class, 'redirectToGoogle']) ->name('google.redirect');
Route::get('login/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
//----Calling dashboard after sign-in
Route::get('/dashboard', function () {
$user = session('user'); // Retrieve user data from the session
return view('dashboard', ['user' => $user]);
});

// Laravel authentication routes
Route::post('/logout', [GoogleLoginController::class, 'logout'])->name('logout');
