<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Illuminate\Support\Facades\Storage;

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
            'number' => 'required',
            'brand' => 'required',
            'urlFoto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $computer = new Computer();
        $computer->number = $request->number;
        $computer->brand = $request->brand;

        if ($request->hasFile('urlFoto')) {
            $file = $request->file('urlFoto');
            $nombreArchivo = "foto_" . time() . "." . $file->guessExtension();

            $file->storeAs('public/images', $nombreArchivo);

            $computer->urlFoto = 'images/' . $nombreArchivo;
        }

        $computer->save();

        return response()->json([
            'success' => true,
            'message' => 'Computador creado correctamente.',
            'data' => $computer
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

        $data = $request->except(['_token', '_method', 'urlFoto']);

        if ($request->hasFile('urlFoto')) {
            if ($computer->urlFoto && Storage::exists('public/' . $computer->urlFoto)) {
                Storage::delete('public/' . $computer->urlFoto);
            }

            // Guardar la nueva foto
            $file = $request->file('urlFoto');
            $nombreArchivo = "foto_" . time() . "." . $file->guessExtension();
            $file->storeAs('public/images', $nombreArchivo);

            $data['urlFoto'] = 'images/' . $nombreArchivo;
        }

        $computer->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Computador actualizado correctamente.',
            'data' => $computer
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