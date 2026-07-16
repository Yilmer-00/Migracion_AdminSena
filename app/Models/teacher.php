<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    public function courses()
    {
        return $this->belongsTo(Trainig_center::class, 'trainig_center_id');
    }

    public function trainig_center()
    {
        return $this->belongsTo(Trainig_center::class, 'trainig_center_id');
    }
    protected $fillable = [
        'name',       // Ejemplo: nombre del profesor
        'email',      // Ejemplo: correo electrónico
        // 'document', // Agrega las columnas reales de tu tabla
        // 'specialty',
    ];
}
