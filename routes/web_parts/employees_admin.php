<?php
use App\Http\Controllers\EmployeeController;

Route::get('/admin/employees/', [EmployeeController::class, 'index'])->name('admin.employees.index');
Route::get('/admin/employees/create', [EmployeeController::class, 'create'])->name('admin.employees.create');
Route::get('/admin/employees/{employee}', [EmployeeController::class, 'show'])->name('admin.employees.show');
Route::post('/admin/employees/', [EmployeeController::class, 'store'])->name('admin.employees.store');
Route::get('/admin/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('admin.employees.edit');
Route::patch('/admin/employees/{employee}', [EmployeeController::class, 'update'])->name('admin.employees.update');
Route::delete('/admin/employees/{employee}/delete', [EmployeeController::class, 'delete'])->name('admin.employees.delete');

