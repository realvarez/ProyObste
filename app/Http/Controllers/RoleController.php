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
        $data['roles']      = Role::all();
        foreach($data['roles'] as $rol){
            $rol->cantUsers = Roles_permission::where('role_id', $rol->id)->count();
        }
        return view('admin.roles.index', $data);
    }
 
    public function show($id) { 
        $data['rol']        = Role::find($id);
        $data['permissions'] = $data['rol']->has_permissions;
        return view('admin.roles.show', $data);
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
