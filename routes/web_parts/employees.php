<?php
use App\Models\Employee;
use App\Http\Controllers\EmployeeController;

Route::get('/employees', [EmployeeController::class, 'index'])->
    name('employees.index')->middleware('can:index,'.Employee::class);
Route::get('/employees/create', [EmployeeController::class, 'create'])->
    name('employees.create')->middleware('can:create,'.Employee::class);
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->
    name('employees.show')->middleware('can:show,employee');
Route::post('/employees', [EmployeeController::class, 'store'])->
    name('employees.store')->middleware('can:create,'.Employee::class);
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->
    name('employees.edit')->middleware('can:edit,employee');
Route::patch('/employees/{employee}', [EmployeeController::class, 'update'])->
    name('employees.update')->middleware('can:update,employee');
Route::delete('/employees/{employee}/delete', [EmployeeController::class, 'delete'])->
    name('employees.delete')->middleware('can:delete,employee');



    