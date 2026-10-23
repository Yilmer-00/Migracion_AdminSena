<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainig_center;

class TrainigCenterController extends Controller
{
    
    
    public function index()
    {
        $trainigCenters = Trainig_center::all();

        return response()->json([
            'success' => true,
            'data' => $trainigCenters
        ], 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $trainigCenter = Trainig_center::create($request->only(['name', 'location']));

        return response()->json([
            'success' => true,
            'message' => 'Centro de formación creado correctamente.',
            'data' => $trainigCenter
        ], 201);
    }


    public function show(Trainig_center $trainigCenter)
    {
        return response()->json([
            'success' => true,
            'data' => $trainigCenter
        ], 200);
    }


    public function update(Request $request, Trainig_center $trainigCenter)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $trainigCenter->update($request->only(['name', 'location']));

        return response()->json([
            'success' => true,
            'message' => 'Centro de formación actualizado correctamente.',
            'data' => $trainigCenter
        ], 200);
    }


    public function destroy(Trainig_center $trainigCenter)
    {
        $trainigCenter->delete();

        return response()->json([
            'success' => true,
            'message' => 'Centro de formación eliminado correctamente.'
        ], 200);
    }
}
