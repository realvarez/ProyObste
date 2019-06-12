<?php

namespace App\Http\Controllers;
use App\File;
use App\Category;
use Spatie\Searchable\Search;
use Illuminate\Http\Request;
use \Spatie\Tags\Tag;

class SearchController extends Controller
{
    public function autocomplete(Request $request)

    {
        $data = Tag::select("name")->where("name","LIKE","%{$request->input('query')}%")->get();
        return response()->json($data);

    }
    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(File::class, 'file_name', 'file_real_name')
            ->registerModel(Category::class, 'category_name')
            ->perform($request->input('query'));

        return view('result', compact('searchResults'));
    }
}
