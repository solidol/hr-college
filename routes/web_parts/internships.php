<?php
use App\Models\Internship;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\EmployeeController;

Route::get('/employees/{employee}/internships', [EmployeeController::class, 'itnternships'])->
    name('employees.show.internships')->middleware('can:show,employee');


Route::get('/internships', [InternshipController::class, 'index'])->
    name('internships.index')->middleware('can:index,'.Internship::class);
Route::get('/internships/create', [InternshipController::class, 'create'])->
    name('internships.create')->middleware('can:create,'.Internship::class);
Route::get('/internships/{internship}', [InternshipController::class, 'show'])->
    name('internships.show')->middleware('can:show,internship');
Route::post('/internships', [InternshipController::class, 'store'])->
    name('internships.store')->middleware('can:create,'.Internship::class);
Route::get('/internships/{internship}/edit', [InternshipController::class, 'edit'])->
    name('internships.edit')->middleware('can:edit,internship');
Route::patch('/internships/{internship}', [InternshipController::class, 'update'])->
    name('internships.update')->middleware('can:update,internship');
Route::delete('/internships/{internship}/delete', [InternshipController::class, 'delete'])->
    name('internships.delete')->middleware('can:delete,internship');



    