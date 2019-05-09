<?php

namespace App\Http\Controllers;
use App\File;
use App\Category;
use Illuminate\Http\Request;

class FileController extends Controller
{
   public function index() {
   	$file = File::all();
   	
   	return $file;

   }

   public function show($id) { 
   	$file= File::find($id);

   	return $file;

   }


   public function create() {
   	
   }

   public function store(Request $request) {
      $user_id = Auth::user()->id;
      
      $category = Category::find($request -> category_id);
      
      $route = $category->category_name;
      if ($category->category_level !=1){
         while($category->category_level != 1){
            $category = Category::find($category -> superior_category_id);
            $route = $category->category_name.'/'.$route;
         }
      }
      
      
      $path = $request->file('file')->store($route);
      File::create($request->all());
   }

   public function edit($id) {
      $file= File::find($id);
      return $file;
   }

   public function update(Request $request, $id) {

   	$file= File::find($id);
   	$file->update($request->all());

   }

   public function destroy($id) {

   	//la consideramos? 
   }
}
