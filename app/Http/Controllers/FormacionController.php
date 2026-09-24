<?php

namespace App\Http\Controllers;

use App\Models\Formacion;
use Illuminate\Http\Request;

class FormacionController extends Controller
{
    // Muestra las formaciones en la vista de ofertas
    public function index()
    {
        $formaciones = Formacion::with(['area', 'trainingCenter', 'courses.apprentices'])->get();

        $formaciones->each(function ($formacion) {
            $formacion->total_interesados = $formacion->courses->sum(fn($course) => $course->apprentices->where('estado', 'interesado')->count());
            $formacion->total_inscritos = $formacion->courses->sum(fn($course) => $course->apprentices->where('estado', 'inscrito')->count());
            $formacion->total_por_evaluar = $formacion->courses->sum(fn($course) => $course->apprentices->where('estado', 'por_evaluar')->count());
        });

        return view('admin.ofertas', compact('formaciones'));
    }

    // Almacena una nueva formación desde el modal o formulario
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo' => 'required|string|unique:formaciones,codigo',
            'descripcion' => 'nullable|string',
            'estado' => 'required|in:abierta,cerrada,proxima',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:trainig_centers,id',
        ]);

        Formacion::create($request->all());

        return redirect()->back()->with('success', '¡Oferta de formación registrada con éxito!');
    }
    public function evaluarAspirantes($id)
    {
        // Buscamos la formación junto con sus cursos y los aprendices con estado 'por_evaluar'
        $formacion = Formacion::with(['courses.apprentices' => function ($query) {
            $query->where('estado', 'por_evaluar');
        }, 'trainingCenter', 'area'])->findOrFail($id);

        return view('admin.evaluar-aspirantes', compact('formacion'));
    }
}
