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
    return view('auth.login');
});

Route::get('shift', function () {
    return view('shift');
});

Route::get('history', function () {
    return view('history');
});


Route::get('list', function () {
    return view('list');
});

Route::get('home', function () {
    return view('home');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('eprofile', function () {
    return view('eprofile');
});

Route::get('welcome', function () {
    return view('welcome');
});








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
