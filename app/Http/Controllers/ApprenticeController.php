<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
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
