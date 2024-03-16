<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[DashboardController::class,'view_dashboard'])->name('dashboard');
Route::post('/login', [LoginController::class, 'login'])->name('login');
