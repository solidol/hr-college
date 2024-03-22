<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attestation extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'at_date' => 'datetime:d.m.Y',
    ];
    public function positionRank(){
        return $this->belongsTo(PositionRank::class);
    }
    public function pedagogicalRank(){
        return $this->belongsTo(PedagogicalRank::class);
    }
}
