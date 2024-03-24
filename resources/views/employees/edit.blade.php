@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Картка працівника</h1>
        <div class="row">
            <div class="col">
                <a href="{{URL::route('positioncards.index')}}" class="btn btn-success">До всіх карток</a>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h2>Загальна інформація</h2>
                <form action="{{ URL::route('employees.update', ['employee' => $employee]) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group row">
                        <label for="reg_number" class="col-4 col-form-label">Табельний номер</label>
                        <div class="col-8">
                            <input id="reg_number" name="reg_number" type="text" class="form-control"
                                value="{{ $employee->reg_number }}" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-4 col-form-label">Прізвище</label>
                        <div class="col-8">
                            <input id="lastname" name="lastname" type="text" class="form-control"
                                value="{{ $employee->lastname }}" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstname" class="col-4 col-form-label">Ім'я</label>
                        <div class="col-8">
                            <input id="firstname" name="firstname" type="text" class="form-control"
                                value="{{ $employee->firstname }}" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="secondname" class="col-4 col-form-label">По-батькові</label>
                        <div class="col-8">
                            <input id="secondname" name="secondname" type="text" class="form-control"
                                value="{{ $employee->secondname }}" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthdate" class="col-4 col-form-label">Дата народження</label>
                        <div class="col-8">
                            <input id="birthdate" name="birthdate" type="date" class="form-control"
                                value="{{ $employee->birthdate->format('Y-m-d') }}" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-4 col-form-label">Стать</label>
                        <div class="col-8">
                            <select id="gender" name="gender" class="form-select">
                                <option value="1" {{ $employee->gender == 1 ? 'selected' : '' }}>Чоловіча</option>
                                <option value="0" {{ $employee->gender == 0 ? 'selected' : '' }}>Жіноча</option>
                                <option value="-1"
                                    {{ $employee->gender != 1 && $employee->gender != 0 ? 'selected' : '' }}>Немає даних
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="citizenship" class="col-4 col-form-label">Громадянство</label>
                        <div class="col-8">
                            <select id="citizenship" name="citizenship" class="form-select" required="required">
                                <option value="Україна">Україна</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="languages" class="col-4 col-form-label">Знання іноземних мов</label>
                        <div class="col-8">
                            <textarea id="languages" name="languages" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock" required="required">{{ $employee->languages }}</textarea>
                            <span id="languagesHelpBlock" class="form-text text-muted">Введіть через кому мови та рівень
                                їх
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
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Зберегти</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6">
                @include('employees.parts.phones')
                @include('employees.parts.addresses')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('employees.parts.cards')
            </div>
        </div>
    </div>
@endsection
