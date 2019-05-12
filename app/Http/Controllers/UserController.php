<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   public function index() {
   	$user = User::all();

   	return $user;

   }

   public function show($id) {
   	$user= User::find($id);

   	return $user;

   }


   public function create() {

   }

   public function store(Request $request) {
       print_r($request);

   User::create($request->all());

   }

   public function edit($id) {

   $user= User::find($id);

   return $user;

   }

   public function update(Request $request, $id) {

   	$user= User::find($id);
   	$user->update($request->all());

   }

   public function destroy($id) {

   	//la consideramos?
   }
}

