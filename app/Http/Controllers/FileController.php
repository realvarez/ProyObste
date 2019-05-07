<?php

namespace App\Http\Controllers;
use App\file;
use Illuminate\Http\Request;

class FileController extends Controller
{
   public function index() {
   	$file = file::all();
   	
   	return $file;

   }

   public function show($id) { 
   	$file= file::find($id);

   	return $file;

   }


   public function create() {
   	
   }

   public function store(Request $request) {

   file::create($request->all());
   
   }

   public function edit($id) {

   $file= file::find($id);

   return $file;

   }

   public function update(Request $request, $id) {

   	$file= file::find($id);
   	$file->update($request->all());

   }

   public function destroy($id) {

   	//la consideramos? 
   }
}
