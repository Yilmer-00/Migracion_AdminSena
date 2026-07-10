<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainig_center;

class TrainigCenterController extends Controller
{
    public function show(Trainig_center $trainigCenter)
    {
        return view('trainig_center.show', compact('trainigCenter'));
    }
    public function index()
    {
        // Traemos todos los centros de formación
        $trainingCenters = Trainig_Center::all();
        return view('trainig-center.index', compact('trainingCenters'));
    }

    public function create()
    {
        return view('trainig_center.create');
    }
    public function store(Request $request)
    {
        $trainigCenter = new Trainig_center();
        $trainigCenter->name = $request->name;
        $trainigCenter->location = $request->location;
        $trainigCenter->save();

        return $trainigCenter;
    }
}
