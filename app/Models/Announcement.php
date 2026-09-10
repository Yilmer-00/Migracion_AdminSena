<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'badge_text',
        'badge_class',
        'button_text',
        'button_url',
        'is_active',
        'order',
    ];
}