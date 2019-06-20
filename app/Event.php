<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'academic_id',
        'name',
        'annotation'
    ];
}
