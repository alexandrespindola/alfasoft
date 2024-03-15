<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', [ContactController::class, 'index'])->name('index');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);


// Route::get('/contacts', [ContactController::class, 'index2'])->name('contacts.index');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [ContactController::class, 'index2'])->name('contacts.index');
    Route::resource('contacts', ContactController::class)->except('index');
});
