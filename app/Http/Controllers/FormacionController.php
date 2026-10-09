<?php

namespace App\Http\Controllers;

use App\Models\Formacion;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Trainig_center;
use App\Models\Apprentice; // Corregida la inicial en mayúscula

class FormacionController extends Controller
{
    /**
     * Muestra las formaciones con sus relaciones y contadores calculados.
     */
    public function index()
    {
        $formaciones = Formacion::with(['area', 'trainingCenter', 'courses.apprentices'])->get();

        $formaciones->each(function ($formacion) {
            $formacion->total_interesados = $formacion->courses->sum(fn($course) => $course->apprentices->where('estado', 'interesado')->count());
            $formacion->total_inscritos = $formacion->courses->sum(fn($course) => $course->apprentices->where('estado', 'inscrito')->count());
            $formacion->total_por_evaluar = $formacion->courses->sum(fn($course) => $course->apprentices->where('estado', 'por_evaluar')->count());
        });

        return response()->json([
            'success' => true,
            'data' => $formaciones
        ], 200);
    }

    /**
     * Almacena una nueva formación validando sus llaves foráneas.
     */
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

        $formacion = Formacion::create($request->all());

        // Cargamos las relaciones para que el JSON devuelva los datos completos
        $formacion->load(['area', 'trainingCenter']);

        return response()->json([
            'success' => true,
            'message' => '¡Oferta de formación registrada con éxito!',
            'data' => $formacion
        ], 201);
    }

    /**
     * Devuelve los datos necesarios para evaluar aspirantes de una formación específica.
     */
    public function evaluarAspirantes($id)
    {
        $formacion = Formacion::with(['courses.apprentices' => function ($query) {
            $query->where('estado', 'por_evaluar');
        }, 'trainingCenter', 'area'])->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $formacion
        ], 200);
    }

    /**
     * Endpoint auxiliar útil para que el frontend obtenga las áreas y centros 
     * al momento de crear o editar una formación (reemplaza a la vista create).
     */
    public function create()
    {
        $areas = Area::select('id', 'name')->get();
        $trainingCenters = Trainig_center::select('id', 'name')->get();

        return response()->json([
            'success' => true,
            'data' => [
                'areas' => $areas,
                'training_centers' => $trainingCenters
            ]
        ], 200);
    }

    /**
     * Aprueba a un aspirante cambiando su estado a inscrito.
     */
    public function aprobarAspirante($id)
    {
        $aspirante = Apprentice::findOrFail($id);
        $aspirante->update(['estado' => 'inscrito']);

        return response()->json([
            'success' => true,
            'message' => '¡Aspirante aprobado con éxito!',
            'data' => $aspirante
        ], 200);
    }

    /**
     * Rechaza a un aspirante cambiando su estado a rechazado.
     */
    public function rechazarAspirante($id)
    {
        $aspirante = Apprentice::findOrFail($id);
        $aspirante->update(['estado' => 'rechazado']);

        return response()->json([
            'success' => true,
            'message' => 'Aspirante rechazado correctamente.',
            'data' => $aspirante
        ], 200);
    }
}
