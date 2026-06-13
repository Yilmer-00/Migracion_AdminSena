<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainig_center;

class TrainigCenterController extends Controller
{
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
