<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Trainig_center;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CourseController extends Controller
{
    public function edit(Course $course)
    {
        // Traemos todas las áreas y centros de formación para llenar los <select> del formulario
        $areas = Area::all();
        $trainigCenters = Trainig_center::all(); // Respetando la ortografía 'trainig' de tu proyecto

        // Retornamos la vista de edición enviando el curso actual y las listas para los select
        return view('course.edit', compact('course', 'areas', 'trainigCenters'));
    }

    public function update(Request $request, Course $course)
    {
        // Actualizamos los datos del curso omitiendo los campos de control de Laravel
        $course->update($request->except(['_token', '_method']));

        // Redireccionamos al listado de cursos con un mensaje de éxito
        return redirect()->route('course.index')->with('success', 'Curso actualizado correctamente.');
    }
    public function show(Course $course)
    {
        return view('course.show', compact('course'));
    }
    public function index()
    {
        $courses = Course::with('area', 'trainig_center')->get();

        return view('course.index', compact('courses'));
    }

    public function registro()
    {

        $areas = Area::all();
        $trainig_centers = Trainig_center::all();
        return view('course.registro', compact('areas', 'trainig_centers'));
    }

    public function dato(Request $request)
    {

        $course = new Course();

        $course->area_id = $request->input('area_id');
        $course->course_number = $request->input('course_number');
        $course->day = $request->input('day');
        $course->trainig_center_id = $request->input('training_center_id');
        $course->save();

        return redirect()->back()->with('success', 'Curso registrado exitosamente');
    }
}
