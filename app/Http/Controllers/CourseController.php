<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Trainig_center;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::with(['area', 'trainig_center'])->get();

        return response()->json([
            'success' => true,
            'data' => $courses
        ], 200);
    }


    public function options()
    {
        $areas = Area::select('id', 'name')->get();
        $trainigCenters = Trainig_center::select('id', 'name')->get();

        return response()->json([
            'success' => true,
            'data' => [
                'areas' => $areas,
                'trainig_centers' => $trainigCenters
            ]
        ], 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'course_number'      => 'required',
            'day'                => 'required',
            'area_id'            => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:trainig_centers,id',
            'image'              => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        $course = new Course();
        $course->course_number = $request->input('course_number');
        $course->day = $request->input('day');
        $course->area_id = $request->input('area_id');
        $course->trainig_center_id = $request->input('training_center_id');
    }


    public function show(Course $course)
    {
        $course->load(['area', 'trainig_center']);

        return response()->json([
            'success' => true,
            'data' => $course
        ], 200);
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'course_number'      => 'required',
            'day'                => 'required',
            'area_id'            => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:trainig_centers,id',
        ]);
    }


    public function destroy(Course $course)
    {
        if ($course->image && Storage::exists('public/' . $course->image)) {
            Storage::delete('public/' . $course->image);
        }

        $course->delete();

        return response()->json([
            'success' => true,
            'message' => 'Curso eliminado correctamente.'
        ], 200);
    }
}
