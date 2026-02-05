<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('test', 'test')
    ->name('dashboard.test');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', App\Livewire\Dashboard::class)->name('dashboard');

    Route::get('/media-items/{type}', [App\Http\Controllers\MediaItemsController::class, 'index'])
        ->name('media-items.index');
        Route::get('/media-items/library', [App\Http\Controllers\MediaItemsController::class, 'library'])
        ->name('media-items.library');

    Route::resource('media-items', App\Http\Controllers\MediaItemsController::class)->except(['index']);

    
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
