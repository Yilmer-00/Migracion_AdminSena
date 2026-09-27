<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Course_Teacher;

class CourseTeacherController extends Controller
{
    /**
     * Mostrar todas las asignaciones entre cursos y profesores con sus relaciones.
     */
    public function index()
    {
        $courseTeachers = Course_Teacher::with(['course', 'teacher'])->get();

        return response()->json([
            'success' => true,
            'data' => $courseTeachers
        ], 200);
    }

    /**
     * Endpoint auxiliar para proveer los listados de cursos y profesores al frontend (reemplaza a registro/edit).
     */
    public function options()
    {
        $courses = Course::select('id', 'course_number')->get();
        $teachers = Teacher::select('id', 'name')->get();

        return response()->json([
            'success' => true,
            'data' => [
                'courses' => $courses,
                'teachers' => $teachers
            ]
        ], 200);
    }

    /**
     * Registrar una nueva relación curso-docente (reemplaza a dato).
     */
    public function store(Request $request)
    {
        // Validamos que existan las llaves foráneas en sus respectivas tablas
        $request->validate([
            'course_id'  => 'required|exists:courses,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $pivot = new Course_Teacher();
        $pivot->course_id = $request->input('course_id');
        $pivot->teacher_id = $request->input('teacher_id');
        $pivot->save();

        // Cargamos las relaciones para retornar la información completa
        $pivot->load(['course', 'teacher']);

        return response()->json([
            'success' => true,
            'message' => 'Relación curso-docente registrada exitosamente.',
            'data' => $pivot
        ], 201);
    }

    /**
     * Mostrar los detalles de una asignación específica.
     */
    public function show(Course_Teacher $courseTeacher)
    {
        $courseTeacher->load(['course', 'teacher']);

        return response()->json([
            'success' => true,
            'data' => $courseTeacher
        ], 200);
    }

    /**
     * Actualizar una asignación existente.
     */
    public function update(Request $request, Course_Teacher $courseTeacher)
    {
        $request->validate([
            'course_id'  => 'required|exists:courses,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $courseTeacher->update($request->only(['course_id', 'teacher_id']));
        $courseTeacher->load(['course', 'teacher']);

        return response()->json([
            'success' => true,
            'message' => 'Asignación actualizada correctamente.',
            'data' => $courseTeacher
        ], 200);
    }

    /**
     * Eliminar una asignación.
     */
    public function destroy(Course_Teacher $courseTeacher)
    {
        $courseTeacher->delete();

        return response()->json([
            'success' => true,
            'message' => 'Asignación eliminada correctamente.'
        ], 200);
    }
}
