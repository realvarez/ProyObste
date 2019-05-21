<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'category_level',
        'superior_category_id',
        'state',
        'elimination_date'
    ];

    public function recursiveGet($category_id = false){
        if(!$category_id){
            $categories = Category::where('category_level',"=", 1)->where('state',1)->get();
            foreach($categories as $category){
                $_category      = $this->recursiveGet($category->id);
                if($_category->isNotEmpty()) 
                    $category->sons = $_category;
            }
        }
        else{
            $categories = Category::where('superior_category_id', "=", $category_id)->where('state',1)->get();
            foreach($categories as $category){
                $category->sons = $this->recursiveGet($category->id);
            }
        }
        return $categories;
    }
}
