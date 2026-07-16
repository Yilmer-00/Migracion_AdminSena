<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course_teacher extends Model
{
    public function show($id)
    {
        // Buscamos la asignación cargando de inmediato sus relaciones 'course' y 'teacher'
        $courseTeacher = Course_teacher::with(['course', 'teacher'])->findOrFail($id);

        // Retornamos la vista pasando el objeto
        return view('course_teacher.show', compact('courseTeacher'));
    }
    protected $table = 'course_teachers';


    // Definimos los campos que se pueden llenar de forma masiva
    protected $fillable = [
        'course_id',   // ID del curso asignado
        'teacher_id',  // ID del instructor/profesor asignado
    ];


    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }


    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
