<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    use HasFactory;

    protected $table = 'formaciones';

    protected $fillable = [
        'nombre',
        'codigo',
        'descripcion',
        'estado',
        'area_id',
        'training_center_id',
    ];

    // Una formación pertenece a un Área
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    // Una formación pertenece a un Centro de Formación
    public function trainingCenter()
    {
        return $this->belongsTo(Trainig_center::class, 'training_center_id');
    }

    // Una formación tiene muchos Cursos o Fichas
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function index()
    {
        // Cargamos la formación con sus relaciones de área, centro y sus cursos/fichas asociadas
        $formaciones = Formacion::with(['area', 'trainingCenter', 'courses'])->get();

        return view('admin.ofertas', compact('formaciones'));
    }
}
