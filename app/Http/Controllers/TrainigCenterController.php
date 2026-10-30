<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainig_center;
use Cloudinary\Cloudinary;

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
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        // Obtener imagen
        $file = $request->file('imagen');

        // Configurar Cloudinary
        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => config('services.cloudinary.cloud_name'),
                'api_key' => config('services.cloudinary.api_key'),
                'api_secret' => config('services.cloudinary.api_secret'),
            ],
            'url' => [
                'secure' => true,
            ],
        ]);

        // Subir imagen a Cloudinary
        $resultado = $cloudinary->uploadApi()->upload(
            $file->getRealPath(),
            [
                'folder' => 'trainigCenter',
                'resource_type' => 'image',
            ]
        );

        // Crear centro 
        $trainigCenter = Trainig_center::create([
            'name' => $request->name,
            'location' => $request->location,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'Centro de formacion creado correctamente',
            'data' => $trainigCenter,
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
