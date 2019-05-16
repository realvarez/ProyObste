<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Roles_permission;
use App\Category;
class RoleController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function index() {
        $category = new Category();
        $data['categories'] = $category -> recursiveGet();
        $data['roles'] = Role::all();
        foreach($data['roles'] as $rol){
            $rol->cantUsers = Roles_permission::where('role_id', $rol->id)->where('value',1)->count();
        }
        return view('admin.roles.index', $data);
    }
 
    public function show($id) { 
        
    }
 
    public function create() {
        
    }
 
    public function store(Request $request) {
       
    }
 
    public function edit($id) {
       
    }
 
    public function update(Request $request, $id) {
 
    }
 
    public function destroy($id) {
 
    }
}
