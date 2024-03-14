<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use stdClass;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static $avRoles = [
        'employee' => 'Співробітник',
        'admin' => 'Адміністратор',
        'humanres' => 'Відділ кадрів',
        'boss' => 'Дирекція',

        'student' => 'Студент',
    ];
    public function userable()
    {
        return $this->morphTo();
    }

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function isHR()
    {
        return $this->hasRole('hr');
    }

    public function isBoss()
    {
        return $this->hasRole('boss');
    }

    public function isEmployee()
    {
        return $this->hasRole('employee');
    }

    public function hasRole($role = false)
    {
        if (!$role) return false;
        $roles = explode(',', $this->roles);
        if (in_array($role, $roles)) return true;
        else return false;
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function lastLogin()
    {
        if ($this->logins) {
            return $this->logins->last();
        } else {
            return false;
        }
    }
    public function getRolesArAttribute()
    {
        return explode(',', $this->roles);
    }

    public function getRolesArStrAttribute()
    {
        $result = [];
        foreach ($this->roles_ar as $rItem) {
            $result[] = static::$avRoles[$rItem];
        }
        return $result;
    }
}
