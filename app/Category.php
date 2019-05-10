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
}
