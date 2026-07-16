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
        // Actualizamos al profesor omitiendo los campos de control de Laravel
        $teacher->update($request->except(['_token', '_method']));

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
        // 1. (Opcional pero muy recomendado) Valida que los datos lleguen obligatoriamente
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'area_id' => 'required|exists:areas,id',
            'trainig_center_id' => 'required|exists:trainig_centers,id', // Valida que exista el ID del centro
        ]);

        // 2. Opción si creas el objeto manualmente:
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->area_id = $request->area_id;
        $teacher->trainig_center_id = $request->trainig_center_id; // <-- Asegúrate de que esta línea exista y esté bien escrita
        $teacher->save();

        return redirect()->route('teacher.index')->with('success', 'Profesor creado correctamente.');
    }
}
