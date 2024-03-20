<?php
use App\Models\PositionCard;
use App\Http\Controllers\ExcelImportController;

Route::get('/imports/employee', [ExcelImportController::class, 'createEmployee'])->
    name('imports.create.employee');//->middleware('can:show,position');

Route::post('/imports/employee', [ExcelImportController::class, 'importEmployee'])->
name('imports.store.employee');//->middleware('can:show,position');
