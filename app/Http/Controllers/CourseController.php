<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Trainig_center;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Mostrar una lista de todos los cursos con sus relaciones.
     */
    public function index()
    {
        $courses = Course::with(['area', 'trainig_center'])->get();

        return response()->json([
            'success' => true,
            'data' => $courses
        ], 200);
    }

    /**
     * Endpoint auxiliar para proveer áreas y centros de formación al frontend.
     */
    public function options()
    {
        $areas = Area::select('id', 'name')->get();
        $trainigCenters = Trainig_center::select('id', 'name')->get();

        return response()->json([
            'success' => true,
            'data' => [
                'areas' => $areas,
                'trainig_centers' => $trainigCenters
            ]
        ], 200);
    }

    /**
     * Almacenar un nuevo curso (incluyendo subida de imagen).
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_number'      => 'required',
            'day'                => 'required',
            'area_id'            => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:trainig_centers,id',
            'image'              => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $course = new Course();
        $course->course_number = $request->input('course_number');
        $course->day = $request->input('day');
        $course->area_id = $request->input('area_id');
        $course->trainig_center_id = $request->input('training_center_id');
    }

    /**
     * Mostrar los detalles de un curso específico.
     */
    public function show(Course $course)
    {
        $course->load(['area', 'trainig_center']);

        return response()->json([
            'success' => true,
            'data' => $course
        ], 200);
    }

    /**
     * Actualizar un curso existente (reemplazando imagen si se envía una nueva).
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_number'      => 'required',
            'day'                => 'required',
            'area_id'            => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:trainig_centers,id',
        ]);
    }

    /**
     * Eliminar un curso y su respectiva imagen del almacenamiento.
     */
    public function destroy(Course $course)
    {
        // 1. Eliminar la imagen del almacenamiento físico antes de borrar el registro
        if ($course->image && Storage::exists('public/' . $course->image)) {
            Storage::delete('public/' . $course->image);
        }

        // 2. Eliminar el registro de la base de datos
        $course->delete();

        return response()->json([
            'success' => true,
            'message' => 'Curso eliminado correctamente.'
        ], 200);
    }
}
