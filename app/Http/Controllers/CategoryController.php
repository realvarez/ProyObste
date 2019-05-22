<?php

namespace App\Http\Controllers;

use App\Category;
use App\Permission;
use App\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $Categories = Category::all();
        return $Categories;
    }

    public function show($id) {
        $data['category']   = Category::find($id);
        $data['files']      = File::where('category_id', $id)->where('state',1)->get();
        return view('categories.show',$data);
    }

    public function create() {
        return view('categories.create');
    }

    public function store(Request $request) {
        $category = new Category($request->all());
        //por ahora solo categorias y no subcategorias :C
        $category->category_level=1;
        $category->state=1;
        $path = $category->category_name;
        if ($category->category_level !=1){
            while($category->category_level != 1){
                $category = Category::find($category -> superior_category_id);
                $path = $category->category_name.'/'.$route;
            }
        }
        //se cae con esto 
        //File::makeDirectory(public_path().'/'.$path, $mode = 0777, true, true);

        $PermisssionView = new Permission;
        $PermissionAdmin = new Permission;
        $PermisssionView -> name = $request->name ."_view";
        $PermissionAdmin -> name = $request->name ."_admin";
        $PermisssionView -> save();
        $PermissionAdmin -> save();
        
        $category->save();
        
    }

    public function edit($id) {
        $Category= Category::find($id);
        return $Category;
    }

    public function update(Request $request, $id) {
        $Category= Category::find($id);
        $Category->update($request->all());
    }

    public function destroy($id) {
        $Category = Category::find($id);
        $Category->destroy();
    }
}
