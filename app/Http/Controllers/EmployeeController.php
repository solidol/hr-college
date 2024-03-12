<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }
    public function show(Employee $employee)
    {
        return view('employees.show', ['employee' => $employee]);
    }
    public function edit(Employee $employee)
    {
        return view('employees.edit', ['employee' => $employee]);
    }
    public function create()
    {
        return view('employees.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $employee = Employee::create($data);
        return redirect()->route('employees.edit', ['employee' => $employee]);
    }
    public function update(Request $request, Employee $employee)
    {
        $employee->reg_number = $request->reg_number??$employee->reg_number;
        $employee->firstname = $request->firstname??$employee->firstanme;
        $employee->secondname = $request->secondname??$employee->secondname;
        $employee->lastname = $request->lastname??$employee->lastname;
        $employee->birthdate = $request->birthdate??$employee->birthdate;
        $employee->gender = $request->gender??$employee->gender;
        $employee->citizenship = $request->citizenship??$employee->citizenship;
        $employee->languages = $request->languages??$employee->languages;
        $employee->description = $request->description??$employee->description;
        $employee->save();
        return redirect()->route('employees.edit', ['employee' => $employee]);
    }
    public function inactivate(Employee $employee)
    {
        $employee->status = 0;
        $employee->save();
        return redirect()->route('employees.edit', ['employee' => $employee]);
    }

    public function destroy(Employee $employee)
    {
        // TODO видаляти каскадно пов'язані записи
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
