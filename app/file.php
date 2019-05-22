<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'file_name',
        'file_real_name',
        'file_path',
        'file_extension',
        'file_size',
        'file_year',
        'state',
        'storage_type',
        'elimination_date'
    ];

    public function updated_by(){
        return $this -> belongsTo('App\User');
    }

    public function category(){
        return $this -> belongsTo('App\Category');
    }
}
