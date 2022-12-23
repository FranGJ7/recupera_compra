<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserUpdateController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


Route::get('/dashboard', [UserController::class, 'index',], function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::delete('/dashboard', [UserController::class, 'destroy'])->middleware(['auth']);

require __DIR__.'/auth.php';

Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/userupdate/{id}/edit', [UserUpdateController::class, 'edit']);
Route::get('/userupdate/{id}', [UserUpdateController::class, 'update']);
