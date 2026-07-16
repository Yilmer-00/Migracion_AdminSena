<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',          // Ejemplo: marca
        'model',          // Ejemplo: modelo
        'serial_number',   // Ejemplo: número de serie
        // 'status',      // Descomenta y agrega los campos reales que uses
    ];

}
