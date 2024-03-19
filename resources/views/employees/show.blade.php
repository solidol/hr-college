@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Картка працівника</h1>
        <div class="row">
            <div class="col">
                <a href="{{ URL::route('employees.show.internships', ['employee' => $employee]) }}" class="btn btn-success">
                    Підвищення кваліфікації
                </a>
                <a href="{{ URL::route('employees.show.internships', ['employee' => $employee]) }}" class="btn btn-success">
                    Атестації
                </a>
                <a href="{{ URL::route('employees.show.internships', ['employee' => $employee]) }}" class="btn btn-success">
                    Документи про освіту
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h2>Загальна інформація</h2>
                <div class="form-group row">
                    <label for="reg_number" class="col-4 col-form-label">Табельний номер</label>
                    <div class="col-8">
                        <input id="reg_number" name="reg_number" type="text" class="form-control"
                            value="{{ $employee->reg_number }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Прізвище</label>
                    <div class="col-8">
                        <input id="lastname" name="lastname" type="text" class="form-control"
                            value="{{ $employee->lastname }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="firstname" class="col-4 col-form-label">Ім'я</label>
                    <div class="col-8">
                        <input id="firstname" name="firstname" type="text" class="form-control"
                            value="{{ $employee->firstname }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="secondname" class="col-4 col-form-label">По-батькові</label>
                    <div class="col-8">
                        <input id="secondname" name="secondname" type="text" class="form-control"
                            value="{{ $employee->secondname }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="birthdate" class="col-4 col-form-label">Дата народження</label>
                    <div class="col-8">
                        <input id="birthdate" name="birthdate" type="date" class="form-control"
                            value="{{ $employee->birthdate->format('Y-m-d') }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-4 col-form-label">Стать</label>
                    <div class="col-8">
                        <input id="gender" name="gender" type="text" class="form-control"
                            value="{{ $employee->gender_str }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-4 col-form-label">Стать</label>
                    <div class="col-8">
                        <input id="citizenship" name="citizenship" type="text" class="form-control"
                            value="{{ $employee->citizenship }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="languages" class="col-4 col-form-label">Знання іноземних мов</label>
                    <div class="col-8">
                        <textarea id="languages" name="languages" cols="40" rows="3" class="form-control"
                            aria-describedby="languagesHelpBlock" readonly="readonly">{{ $employee->languages }}</textarea>
                        <span id="languagesHelpBlock" class="form-text text-muted">Введіть через кому мови та рівень їх
                            знання</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="languages" class="col-4 col-form-label">Коментар відділу кадрів</label>
                    <div class="col-8">
                        <textarea id="languages" name="languages" cols="40" rows="3" class="form-control"
                            aria-describedby="languagesHelpBlock" disabled="disabled">{{ $employee->message }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-6">
                @include('employees.parts.phones')
                @include('employees.parts.addresses')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('employees.parts.positions')
            </div>
        </div>

    </div>
@endsection
