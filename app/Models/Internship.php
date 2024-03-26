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

    public function type()
    {
        return $this->belongsTo(InternshipType::class, 'internship_type_id');
    }

    public function positionCard()
    {
        return $this->belongsTo(PositionCard::class, 'position_card_id');
    }

    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }
    public function employee()
    {
        //return $this->belongsTo(Employee::class);
    }

}
