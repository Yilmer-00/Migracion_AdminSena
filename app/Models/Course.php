<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // 1. AGREGA ESTO: Esto le dice a Laravel qué columnas existen en tu tabla de la base de datos
    protected $fillable = [
        'course_number',
        'day',
        'area_id',
        'training_center_id', // O trainig_center_id si lo dejaste sin la 'n' en la migración
    ];

    // Relación Uno a Muchos (Inversa) -> Un curso pertenece a un Área
    public function trainig_center()
    {
        return $this->belongsTo(Trainig_center::class, 'trainig_center_id');
    }

    // Relación con el Área (por si también la estás llamando en el with)
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    // Relación Uno a Muchos -> Un curso tiene MUCHOS aprendices
    // OJO: Tenías belongsToMany, debe ser hasMany según tu diagrama relacional
    public function apprentices()
    {
        return $this->hasMany('App\Models\Apprentice', 'course_id');
    }

    // Relación Muchos a Muchos -> Un curso tiene muchos profesores (a través de course_teacher)
    // Este sí está excelente como belongsToMany
    public function teachers()
    {
        // Si tu columna pivot se llama curse_id con 'u', se lo especificamos aquí:
        return $this->belongsToMany('App\Models\Teacher', 'course_teacher', 'curse_id', 'teacher_id');
    }
}
