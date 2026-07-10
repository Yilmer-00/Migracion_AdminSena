<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Course_Teacher;

class CourseTeacherController extends Controller
{
    public function show(Course_teacher $courseTeacher)
    {
        $courseTeacher->load(['course', 'teacher']);

        return view('course_teacher.show', compact('courseTeacher'));
    }
    public function index()
    {
        $courseTeachers = Course_Teacher::with(['course', 'teacher'])->get();

        return view('course_teacher.index', compact('courseTeachers'));
    }
    public function registro()
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('course_teacher.create', compact('courses', 'teachers'));
    }
    public function dato(Request $request)
    {
        $pivot = new Course_Teacher();
        $pivot->course_id = $request->input('curse_id');
        $pivot->teacher_id = $request->input('teacher_id');
        $pivot->save();

        return redirect()->back()->with('success', 'Relación curso-docente registrada exitosamente');
    }
}
