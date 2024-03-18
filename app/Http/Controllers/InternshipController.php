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
        $ittp = InternshipType::all();
        return view('internships.edit', ['internship' => $internship, 'internshipTypes' => $ittp]);
    }
    public function create(Employee $employee)
    {
        $ittp = InternshipType::all();
        return view('internships.create', ['internshipTypes' => $ittp, 'employee' => $employee]);
    }
    public function store(Request $request, Employee $employee)
    {
        $internship = new Internship();
        $internship->thesis = $request->thesis;
        $internship->institution = $request->institution;
        $internship->department = $request->department;
        $internship->date_start = $request->date_start;
        $internship->date_end = $request->date_end;
        $internship->hours = $request->hours;
        $internship->thesis = $request->thesis;
        $internship->status = 1;
        $internship->description = $request->description;
        $internship->employee_id = $employee->id;
        $internship->internship_type_id = $request->internship_type;
        $internship->save();
        return redirect()->route('internships.edit', ['internship' => $internship]);
    }
    public function update(Request $request, Internship $internship)
    {

        return redirect()->route('internships.edit', ['internship' => $internship]);
    }
}
