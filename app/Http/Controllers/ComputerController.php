<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Illuminate\Support\Facades\Storage; // Importante para manejar archivos

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return view('computer.index', compact('computers'));
    }

    public function create()
    {
        return view('computer.create');
    }

    public function store(Request $request)
    {
        // 1. Validar los datos y la imagen (opcional pero recomendado)
        $request->validate([
            'number' => 'required',
            'brand' => 'required',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // 2. Crear instancia del computador
        $computer = new Computer();
        $computer->number = $request->number;
        $computer->brand = $request->brand;

        // 3. Procesar y guardar la imagen si se envió una
        if ($request->hasFile('urlFoto')) {
            $file = $request->file('urlFoto');
            $nombreArchivo = "foto_" . time() . "." . $file->guessExtension();

            // Guarda en storage/app/public/images/
            $file->storeAs('public/images', $nombreArchivo);

            // Guarda la ruta relativa en la base de datos
            $computer->urlFoto = 'images/' . $nombreArchivo;
        }

        $computer->save();

        // 4. Redireccionar al index con mensaje de éxito (cambiamos el return $computer por una redirección)
        return redirect()->route('computer.index')->with('success', 'Computador creado correctamente.');
    }

    public function show(Computer $computer)
    {
        return view('computer.show', compact('computer'));
    }

    public function edit(Computer $computer)
    {
        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer)
    {
        // Validar datos
        $request->validate([
            'number' => 'required',
            'brand' => 'required',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Obtener todos los datos excepto el token, el método y la foto temporal
        $data = $request->except(['_token', '_method', 'urlFoto']);

        // Si el usuario subió una nueva foto
        if ($request->hasFile('urlFoto')) {
            // Eliminar la foto anterior si existe físicamente para no saturar el disco
            if ($computer->urlFoto && Storage::exists('public/' . $computer->urlFoto)) {
                Storage::delete('public/' . $computer->urlFoto);
            }

            // Guardar la nueva foto
            $file = $request->file('urlFoto');
            $nombreArchivo = "foto_" . time() . "." . $file->guessExtension();
            $file->storeAs('public/images', $nombreArchivo);

            // Asignar la nueva ruta a los datos a actualizar
            $data['urlFoto'] = 'images/' . $nombreArchivo;
        }

        // Actualizamos los datos del equipo
        $computer->update($data);

        return redirect()->route('computer.index')->with('success', 'Computador actualizado correctamente.');
    }

    public function destroy(Computer $computer)
    {
        // Opcional: Borrar la imagen de storage cuando se borre el computador
        if ($computer->urlFoto && Storage::exists('public/' . $computer->urlFoto)) {
            Storage::delete('public/' . $computer->urlFoto);
        }

        $computer->delete();

        return redirect()->route('computer.index')->with('success', 'Computador eliminado correctamente.');
    }
}
