<?php

namespace App\Http\Controllers;

use App\Models\PositionCard;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\InternshipType;

class PositionCardController extends Controller
{
    public function show(PositionCard $positioncard)
    {
        return view('positioncards.show', ['positioncard' => $positioncard]);
    }
    public function itnternships(PositionCard $positioncard)
    {
        return view('positioncards.internships', ['positioncard' => $positioncard]);
    }


}
