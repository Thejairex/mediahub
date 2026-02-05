<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
    // Route::get('forgot-password', ForgotPassword::class)->name('password.request');
    // Route::get('reset-password/{token}', ResetPassword::class)->name('password.reset');
});

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');