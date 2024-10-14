<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome'); //ini merujuk ke page welcome
});

Route::get('/index', function () {
    return view('index'); //ini merujuk ke page index di folder resource
});

Route::get('/', function () {
    return view('login'); //ini merujuk ke page index di folder resource
});