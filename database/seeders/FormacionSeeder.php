<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formacion;
use App\Models\Area;
use App\Models\Trainig_Center;

class FormacionSeeder extends Seeder
{
    public function run(): void
    {
        // Buscamos un área y un centro de formación de ejemplo o creamos uno si es necesario
        $area = Area::first();
        $centro = Trainig_Center::first();

        $this->call([
            FormacionSeeder::class,
        ]);

        if ($area && $centro) {
            Formacion::create([
                'nombre' => 'Análisis y Desarrollo de Software (ADSO)',
                'codigo' => 'ADSO-2026',
                'descripcion' => 'Programa de formación enfocado en el desarrollo de software web y móvil.',
                'estado' => 'abierta',
                'area_id' => $area->id,
                'training_center_id' => $centro->id,
            ]);

            Formacion::create([
                'nombre' => 'Gestión de Redes de Datos',
                'codigo' => 'GRD-2026',
                'descripcion' => 'Programa enfocado en la administración y seguridad de redes.',
                'estado' => 'proxima',
                'area_id' => $area->id,
                'training_center_id' => $centro->id,
            ]);
        }
    }
}
