<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'role_name'
    ];

    public function has_permissions(){
        return $this -> hasMany('App\Permission');
    }
}
