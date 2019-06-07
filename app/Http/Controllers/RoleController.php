<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Roles_permission;
use App\Permission;
use App\Category;
class RoleController extends Controller
{
    public function __construct()
    {}
    
    
    public function index() {
        $data['roles']      = Role::all();
        foreach($data['roles'] as $rol){
            $rol->cantUsers = Roles_permission::where('role_id', $rol->id)->count();
        }
        return view('admin.roles.index', $data);
    }
 
    public function show($id) { 
        $data['rol']                = Role::find($id);
        $data['permissions']        = Permission::all();
        $data['permissions_users']  = $data['rol']->has_permissions;
        foreach ($data['permissions'] as $permission){
            foreach ($data['permissions_users'] as $key => $_permission) {
                if ($permission->name == $_permission->name) {                    
                    $permission->has_permission = true;
                    unset($data['permissions_users'][$key]);
                    break;
                }
            }
        }
        return view('admin.roles.show', $data);
    }
 
    public function create() {
        
    }
 
    public function store(Request $request) {
       
    }
 
    public function edit($id) {
       
    }
 
    public function update(Request $request, $id) {
        $rol                = Role::find($id);
        $rol_permissions    = $rol->has_permissions;
        $permissions_given  = $request->request->all();
        array_forget($permissions_given, '_token');
        array_forget($permissions_given, '_method');
        foreach ($rol_permissions as $key => $value) {
            if (!array_has($permissions_given, $value->name)){
                $rol->has_permissions()->detach($value->id);
                array_forget($permissions_given, $value->id);
            }
        }
        $permissions = Permission::all(); 
        foreach ($permissions_given as $key => $value) {
            $rol->has_permissions()->attach($permissions->firstWhere('name',$key)->id);
        }
        
        return redirect()->action('RoleController@show', ['id' => $id]);
    }
 
    public function destroy($id) {
 
    }
}
