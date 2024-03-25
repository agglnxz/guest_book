<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[LoginController::class,'view_login'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('proseslogin');


// admin
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboardAdmin',[AdminController::class,'index'])->name('dashboardAdmin');
    Route::get('/view_tamu',[AdminController::class,'view_tambahTamu'])->name('view_tamu');
    Route::post('/tambahtamu', [TamuController::class, 'store'])->name('tambahtamu');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

