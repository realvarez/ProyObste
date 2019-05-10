<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles_permission extends Model
{
    protected $fillable = [
        'role_id',
        'permission_id',
        'value'
    ];

    public function has_permissions(){
        return $this -> hasMany('App\Permission');
    }
}
