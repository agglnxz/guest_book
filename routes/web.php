<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[DashboardController::class,'view_dashboard'])->name('dashboard');
Route::get('/',[LoginController::class,'view_login'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');
