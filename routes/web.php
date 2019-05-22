<?php

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('category.subcategory', 'CategoryController');
    Route::resource('files','FileController');
});



