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
    return view('dashboard');
});
Route::get('/tables-basic', function () {
    return view('tables-basic');
});
Route::get('/tables-datatables', function () {
    return view('tables-datatable');
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



Auth::routes(["register" =>false]);

Route::get('/dash', 'HomeController@index');
Route::resource('files', 'FileController');
Route::resource('users', 'UserController');
Route::resource('roles', 'roleController');

Route::get('login', '\App\Http\Controllers\Auth\LoginController@index');
Route::post('checklogin', '\App\Http\Controllers\Auth\LoginController@checklogin');
Route::get('successlogin', '\App\Http\Controllers\Auth\LoginController@successlogin');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::middleware(['auth'])->group(function () {

});


