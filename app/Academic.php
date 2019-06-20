<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Resume;
use App\Event;

class Academic extends Model
{
    protected $fillable = [
        'name',
        'user_id'
    ];

    public function is_user(){
        $this->belongsTo(User::class);
    }
    
    public function has_resume(){
        $this->hasOne(Resume::class);
    }
    public function has_events(){
        $this->hasMany(Event::class);
    }
}
