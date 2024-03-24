@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Картка посади працівника {{ $positioncard->employee->fullname }}</h1>
        <div class="row">
            <div class="col">
                <a href="{{ URL::route('positioncards.internships.show', ['positioncard' => $positioncard]) }}"
                    class="btn btn-success">
                    Підвищення кваліфікації
                </a>
                <a href="{{ URL::route('positioncards.internships.show', ['positioncard' => $positioncard]) }}"
                    class="btn btn-success">
                    Атестації
                </a>

            </div>
        </div>
        <div class="row">

            <div class="col-6">
                <h2>Загальна інформація</h2>
                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Власник</label>
                    <div class="col-8">
                        <input id="lastname" name="lastname" type="text" class="form-control"
                            value="{{ $positioncard->employee->fullname }}" readonly="readonly">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Посада</label>
                    <div class="col-8">
                        <input id="lastname" name="lastname" type="text" class="form-control"
                            value="{{ $positioncard->position->title }}" readonly="readonly">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birthdate" class="col-4 col-form-label">Дата початку роботи</label>
                    <div class="col-8">
                        <input id="birthdate" name="birthdate" type="date" class="form-control"
                            value="{{ $positioncard->date_start->format('Y-m-d') }}" readonly="readonly">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Ставка</label>
                    <div class="col-8">
                        <input id="lastname" name="lastname" type="number" class="form-control"
                            value="{{ $positioncard->volume }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-4 col-form-label">Розряд</label>
                    <div class="col-8">
                        <input id="position_grade" name="position_grade" type="text" class="form-control"
                            value="{{ $positioncard->position_grade>0?$positioncard->position_grade:"-" }}" readonly="readonly">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h2>Атестація та категорія</h2>
                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Категорія</label>
                    <div class="col-8">
                        <input id="lastname" name="lastname" type="text" class="form-control"
                            value="{{ $positioncard->attestations()->latest()->first()->positionRank->title }}"
                            readonly="readonly">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lastname" class="col-4 col-form-label">Педагогічне звання</label>
                    <div class="col-8">
                        <input id="lastname" name="lastname" type="text" class="form-control"
                            value="{{ $positioncard->attestations()->latest()->first()->pedagogicalRank->title }}"
                            readonly="readonly">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birthdate" class="col-4 col-form-label">Дата встановлення</label>
                    <div class="col-8">
                        <input id="birthdate" name="birthdate" type="date" class="form-control"
                            value="{{ $positioncard->attestations()->latest()->first()->at_date->format('Y-m-d') }}"
                            readonly="readonly">
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2>Стажування</h2>
                <table id="tabemp" class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Організація та тема
                            </th>
                            <th>
                                Вид підвищення кваліфікації
                            </th>
                            <th>
                                Дата закінчення
                            </th>
                            <th>
                                Години
                            </th>
                            <th>
                                Кредити
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($positioncard->internships as $internship)
                            <tr>
                                <td>
                                    <div>
                                        {{ $internship->institution }}
                                    </div>
                                    <hr>
                                    <div>
                                        {{ $internship->thesis }}
                                    </div>
                                </td>
                                <td>
                                    {{ $internship->type->title }}
                                </td>
                                <td>
                                    {{ $internship->date_end->format('d.m.Y') }}
                                </td>
                                <td>
                                    {{ $internship->hours }}
                                </td>
                                <td>
                                    {{ $internship->hours / 30 }}
                                </td>
                                <td>
                                    <a href="{{ URL::route('internships.show', ['internship' => $internship]) }}"
                                        class="btn btn-success"><i class="bi bi-person-rolodex"></i> Перегляд</a>
                                    @if ($internship->status == 1)
                                        <a href="{{ URL::route('internships.edit', ['internship' => $internship]) }}"
                                            class="btn btn-danger"><i class="bi bi-person-rolodex"></i> Редагувати</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
