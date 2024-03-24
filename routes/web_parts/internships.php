<?php
use App\Models\Internship;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionCardController;

Route::get('/internships', [InternshipController::class, 'index'])->
    name('internships.index')->middleware('can:index,' . Internship::class);

Route::get('/internships/{internship}', [InternshipController::class, 'show'])->
    name('internships.show')->middleware('can:show,internship');

Route::get('/internships/{internship}/edit', [InternshipController::class, 'edit'])->
    name('internships.edit')->middleware('can:edit,internship');

Route::patch('/internships/{internship}', [InternshipController::class, 'update'])->
    name('internships.update')->middleware('can:update,internship');

Route::delete('/internships/{internship}/delete', [InternshipController::class, 'delete'])->
    name('internships.delete')->middleware('can:delete,internship');

//=====================
Route::get('/positioncards/{positioncard}/internships', [PositionCardController::class, 'itnternships'])->
    name('positioncards.internships.show')->middleware('can:showInternships,positioncard');

Route::get('/positioncards/{positioncard}/internships/create', [InternshipController::class, 'create'])->
    name('positioncards.internships.create');//->middleware('can:createInternship,positioncard');

Route::post('/positioncards/{positioncard}/internships', [InternshipController::class, 'store'])->
    name('positioncards.internships.store');//->middleware('can:create,employee');

