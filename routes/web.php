<?php

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
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/tables-basic', function () {
    return view('tables-basic');
});
Route::get('/forms-upload', function () {
    return view('tables-basic');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('files','FileController');
Route::resource('users','UserController');