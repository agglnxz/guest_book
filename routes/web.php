<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[LoginController::class,'view_login'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('proseslogin');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// admin
Route::get('/dashboardAdmin',[AdminController::class,'index'])->name('dashboardAdmin');
