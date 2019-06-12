<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Spatie\Tags\Tag;
class SearchController extends Controller
{
    public function autocomplete(Request $request)

    {
        $data = Tag::select("name")->where("name","LIKE","%{$request->input('query')}%")->get();
        return response()->json($data);

    }
}
