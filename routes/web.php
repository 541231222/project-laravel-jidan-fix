<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome'); //ini merujuk ke page welcome
});

// Route::get('/index', function () {
//     return view('index'); //ini merujuk ke page index di folder resource
// });

// Route::get('/login', function () {
//     return view('login'); //ini merujuk ke page index di folder resource
// });

// Route::get('/about', function () {
//     return view('about'); //ini merujuk ke page index di folder resource
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');
