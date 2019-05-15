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

    public function searchSons($category_id){
        return Category::where('superior_category_id', "=", $category_id)->where('state',1)->get();
    }

    public function getCategoriesForLevel(){
        $allCategoriesLevel_ = Category::where('category_level',"=", 1)->where('state',1)->get();
        foreach ($allCategoriesLevel_ as $categoryElement) {
            $categoryElement->sons = $this->searchSons($categoryElement->id);   
        }
        return $allCategoriesLevel_;
    }
}
