<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('test', 'test')
    ->name('dashboard.test');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', App\Livewire\Dashboard::class)->name('dashboard');

    // Media Items
    Route::get('/media-items/{type}', [App\Http\Controllers\MediaItemsController::class, 'index'])
        ->name('media-items.index');
    Route::get('/media-items/library', [App\Http\Controllers\MediaItemsController::class, 'library'])
        ->name('media-items.library');
    Route::get('/media-item/create', [App\Http\Controllers\MediaItemsController::class, 'create'])
        ->name('media-items.create');
    Route::post('/media-item', [App\Http\Controllers\MediaItemsController::class, 'store'])
        ->name('media-items.store');
        
    Route::get('/media-item/{id}', [App\Http\Controllers\MediaItemsController::class, 'show'])
        ->name('media-items.show');
    Route::get('/media-item/{id}/edit', [App\Http\Controllers\MediaItemsController::class, 'edit'])
        ->name('media-items.edit');
    Route::put('/media-item/{id}', [App\Http\Controllers\MediaItemsController::class, 'update'])
        ->name('media-items.update');
    Route::delete('/media-item/{id}', [App\Http\Controllers\MediaItemsController::class, 'destroy'])
        ->name('media-items.destroy');
    
    Route::get('/importCsv', App\Livewire\ImportCsvAnime::class)
        ->name('importCsv');
    Route::post('/importCsv', [App\Livewire\ImportCsvAnime::class, 'importCsvStore'])
        ->name('importCsvStore');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
