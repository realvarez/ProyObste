<?php

namespace App\Http\Controllers;

use App\File;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
class FileController extends Controller
{

   public function __construct(Guard $auth){
        $this->auth=$auth;
    }

   public function index()
   {
      $file = File::all();
      return view('forms-upload', $data);
   }

   public function show($id)
   {
      $file = File::find($id);
      return $file;
   }

   public function store(Request $request)
   {
      $this->validate($request, [
         'file'   => 'required|file|mimes:pdf,doc,ppt,pptx|max:2048'
      ]);
      
      $category               =  Category::find($request->category_id);
      $route                  =  $category->category_name;
      
      if ($category->category_level != 1) {
         while ($category->category_level != 1) {
            $category         =  Category::find($category->superior_category_id);
            $route            =  $category->category_name . '/' . $route;
         }
      }
      $file                   =  new File($request->all());
      $file->user_id          =  Auth::user()->id;
      $file->file_real_name   =  $request->file('file')->getClientOriginalName();
      $file->storage_type     =  1;  
      $file->file_extension   =  $request->file('file')->getClientOriginalExtension();
      $file->file_name        =  $category->category_name.'_'.$request->file_year.'.'.$file->file_extension;
      
      $file->file_size        =  $request->file('file')->getClientSize();

      $path = Storage::putFileAs($route, $request->file('file'), $file->file_real_name);
      $file->file_path        =  $path;
      $file->state            =  1;
      $file->user_id          =  $this->auth->user()->id;
      $file->save();

      return redirect()->action('CategoryController@show', ['id' => $request->category_id]);
   }

   public function edit($id)
   {
      $file = File::find($id);
      return $file;
   }

   public function update(Request $request, $id)
   {

      $file = File::find($id);
      $file->update($request->all());
   }

   public function destroy($id)
   {

      //la consideramos?
   }
}
