<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    /**
     * Mostrar una lista de todas las áreas.
     */
    public function index()
    {
        $areas = Area::all();

        return response()->json([
            'success' => true,
            'data' => $areas
        ], 200);
    }

    /**
     * Almacenar una nueva área creada.
     */
    public function store(Request $request)
    {
        // Validamos que el nombre sea obligatorio
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Creamos el área
        $area = Area::create($request->only('name'));

        return response()->json([
            'success' => true,
            'message' => 'Área creada correctamente.',
            'data' => $area
        ], 201); // 201 Created
    }

    /**
     * Mostrar los detalles de un área específica.
     */
    public function show(Area $area)
    {
        return response()->json([
            'success' => true,
            'data' => $area
        ], 200);
    }

    /**
     * Actualizar un área existente.
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Actualizamos los datos
        $area->update($request->only('name'));

        return response()->json([
            'success' => true,
            'message' => 'Área actualizada correctamente.',
            'data' => $area
        ], 200);
    }

    /**
     * Eliminar un área.
     */
    public function destroy(Area $area)
    {
        $area->delete();

        return response()->json([
            'success' => true,
            'message' => 'Área eliminada correctamente.'
        ], 200);
    }
}
