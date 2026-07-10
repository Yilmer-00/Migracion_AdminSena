<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course_teacher extends Model
{
    protected $table = 'course_teachers';


    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

   
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}