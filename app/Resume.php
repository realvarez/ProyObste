<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Academic_type;
use App\Hierarchy;
use App\Teacher_category;
use App\Investigation;
use App\Course;
use App\Position;
use App\Subject;


class Resume extends Model
{
    protected $fillable = [
        'academic_id',
        'academic_type_id',
        'hierarchy_id',
        'teacher_category_id',
        'name',
        'email',
        'phone',
        'addres',
        'birth_date',
        'hours',
        'area_competence'
    ];

    public function is_from_academic(){
        $this->belongsTo(Academic::class);
    }

    public function has_academic_type(){
        $this->belongsTo(Academic_type::class);
    }

    public function has_hierarchy(){
        $this->belongsTo(Hierarchy::class);
    }
    
    public function has_teacher_category(){
        $this->belongsTo(Teacher_category::class);
    }

    public function has_courses(){
        $this->hasMany(Course::class);
    }

    public function has_Positions(){
        $this->hasMany(Position::class);
    }
    public function has_Investigations(){
        $this->hasMany(Investigation::class);
    }

    public function has_subjects(){
        $this->hasMany(Subject::class);
    }
}