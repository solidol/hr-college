<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;
    protected $casts = [
        'date_start' => 'datetime:d.m.Y',
        'date_end' => 'datetime:d.m.Y',
    ];
}
