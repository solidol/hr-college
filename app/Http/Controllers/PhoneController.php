<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::all();
        return view('phones.index', ['phones' => $phones]);
    }
}
