<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/save-users', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard',[AuthController::class, 'dashboard'])  ->middleware('auth')
    ->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// waht is wrong on these
