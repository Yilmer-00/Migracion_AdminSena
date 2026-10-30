<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainig_center;
use App\Models\Area;
use Cloudinary\Cloudinary;

class AreaController extends Controller
{
    // Mostrar todas las áreas
    public function index()
    {
        $areas = Area::all();

        return response()->json([
            'success' => true,
            'data' => $areas
        ], 200);
    }

    // Crear área (formulario o datos relacionados)
    public function create()
    {
        $areas = Area::select('id', 'name')
            ->orderBy('name', 'asc')
            ->get();

        $trainig_centers = Trainig_center::select('id', 'name')
            ->orderBy('name', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'data' => [
                'areas' => $areas,
                'trainig_centers' => $trainig_centers
            ]
        ], 200);
    }

    // Guardar una nueva área
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $file = $request->file('imagen');

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => ['secure' => true],
        ]);

        $resultado = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'area',
                'resource_type' => 'image',
            ]
        );

        $area = Area::create([
            'name' => $request->name,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'Area creada correctamente',
            'data' => $area,
        ], 201);
    }

    // Mostrar un área específica
    public function show(Area $area)
    {
        return response()->json([
            'success' => true,
            'data' => $area
        ], 200);
    }

    // Actualizar un área
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $area->update([
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Área actualizada correctamente.',
            'data' => $area
        ], 200);
    }

    // Eliminar un área
    public function destroy(Area $area)
    {
        $area->delete();

        return response()->json([
            'success' => true,
            'message' => 'Área eliminada correctamente.'
        ], 200);
    }
}
