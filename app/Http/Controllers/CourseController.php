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
        // 1. Validar campos
        $request->validate([
            'course_number'     => 'required',
            'day'               => 'required',
            'area_id'           => 'required|exists:areas,id',
            'trainig_center_id' => 'required|exists:trainig_centers,id',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $data = $request->except(['_token', '_method', 'image']);

        // 2. Si se sube una nueva imagen, eliminar la anterior y guardar la nueva
        if ($request->hasFile('image')) {
            // Elimina la imagen previa si existe físicamente en el disco local storage
            if ($course->image && Storage::disk('public')->exists($course->image)) {
                Storage::disk('public')->delete($course->image);
            }

            // Guarda la nueva imagen
            $data['image'] = $request->file('image')->store('courses', 'public');
        }

        $course->update($data);

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
        // 1. Validar los datos de entrada, incluyendo la imagen
        $request->validate([
            'course_number'     => 'required',
            'day'               => 'required',
            'area_id'           => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:trainig_centers,id',
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $course = new Course();
        $course->area_id = $request->input('area_id');
        $course->course_number = $request->input('course_number');
        $course->day = $request->input('day');
        $course->trainig_center_id = $request->input('training_center_id');

        // 2. Procesar la imagen si fue cargada
        if ($request->hasFile('image')) {
            // Guarda el archivo en storage/app/public/courses y devuelve la ruta relativa
            $path = $request->file('image')->store('courses', 'public');
            $course->image = $path; // Guarda "courses/nombre_archivo.jpg" en BD
        }

        $course->save();

        return redirect()->route('course.index')->with('success', 'Curso registrado exitosamente.');
    }
    public function destroy(Course $course)
    {
        // 1. Eliminar la imagen del almacenamiento físico antes de borrar el registro
        if ($course->image && Storage::disk('public')->exists($course->image)) {
            Storage::disk('public')->delete($course->image);
        }

        // 2. Eliminar el registro de la base de datos
        $course->delete();

        return redirect()->route('course.index')->with('success', 'Curso eliminado correctamente.');
    }
}
