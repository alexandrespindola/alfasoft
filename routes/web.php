<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'index')->name('index');

Route::get('/', [ContactController::class, 'index'])->name('index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('contacts', ContactController::class);
});
