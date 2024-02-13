<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Request;

class Event extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function login()
    {
        Event::create([
            'user_id' => Auth::id(),
            'event' => 'login',
            'roles' => Auth::user()->roles,
            'ip_addr' => Request::ip(),
            'description' => "Авторизація у веб-інтерфейс.\n Користувач " . Auth::user()->userable->fullname . " IP:" . Request::ip(),
        ]);
    }

    public static function loginAs(int $id)
    {
        Event::create([
            'user_id' => Auth::id(),
            'event' => 'login',
            'roles' => Auth::user()->roles,
            'ip_addr' => Request::ip(),
            'description' => 'Користувач ' . Auth::user()->userable->fullname . ' авторизується як користувач ' . User::find($id)->userable->fullname . "\n IP:" . Request::ip(),
        ]);
    }
}
