<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }

    public function Training_center()
    {
        return $this->belongsToMany('App\Models\Training_center');
    }

    public function apprentices()
    {
        return $this->belongsToMany('App\Models\apprentice');
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Models\teacher');
    }
}

