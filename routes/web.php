<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/Login', function () {
    return view ('Login');
});

Route::get('/Home', function () {
    return view ('Home');
});

Route::get('/Tempat-pkl', function () {
    return view ('Tempat-pkl');
});

Route::get('/Profil', function () {
    return view ('Profil');
});

Route::get('/Alur', function () {
    return view ('Alur');
});


