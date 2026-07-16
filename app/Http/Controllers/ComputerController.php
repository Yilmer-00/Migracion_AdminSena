<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function edit(Computer $computer)
    {
        // Retornamos la vista de edición pasándole el computador actual
        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer)
    {
        // Actualizamos los datos del equipo omitiendo los campos de control
        $computer->update($request->except(['_token', '_method']));

        // Redireccionamos al listado index con el mensaje de éxito
        return redirect()->route('computer.index')->with('success', 'Computador actualizado correctamente.');
    }
    public function show(Computer $computer)
    {
        return view('computer.show', compact('computer'));
    }
    public function index()
    {
        $computers = Computer::all(); // O el nombre exacto de tu Modelo si cambia
        return view('computer.index', compact('computers'));
    }

    public function create()
    {
        return view('computer.create');
    }
    public function store(Request $request)
    {
        $computer = new Computer();
        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        return $computer;
    }
}
