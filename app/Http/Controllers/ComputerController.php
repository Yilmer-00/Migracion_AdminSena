<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Illuminate\Support\Facades\Storage;
use Cloudinary\Cloudinary;

class ComputerController extends Controller
{

    public function index()
    {
        $computers = Computer::all();

        return response()->json([
            'success' => true,
            'data' => $computers
        ], 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
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
                'folder' => 'computers',
                'resource_type' => 'image',
            ]
        );

        $computer = Computer::create([
            'number' => $request->number,
            'brand' => $request->brand,
            'imagen_url' => $resultado['secure_url'],
            'imagen_public_id' => $resultado['public_id'],
        ]);

        return response()->json([
            'message' => 'Computador creado correctamente',
            'data' => $computer,
        ], 201);
    }



    public function show(Computer $computer)
    {
        return response()->json([
            'success' => true,
            'data' => $computer
        ], 200);
    }


    public function update(Request $request, Computer $computer)
    {
        $request->validate([
            'number' => 'required',
            'brand' => 'required',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $computer->number = $request->input('number');
        $computer->brand = $request->input('brand');

        if ($request->hasFile('urlFoto')) {
            if ($computer->urlFoto && Storage::exists('public/' . $computer->urlFoto)) {
                Storage::delete('public/' . $computer->urlFoto);
            }

            $file = $request->file('urlFoto');
            $nombreArchivo = 'foto_' . time() . '.' . $file->guessExtension();

            $file->storeAs('public/images', $nombreArchivo);
            $computer->urlFoto = 'images/' . $nombreArchivo;
        }

        $computer->save();

        return response()->json([
            'success' => true,
            'message' => 'Computador actualizado correctamente.',
            'data' => $computer,
        ], 200);
    }


    public function destroy(Computer $computer)
    {
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
