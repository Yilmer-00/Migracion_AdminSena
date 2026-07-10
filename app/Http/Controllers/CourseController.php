<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Trainig_center;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CourseController extends Controller
{
    public function show(Course $course)
    {
        return view('course.show', compact('course'));
    }
    public function index()
    {
        $courses = Course::with('area', 'training_center')->get();

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
