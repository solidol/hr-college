@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Картка підвищення кваліфікації</h1>
        <div class="row">
            <div class="col">
                <a href="{{URL::route('positioncards.internships.show',['positioncard'=>$internship->positioncard])}}" class="btn btn-success">До всіх карток</a>
            </div>
        </div>
        <div class="row">
            <h2>Загальна інформація</h2>
            <div class="col-6">
                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Власник</label>
                    <div class="col-8">
                        <input id="lastname" name="lastname" type="text" class="form-control"
                            value="{{ $internship->positionCard->employee->fullname }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="positioncard" class="col-4 col-form-label">Посада</label>
                    <div class="col-8">
                        <input id="positioncard" name="positioncard" type="text" class="form-control"
                            value="{{ $internship->positionCard->position->title }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Тип підвищення</label>
                    <div class="col-8">
                        <input id="lastname" name="lastname" type="text" class="form-control"
                            value="{{ $internship->type->title }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="languages" class="col-4 col-form-label">Тема підвищення</label>
                    <div class="col-8">
                        <textarea id="languages" name="languages" cols="40" rows="3" class="form-control"
                            aria-describedby="languagesHelpBlock" readonly="readonly">{{ $internship->thesis }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="birthdate" class="col-4 col-form-label">Дата початку</label>
                    <div class="col-8">
                        <input id="birthdate" name="birthdate" type="date" class="form-control"
                            value="{{ $internship->date_start->format('Y-m-d') }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="birthdate" class="col-4 col-form-label">Дата закінчення</label>
                    <div class="col-8">
                        <input id="birthdate" name="birthdate" type="date" class="form-control"
                            value="{{ $internship->date_end->format('Y-m-d') }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Години</label>
                    <div class="col-8">
                        <input id="lastname" name="lastname" type="number" class="form-control"
                            value="{{ $internship->hours }}" readonly="readonly">
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="form-group row">
                    <label for="languages" class="col-4 col-form-label">Організація</label>
                    <div class="col-8">
                        <textarea id="languages" name="languages" cols="40" rows="3" class="form-control"
                            aria-describedby="languagesHelpBlock" readonly="readonly">{{ $internship->institution }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="languages" class="col-4 col-form-label">Структурний підрозділ</label>
                    <div class="col-8">
                        <textarea id="languages" name="languages" cols="40" rows="3" class="form-control"
                            aria-describedby="languagesHelpBlock" readonly="readonly">{{ $internship->department }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="languages" class="col-4 col-form-label">Коментар відділу кадрів</label>
                    <div class="col-8">
                        <textarea id="languages" name="languages" cols="40" rows="3" class="form-control"
                            aria-describedby="languagesHelpBlock" disabled="disabled">{{ $internship->message }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @include('internships.parts.documents')
            </div>
        </div>
    </div>
@endsection
