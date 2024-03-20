<?php
use App\Models\PositionCard;
use App\Http\Controllers\PositionCardController;
use App\Http\Controllers\EmployeeController;
Route::get('/positioncards/{positioncard}', [PositionCardController::class, 'show'])->
    name('positioncards.show');//->middleware('can:show,position');
/*
Route::get('/employees/{employee}/positions', [EmployeeController::class, 'positions'])->
    name('employees.show.positions')->middleware('can:show,employee');

Route::get('/positions', [PositionCardController::class, 'index'])->
    name('positions.index')->middleware('can:index,'.PositionCard::class);

Route::get('/employees/{employee}/positions/create', [PositionCardController::class, 'create'])->
    name('positions.create')->middleware('can:createPositionCard,employee');



Route::post('/employees/{employee}/positions', [PositionCardController::class, 'store'])->
    name('positions.store');//->middleware('can:create,employee');

Route::get('/positions/{position}/edit', [PositionCardController::class, 'edit'])->
    name('positions.edit')->middleware('can:edit,position');

Route::patch('/positions/{position}', [PositionCardController::class, 'update'])->
    name('positions.update')->middleware('can:update,position');

Route::delete('/positions/{position}/delete', [PositionCardController::class, 'delete'])->
    name('positions.delete')->middleware('can:delete,position');
*/


    