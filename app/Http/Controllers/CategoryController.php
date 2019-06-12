<?php

namespace App\Http\Controllers;
use Auth;
use App\Category;
use App\User;
use App\Permission;
use App\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $fav_categories = Auth::user()->favorite_categories;
        $Categories = Category::all();
        foreach ($Categories as $categorie) {
            if($fav_categories->contains($categorie)){
                $categorie->favorite = true;
            }
        }
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

        $PermisssionView = new Permission(['name'=>'ver_'.$request->category_name]);
        $PermissionAdmin = new Permission(['name'=>'administrar_'.$request->category_name]);
        $PermisssionView -> save();
        $PermissionAdmin -> save();
        $category->save();
        return redirect()->action('CategoryController@show', ['id' => $category->id]);;
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

    public function addToFavorite(Request $request){
        $usuario = User::find($request->id);
        $usuario->favorite_categories()->attach($request->cat);
        echo "ok";
    }

    public function removeFromFavorite(Request $request){
        $usuario = User::find($request->id);
        $usuario->favorite_categories()->detach($request->cat);
        echo "ok";
    }
}

