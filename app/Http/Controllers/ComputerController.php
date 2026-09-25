<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Illuminate\Support\Facades\Storage;

class ComputerController extends Controller
{
    /**
     * Mostrar una lista de todos los computadores.
     */
    public function index()
    {
        $computers = Computer::all();

        return response()->json([
            'success' => true,
            'data' => $computers
        ], 200);
    }

    /**
     * Almacenar un nuevo computador (incluyendo la subida de imagen).
     */
    public function store(Request $request)
    {
        // 1. Validar los datos y la imagen
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

        // 4. Retornar respuesta JSON con el registro creado
        return response()->json([
            'success' => true,
            'message' => 'Computador creado correctamente.',
            'data' => $computer
        ], 201);
    }

    /**
     * Mostrar los detalles de un computador específico.
     */
    public function show(Computer $computer)
    {
        return response()->json([
            'success' => true,
            'data' => $computer
        ], 200);
    }

    /**
     * Actualizar un computador existente (incluyendo reemplazo o eliminación de imagen).
     */
    public function update(Request $request, Computer $computer)
    {
        // Validar datos
        $request->validate([
            'number' => 'required',
            'brand' => 'required',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Obtener datos excepto tokens o métodos de formulario
        $data = $request->except(['_token', '_method', 'urlFoto']);

        // Si el usuario subió una nueva foto
        if ($request->hasFile('urlFoto')) {
            // Eliminar la foto anterior si existe físicamente
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

        return response()->json([
            'success' => true,
            'message' => 'Computador actualizado correctamente.',
            'data' => $computer
        ], 200);
    }

    /**
     * Eliminar un computador y su respectiva foto del almacenamiento.
     */
    public function destroy(Computer $computer)
    {
        // Borrar la imagen de storage cuando se borre el computador
        if ($computer->urlFoto && Storage::exists('public/' . $computer->urlFoto)) {
            Storage::delete('public/' . $computer->urlFoto);
        }

        $computer->delete();

        return response()->json([
            'success' => true,
            'message' => 'Computador eliminado correctamente.'
        ], 200);
    }
}