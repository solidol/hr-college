<?php
use App\Models\PositionCard;
use App\Http\Controllers\PositionCardController;
use App\Http\Controllers\EmployeeController;

Route::get('/employees/{employee}/positions', [EmployeeController::class, 'positions'])->
    name('employees.show.positions')->middleware('can:show,employee');

Route::get('/positions', [PositionCardController::class, 'index'])->
    name('positions.index')->middleware('can:index,'.PositionCard::class);

Route::get('/employees/{employee}/positions/create', [PositionCardController::class, 'create'])->
    name('positions.create')->middleware('can:createPositionCard,employee');

Route::get('/positions/{internship}', [PositionCardController::class, 'show'])->
    name('positions.show')->middleware('can:show,internship');

Route::post('/employees/{employee}/positions', [PositionCardController::class, 'store'])->
    name('positions.store');//->middleware('can:create,employee');

Route::get('/positions/{internship}/edit', [PositionCardController::class, 'edit'])->
    name('positions.edit')->middleware('can:edit,internship');

Route::patch('/positions/{internship}', [PositionCardController::class, 'update'])->
    name('positions.update')->middleware('can:update,internship');

Route::delete('/positions/{internship}/delete', [PositionCardController::class, 'delete'])->
    name('positions.delete')->middleware('can:delete,internship');



    