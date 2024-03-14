<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;
    protected $casts = [
        'birthdate' => 'datetime:d.m.Y',
    ];
    public function internships()
    {
        return $this->hasMany(Internship::class);
    }
    public function cards()
    {
        return $this->hasMany(EmployeeCard::class);
    }
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
    public function addresses()
    {
        return $this->morphMany(Address::class, 'personable');
    }
    public function phones()
    {
        return $this->morphMany(Phone::class, 'personable');
    }

    public function getFullnameAttribute()
    {
        return $this->lastname . " " . $this->firstname . " " . $this->secondname;
    }
    public function getShortnameAttribute()
    {
        $shortname = $this->lastname . " " . mb_substr($this->firstname, 0, 1) . "." . mb_substr($this->secondname, 0, 1) . ".";
        return $shortname;
    }
    public function getGenderStrAttribute()
    {
        switch ($this->gender) {
            case 0:
                return 'Жіноча';
            case 1:
                return 'Чоловіча';
            default:
                return 'Невизначена';
        }
    }
}
