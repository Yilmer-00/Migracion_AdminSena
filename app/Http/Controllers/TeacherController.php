<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\Area;
use App\Models\Trainig_Center;

class TeacherController extends Controller
{
    public function edit(Teacher $teacher)
    {
        // Traemos las áreas y centros para llenar los select del formulario
        $areas = Area::all();
        $trainingCenters = Trainig_Center::all(); // Usamos tu modelo TrainigCenter

        // Retornamos la vista con el profesor y las colecciones correspondientes
        return view('teacher.edit', compact('teacher', 'areas', 'trainingCenters'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        // Actualizamos al profesor con los nuevos datos del formulario
        $teacher->update($request->all());

        // Redireccionamos al index con el mensaje de éxito
        return redirect()->route('teacher.index')->with('success', 'Profesor actualizado correctamente.');
    }
    public function show(Teacher $teacher)
    {
        $teacher->load(['area', 'trainig_center']);

        return view('teacher.show', compact('teacher'));
    }
    public function index()
    {
        // Cargamos los profesores junto con su área y centro de formación de un solo golpe
        $teachers = Teacher::with(['area', 'trainig_center'])->get();

        return view('teacher.index', compact('teachers'));
    }
    public function create()
    {
        $areas = Area::select('id', 'name')->orderBy('name', 'asc')->get();

        // Aquí la llamamos $training_centers (con la "i" correcta para que coincida con tu vista)
        $trainig_centers = Trainig_center::select('id', 'name')->orderBy('name', 'asc')->get();

        return view('teacher.create', compact('areas', 'trainig_centers'));
    }

    public function store(Request $request)
    {
        $teacher = new teacher();

        $teacher->name = $request->input('name');
        $teacher->email = $request->input('email');
        $teacher->area_id = $request->input('area_id');
        $teacher->trainig_center_id = $request->input('training_center_id');
        $teacher->save();

        return $teacher;
    }
}
