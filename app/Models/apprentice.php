<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    protected $fillable = [
        'name',
        'email',
        'cell_number',
        'course_id',
        'computer_id'
    ];

    // Asegúrate de que la de computadora también sea belongsTo si un aprendiz tiene un solo PC
    public function computer()
    {
        return $this->belongsTo(Computer::class, 'computer_id');
    }
}
