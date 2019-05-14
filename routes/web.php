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
Route::get('/dashboard', function () {
    return view('home');
});
Route::get('/tables-basic', function () {
    return view('tables-basic');
});
Route::get('/forms-upload', function () {
    return view('forms-upload');
});
Route::get('/charts', function () {
    return view('charts');
});
Route::get('/forms-general', function () {
    return view('forms-general');
});
Route::get('/forms-validation', function () {
    return view('forms-validation');
});
Route::get('/forms-select2', function () {
    return view('forms-select2');
});
Route::get('/forms-datetime-picker', function () {
    return view('forms-datetime-picker');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('files', 'FileController');
Route::resource('users', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
