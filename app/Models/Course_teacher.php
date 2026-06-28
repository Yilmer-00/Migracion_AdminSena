<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_teacher extends model
{
    use HasFactory;

    // Le aclaramos a Laravel el nombre exacto de la tabla en MySQL
    protected $table = 'course_teacher';

    protected $fillable = [
        'curse_id',
        'teacher_id',
    ];
}