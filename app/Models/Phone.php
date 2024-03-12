<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    public function personable()
    {
        return $this->morphTo();
    }

    public function getStatusStrAttribute()
    {
        switch ($this->active) {
            case 0:
                return 'Архівний';
            case 1:
                return 'Діючий';
            default:
                return 'Невизначений';
        }
    }

    public function getTypeStrAttribute()
    {
        switch ($this->phone_type) {
            case 0:
                return 'Мобільний';
            case 1:
                return 'Стаціонарний';
            default:
                return 'Невизначений';

        }
    }
}
