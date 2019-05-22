<?php
use App\File;

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

Route::get('storage/{archivo}', function ($archivo) {
    $file = File::find($archivo);

    //TODO: Por definir la direccion de storage
    //Variable global de storage


    $public_path =  '/var/www/storage/app/';
    $url = $public_path.$file->file_path;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($file->file_path))
    {
      return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);

});
Route::get('stream/{archivo}', function ($archivo) {
    $file = File::find($archivo);

    //TODO: Por definir la direccion de storage
    //Variable global de storage


    $public_path =  '/var/www/storage/app/';
    $url = $public_path.$file->file_path;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($file->file_path))
    {
      return response()->file($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);

});

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('category', 'CategoryController');
    Route::resource('files','FileController');
});



