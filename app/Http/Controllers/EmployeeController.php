<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Position;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all()->sortBy('fullname');
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
        $positions = Position::all();
        return view('employees.create', ['positions' => $positions]);
    }
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->reg_number = $request->reg_number ?? $employee->reg_number;
        $employee->firstname = $request->firstname ?? $employee->firstanme;
        $employee->secondname = $request->secondname ?? $employee->secondname;
        $employee->lastname = $request->lastname ?? $employee->lastname;
        $employee->birthdate = $request->birthdate ?? $employee->birthdate;
        $employee->gender = $request->gender ?? $employee->gender;
        $employee->citizenship = $request->citizenship ?? $employee->citizenship;
        $employee->languages = $request->languages ?? $employee->languages;
        $employee->description = $request->description ?? $employee->description;
        $employee->save();


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->userable_id = $employee->id;
        $user->userable_type = 'App\Models\Employee';
        $user->roles = 'employee';
        $user->status = 1;
        $user->save();


        return redirect()->route('employees.edit', ['employee' => $employee]);
    }
    public function update(Request $request, Employee $employee)
    {
        $employee->reg_number = $request->reg_number ?? $employee->reg_number;
        $employee->firstname = $request->firstname ?? $employee->firstanme;
        $employee->secondname = $request->secondname ?? $employee->secondname;
        $employee->lastname = $request->lastname ?? $employee->lastname;
        $employee->birthdate = $request->birthdate ?? $employee->birthdate;
        $employee->gender = $request->gender ?? $employee->gender;
        $employee->citizenship = $request->citizenship ?? $employee->citizenship;
        $employee->languages = $request->languages ?? $employee->languages;
        $employee->description = $request->description ?? $employee->description;
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
