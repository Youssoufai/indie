<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'posts.index')->name('home');
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
