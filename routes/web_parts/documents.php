<?php
use App\Models\Internship;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionCardController;


Route::get('/employees/{employee}/documents', [EmployeeController::class, 'documents'])->
    name('employees.documents');//->middleware('can:showInternships,positioncard');


