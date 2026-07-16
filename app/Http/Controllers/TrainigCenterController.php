<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainig_center;

class TrainigCenterController extends Controller
{
    public function edit($id)
    {
        // Buscamos el centro de formación por su ID
        $trainigCenter = Trainig_Center::findOrFail($id);

        // Retornamos la vista pasando el objeto del centro de formación
        return view('trainig_center.edit', compact('trainigCenter'));
    }

    public function update(Request $request, $id)
    {
        $trainigCenter = Trainig_center::findOrFail($id);

        $trainigCenter->update($request->except(['_token', '_method']));

        return redirect()->route('trainig-center.index')->with('success', 'Centro de formación actualizado correctamente.');
    }
    public function show(Trainig_Center $trainigCenter)
    {
        return view('trainig_center.show', compact('trainigCenter'));
    }
    public function index()
    {
        $trainigCenters = Trainig_Center::all();

        return view('trainig_center.index', compact('trainigCenters'));
    }

    public function create()
    {
        return view('trainig_center.create');
    }
    public function store(Request $request)
    {
        $trainigCenter = new Trainig_center();
        $trainigCenter->name = $request->name;
        $trainigCenter->location = $request->location;
        $trainigCenter->save();

        return $trainigCenter;
    }
}
