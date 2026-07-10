<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
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
