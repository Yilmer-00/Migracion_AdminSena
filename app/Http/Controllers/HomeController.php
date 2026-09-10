<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Apprentice;
use App\Models\Teacher;        // Modelo para Instructores
use App\Models\Course;
use App\Models\Computer;
use App\Models\Area;
use App\Models\Trainig_center; // Modelo para Centros (tal como aparece en tu carpeta)
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Anuncios para el carrusel
        $announcements = Announcement::where('is_active', true)
            ->orderBy('order', 'asc')
            ->get();

        // 2. Contadores para el dashboard
        $totalAprendices   = Apprentice::count();
        $totalInstructores = Teacher::count();


        $totalFichas  = Course::count();
        $totalEquipos = Computer::count();
        $totalAreas   = Area::count();
        $totalCentros = Trainig_center::count();

        return view('home.create', compact(
            'announcements',
            'totalAprendices',
            'totalInstructores',
            'totalFichas',
            'totalEquipos',
            'totalAreas',
            'totalCentros'
        ));
    }
}