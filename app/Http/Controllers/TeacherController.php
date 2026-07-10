<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\Area;
use App\Models\Trainig_Center;

class TeacherController extends Controller
{
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
        $areas = Area::all();
        $centers = Trainig_Center::all();
        return view('teacher.create', compact('areas', 'centers'));
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
