<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'name', 
        'email', 
        'password',
        'avatar_image_path',
        'status',
        'elimination_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function has_role(){
        return $this -> belongsTo(Role::class, 'role_id');
    }

    public function files_uploaded(){
        return $this -> hasMany('App\File');
    }

    public function category_order(){
        return $this -> hasMany('App\Category');
    }

    public function has_permission($permission_name){
        foreach ($this->has_role->has_permissions as $permission) {
            if($permission->name == $permission_name)
                return true;
        }
        return false;
    }
    
    public function has_permission_redirect($permission_name){
        foreach ($this->has_role->has_permissions as $permission) {
            if($permission->name == $permission_name)
                return true;
        }
        return \redirect('HomeController@index');
    }
}
