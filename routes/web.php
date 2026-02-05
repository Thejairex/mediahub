<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('test', 'test')
    ->name('dashboard.test');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', App\Livewire\Dashboard::class)->name('dashboard');
    Route::resource('media-items', App\Http\Controllers\MediaItemsController::class);
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
