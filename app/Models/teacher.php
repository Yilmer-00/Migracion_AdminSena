<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo('App\models\Area');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course');
    }

    public function trainig_center()
    {
        return $this->belongsTo('App\models\Trainig_center');
    }



}
