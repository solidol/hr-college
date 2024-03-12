<?php
use App\Models\Phone;
use App\Http\Controllers\PhoneController;

Route::get('/phones', [PhoneController::class, 'index'])->
    name('phones.index')->middleware('can:index,'.Phone::class);
Route::get('/phones/create', [PhoneController::class, 'create'])->
    name('phones.create')->middleware('can:create,'.Phone::class);
Route::get('/phones/{phone}', [PhoneController::class, 'show'])->
    name('phones.show')->middleware('can:show,phone');
Route::post('/phones', [PhoneController::class, 'store'])->
    name('phones.store')->middleware('can:create,'.Phone::class);
Route::get('/phones/{phone}/edit', [PhoneController::class, 'edit'])->
    name('phones.edit')->middleware('can:edit,phone');
Route::patch('/phones/{phone}', [PhoneController::class, 'update'])->
    name('phones.update')->middleware('can:update,phone');
Route::delete('/phones/{phone}/delete', [PhoneController::class, 'delete'])->
    name('phones.delete')->middleware('can:delete,phone');

