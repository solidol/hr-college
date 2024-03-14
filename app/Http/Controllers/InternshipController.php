<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\InternshipType;
use App\Models\Employee;

class InternshipController extends Controller
{
    public function index(Employee $employee)
    {
        return view('internships.index', ['employee' => $employee]);
    }
    public function show(Internship $internship)
    {
        return view('internships.show', ['internship' => $internship]);
    }
    public function edit(Internship $internship)
    {
        return view('internships.edit', ['internship' => $internship]);
    }
    public function create()
    {
        $ittp = InternshipType::all();
        return view('internships.create', ['itTypes' => $ittp]);
    }
    public function store(Request $request)
    {
        $internship = new Internship();

        return redirect()->route('internships.edit', ['internship' => $internship]);
    }
    public function update(Request $request, Internship $internship)
    {
      
        return redirect()->route('internships.edit', ['internship' => $internship]);
    }
}
