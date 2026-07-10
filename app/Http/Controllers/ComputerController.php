<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
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
