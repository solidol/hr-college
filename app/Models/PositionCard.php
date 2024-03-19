<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionCard extends Model
{
    use HasFactory;

    public function position(){
        return $this->belongsTo(Position::class);
    }
    public function ranks(){
        return $this->hasMany(PositionRank::class,'position_rank_id');
    }
    public function attestations(){
        return $this->hasMany(Attestation::class);
    }
}
