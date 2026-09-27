<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher; // Asegúrate de usar la inicial en mayúscula por convención de Laravel
use App\Models\Area;
use App\Models\Trainig_Center;

class TeacherController extends Controller
{
    /**
     * Mostrar una lista de todos los profesores con sus relaciones.
     */
    public function index()
    {
        // Cargamos los profesores junto con su área y centro de formación relacionados
        $teachers = Teacher::with(['area', 'trainig_center'])->get();

        return response()->json([
            'success' => true,
            'data' => $teachers
        ], 200);
    }

    /**
     * Almacenar un nuevo profesor.
     */
    public function store(Request $request)
    {
        // Validamos los datos y que las llaves foráneas realmente existan en la BD
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'area_id' => 'required|exists:areas,id',
            'trainig_center_id' => 'required|exists:trainig_centers,id',
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->area_id = $request->area_id;
        $teacher->trainig_center_id = $request->trainig_center_id;
        $teacher->save();

        // Cargamos las relaciones para que el JSON devuelva los objetos completos del área y centro
        $teacher->load(['area', 'trainig_center']);

        return response()->json([
            'success' => true,
            'message' => 'Profesor creado correctamente.',
            'data' => $teacher
        ], 201); // 201 Created
    }

    /**
     * Mostrar los detalles de un profesor específico.
     */
    public function show(Teacher $teacher)
    {
        // Cargamos las relaciones antes de retornar
        $teacher->load(['area', 'trainig_center']);

        return response()->json([
            'success' => true,
            'data' => $teacher
        ], 200);
    }

    /**
     * Actualizar un profesor existente.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'area_id' => 'required|exists:areas,id',
            'trainig_center_id' => 'required|exists:trainig_centers,id',
        ]);

        // Actualizamos los campos necesarios
        $teacher->update($request->only(['name', 'email', 'area_id', 'trainig_center_id']));

        // Recargamos las relaciones para la respuesta
        $teacher->load(['area', 'trainig_center']);

        return response()->json([
            'success' => true,
            'message' => 'Profesor actualizado correctamente.',
            _('data') => $teacher
        ], 200);
    }

    /**
     * Eliminar un profesor.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return response()->json([
            'success' => true,
            'message' => 'Profesor eliminado correctamente.'
        ], 200);
    }
}
