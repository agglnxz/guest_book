<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});



=======
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[DashboardController::class,'view_dashboard'])->name('dashboard');
>>>>>>> 6e1cbdc9cb95990d0b456a1d07528a91b043d227
