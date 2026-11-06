<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',          
        'model',          
        'imagen_url',
        'imagen_public_id',   
    ];
}
