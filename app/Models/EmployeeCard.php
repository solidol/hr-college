<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeCard extends Model
{
    use HasFactory;

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function getTypeStrAttribute()
    {
        switch ($this->position_type) {
            case 1:
                return 'Основна';
            case 2:
                return 'Сумісництво';
            case 3:
                return 'Зовн. сумісництво';
            default:
                return 'Невизначений';

        }
    }
}
