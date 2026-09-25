<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function edit(Apprentice $apprentice)
    {
        // Traemos los cursos y computadores para llenar los selects del formulario
        $courses = Course::all();
        $computers = Computer::all();

        return view('apprentice.edit', compact('apprentice', 'courses', 'computers'));
    }

    public function update(Request $request, $id)
    {
        // 1. Buscamos al aprendiz por su ID de manera manual para que no falle
        $apprentice = \App\Models\apprentice::findOrFail($id);

        // 2. Actualizamos los campos de manera explícita (método ultra confiable)
        $apprentice->update([
            'name'        => $request->name,
            'email'       => $request->email,
            'cell_number' => $request->cell_number, // ¡Ahora sí guardará el teléfono!
            'course_id'   => $request->course_id,
            'computer_id' => $request->computer_id,
        ]);

        // 3. Redireccionamos al listado con mensaje de éxito
        return redirect()->route('apprentice.index')->with('success', 'Aprendiz actualizado correctamente.');
    }
    public function show(Apprentice $apprentice)
    {
        $apprentice->load(['course', 'computer']);

        return view('apprentice.show', compact('apprentice'));
    }

    public function index()
    {
        $apprentices = Apprentice::with('course', 'computer')->get();

        return view('apprentice.index', compact('apprentices'));
    }

    public function registro()
    {

        $courses = Course::all();
        $computers = Computer::all();
        return view('apprentice.registro', compact('courses', 'computers'));
    }

    public function dato(Request $request)
    {
        $apprentice = new Apprentice();
        $apprentice->name = $request->input('name');
        $apprentice->email = $request->input('email');
        $apprentice->cell_number = $request->input('cell_number');
        $apprentice->course_id = $request->input('course_id');
        $apprentice->computer_id = $request->input('computer_id');
        $apprentice->save();

        return redirect()->back()->with('success', 'Aprendiz registrado con éxito.');
    }

    public function createPostulacion()
    {
        // Cargamos los cursos con su respectiva formación para mostrarlos en el select
        $courses = Course::with('formacion')->get();
        return view('aspirante.postular', compact('courses'));
    }

    // Guarda los datos del aspirante en la base de datos
    public function storePostulacion(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:apprentices,email',
            'course_id' => 'required|exists:courses,id',
        ]);

        Apprentice::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'cell_number' => 'N/A',
            'computer_id' => null, // <-- Añadido para evitar el error de campo obligatorio
            'course_id' => $request->course_id,
            'estado' => 'por_evaluar',
        ]);

        return redirect()->route('postulacion.create')->with('success', '¡Te has postulado con éxito! Tu solicitud ha quedado pendiente de evaluación.');
    }
}
