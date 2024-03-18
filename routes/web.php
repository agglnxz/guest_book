<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[DashboardController::class,'view_dashboard'])->name('dashboard');

Route::get('/login',[LoginController::class,'view_login'])->name('login');

Route::post('/login', [LoginController::class, 'Loginroses'])->name('loginProses');

// admin
Route::get('/dashboardAdmin',[AdminController::class,'index'])->name('dashboardAdmin');
