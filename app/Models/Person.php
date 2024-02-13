<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
    public function addresses()
    {
        return $this->hasMany(Address::class);
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
    public function getFullnameEnAttribute()
    {
        $res = $this->lastname_en . " " . $this->firstname_en;
        if ($res == " ")
            return "Ім'я англійською не встановлене";
        return $res;
    }
}
