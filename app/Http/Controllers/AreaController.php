<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Trainig_center;

class AreaController extends Controller
{
    public function edit(Area $area)
    {
        // Retornamos la vista de edición pasándole el área actual
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        // Actualizamos los datos del área
        $area->update($request->all());

        // Redireccionamos al listado index con el mensaje de éxito
        return redirect()->route('area.index')->with('success', 'Área actualizada correctamente.');
    }
    public function show(Area $area)
    {
        return view('area.show', compact('area'));
    }
    public function index()
    {
        $areas = Area::all(); // Trae todas las áreas de la base de datos
        return view('area.index', compact('areas'));
    }

    public function create()
    {
        // Traemos solo las columnas que el formulario necesita (id y name) para ahorrar memoria
        $areas = Area::select('id', 'name')->orderBy('name', 'asc')->get();

        // Traemos los centros de formación ordenados alfabéticamente
        $trainig_centers = Trainig_center::select('id', 'name')->orderBy('name', 'asc')->get();

        return view('area.create');
    }

    public function store(Request $request)
    {
        // Es buena práctica validar que el nombre sea obligatorio
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $area = new Area();
        $area->name = $request->input('name');
        $area->save();

        // En lugar de retornar el objeto, redirigimos al index con un mensaje de éxito
        return redirect()->route('area.index')->with('success', 'Área creada correctamente.');
    }
}
