<?php
use App\Models\User;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->
    name('users.index')->middleware('can:index,'.User::class);
Route::get('/users/{user}', [UserController::class, 'show'])->
    name('users.show')->middleware('can:show,user');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->
    name('users.edit')->middleware('can:edit,user');
Route::patch('/users/{user}', [UserController::class, 'update'])->
    name('users.update')->middleware('can:update,user');
Route::delete('/users/{user}/delete', [UserController::class, 'delete'])->
    name('users.delete')->middleware('can:delete,user');

Route::get('/users/create', [UserController::class, 'create'])->
    name('users.create')->middleware('can:create,'.User::class);

Route::post('/users', [UserController::class, 'store'])->
    name('users.store')->middleware('can:create,'.User::class);

Route::post('/users/{user}', [UserController::class, 'loginAs'])->
    name('users.loginas')->middleware('can:update,user');