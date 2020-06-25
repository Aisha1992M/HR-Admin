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



Route::get('history', function () {
    return view('history');
});


Route::get('employee', function () {
    return view('employee');
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


//error
//Route::get('/employee', 'Account\EmployeeController@show')->name('Employee_View');
//Route::get('/employee/delete/{id}', 'Account\EmployeeController@delete')->name('Employee_Destroy');
//Route::get('/employee/edit/{id}', 'Account\EmployeeController@edit')->name('Employee_Edit');
//Route::post('/employee/edit', 'Account\EmployeeController@editing')->name('Employee_Edit_POST');
//Route::get('/employee/add', 'Account\EmployeeController@add')->name('Employee_Add_GET');
//Route::post('/employee/add', 'Account\EmployeeController@adding')->name('Employee_Add_POST');


Route::get('/employee', 'EmployeeController@show')->name('Employee_View');
Route::get('/employee/delete/{id}', 'EmployeeController@delete')->name('Employee_Destroy');
Route::get('/employee/edit/{id}', 'EmployeeController@edit')->name('Employee_Edit');
Route::post('/employee/edit', 'EmployeeController@editing')->name('Employee_Edit_POST');
Route::get('/employee/add', 'EmployeeController@add')->name('Employee_Add_GET');
Route::post('/employee/add', 'EmployeeController@adding')->name('Employee_Add_POST');



Route::resource('/WorkingHour','WorkingHoursController');

Route::resource('/users','EditController');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
