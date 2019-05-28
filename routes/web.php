<?php
use App\File;
use PDF as PDF;

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


Auth::routes(["register" => false]);

Route::get('storage/{archivo}', function ($archivo) {
    $file = File::find($archivo);

    //TODO: Por definir la direccion de storage
    //Variable global de storage


    $public_path =  '/home/vagrant/code/ProyObste/storage/app/';
    $url = $public_path . $file->file_path;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($file->file_path)) {
        return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);
});
Route::get('stream/{archivo}', function ($archivo) {
    $file = File::find($archivo);

    //TODO: Por definir la direccion de storage
    //Variable global de storage


    $public_path =  '/home/vagrant/code/ProyObste/storage/app/';
    $url = $public_path . $file->file_path;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($file->file_path)) {
        if ($file->file_extension == 'doc' || $file->file_extension == 'docx') {
            $phpWord = new \PhpOffice\PhpWord\PhpWord();
            $phpWord = \PhpOffice\PhpWord\IOFactory::load($url);
            $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
            try {
                $objWriter->save(storage_path('temp.html'));
            } catch (Exception $e) { }
            return PDF::loadFile(storage_path('temp.html'))->save(storage_path('tempPdf.html'))->stream('temporalview.pdf');
        } else {
            return response()->file($url);
        }
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('category', 'CategoryController');
    Route::resource('files', 'FileController');
});



/*

    //Sub seleccion de categorias
 <div class="col-md-12" style="margin-top: 10px;">
                                    <label>Seleccione a la categoría a la que pertenecerá:</label>
                                        <select name="superior_category_id" class="form-control form-control-md ">
                                        <option value="0" selected>Nueva Categoría Principal</option>
                                    @foreach ($categories as $category)
                                        <option  id="superior_category_id"  value="{{$category->id}}">{{$category->category_name}}  </option>
                                    @endforeach
                                        </select>
                                </div>

*/
