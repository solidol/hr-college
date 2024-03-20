<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionCard extends Model
{
    use HasFactory;
    protected $casts = [
        'date_start' => 'datetime:d.m.Y',
    ];
    protected $guarded = [];
    public function employee()
    {
        return $this->belongsto(Employee::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function attestations()
    {
        return $this->hasMany(Attestation::class);
    }
    public function internships()
    {
        return $this->hasMany(Internship::class)->orderBy('date_end', 'DESC');
    }
}
