<?php
use App\Models\Internship;
use App\Http\Controllers\AttestationController;
use App\Http\Controllers\PositionCardController;

Route::get('/attestations', [AttestationController::class, 'index'])->
    name('attestations.index')->middleware('can:index,' . Internship::class);

Route::get('/attestations/{attestation}', [AttestationController::class, 'show'])->
    name('attestations.show')->middleware('can:show,attestation');

Route::get('/attestations/{attestation}/edit', [AttestationController::class, 'edit'])->
    name('attestations.edit')->middleware('can:edit,attestation');

Route::patch('/attestations/{attestation}', [AttestationController::class, 'update'])->
    name('attestations.update')->middleware('can:update,attestation');

Route::delete('/attestations/{attestation}/delete', [AttestationController::class, 'delete'])->
    name('attestations.delete')->middleware('can:delete,attestation');

//=====================
Route::get('/positioncards/{positioncard}/attestations', [PositionCardController::class, 'attestations'])->
    name('positioncards.attestations.show')->middleware('can:showAttestations,positioncard');

Route::get('/positioncards/{positioncard}/attestations/create', [AttestationController::class, 'create'])->
    name('positioncards.attestations.create');//->middleware('can:createInternship,positioncard');

Route::post('/positioncards/{positioncard}/attestations', [AttestationController::class, 'store'])->
    name('positioncards.attestations.store');//->middleware('can:create,employee');

