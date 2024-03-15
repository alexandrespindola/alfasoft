<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index'])->name('index');

Route::get('/contacts', [ContactController::class, 'index2'])->name('contacts.index');

Route::resource('contacts', ContactController::class)->except('index');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('contacts', ContactController::class)->except('index');
// });
