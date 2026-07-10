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

    public function update(Request $request, Apprentice $apprentice)
    {
        // Actualizamos el aprendiz con los datos limpios que vienen del formulario
        $apprentice->update($request->all());

        // Redireccionamos a la vista show que tanto nos gustó con un mensaje de éxito
        return redirect()->route('apprentice.show', $apprentice)->with('success', 'Aprendiz actualizado correctamente.');
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
}
