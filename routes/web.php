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

Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/form','FormsController@index');
Route::get('/table','TablesController@index');
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/form','FormsController@store');
Route::get('/table/destroy/{id}','TablesController@destroy');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
