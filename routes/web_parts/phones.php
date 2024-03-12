<?php
use App\Models\Phone;
use App\Http\Controllers\PhoneController;

Route::get('/phones', [phoneController::class, 'index'])->
    name('phones.index')->middleware('can:index,'.phone::class);
Route::get('/phones/create', [phoneController::class, 'create'])->
    name('phones.create')->middleware('can:create,'.phone::class);
Route::get('/phones/{phone}', [phoneController::class, 'show'])->
    name('phones.show')->middleware('can:show,phone');
Route::post('/phones', [phoneController::class, 'store'])->
    name('phones.store')->middleware('can:create,'.phone::class);
Route::get('/phones/{phone}/edit', [phoneController::class, 'edit'])->
    name('phones.edit')->middleware('can:edit,phone');
Route::patch('/phones/{phone}', [phoneController::class, 'update'])->
    name('phones.update')->middleware('can:update,phone');
Route::delete('/phones/{phone}/delete', [phoneController::class, 'delete'])->
    name('phones.delete')->middleware('can:delete,phone');

