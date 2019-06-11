<?php

namespace App\Http\Controllers;
use Auth;
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
        Auth::user()->record_categories()->attach($id);
        $allCategories      = Category::all();
        $data['category']   = Category::find($id);
        $data['files']      = File::where('category_id', $id)->where('state',1)->get();
        return view('categories.show')->with($data)->with('allCategories',$allCategories);
    }

    public function create() {
        return view('categories.create');
    }

    public function store(Request $request) {
        $category = new Category($request->all());
        if($category->superior_category_id != 0){
            $category->category_level=2;
        }
        else{
            $category->category_level=1;

        }
        //por ahora solo categorias y no subcategorias :C
        $category->state=1;
        $path = $category->category_name;


        //se cae con esto
        //File::makeDirectory(public_path().'/'.$path, $mode = 0777, true, true);
/*
        $PermisssionView = new Permission;
        $PermissionAdmin = new Permission;
        $PermisssionView -> name = $request->name ."_view";
        $PermissionAdmin -> name = $request->name ."_admin";
        $PermisssionView -> save();
        $PermissionAdmin -> save();
*/
        $category->save();
        return redirect('/');

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

