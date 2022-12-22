<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get('/dashboard', [UserController::class, 'index'], function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/search', [SearchController::class, 'index']);