<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'area_id',
        'trainig_center_id',
    ];

    // Relación con el área de especialidad
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }

    // Relación con el centro de formación
    public function trainig_center()
    {
        return $this->belongsTo(
            Trainig_Center::class,
            'trainig_center_id'
        );
    }
}
