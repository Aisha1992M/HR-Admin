<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});


Route::get('dash', function () {
    return view('dash');
});

Route::get('shift', function () {
    return view('shift');
});

Route::get('history', function () {
    return view('history');
});

<<<<<<< HEAD
Route::get('list', function () {
    return view('list');
});


=======
Route::get('profile', function () {
    return view('profile');
});

>>>>>>> 4ca9e91e4781c8363efb441fa2a539c861689edc
