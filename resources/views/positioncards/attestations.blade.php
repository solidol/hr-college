@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Атестації працівника {{ $positioncard->employee->fullname }}</h1>
        <div class="form-group row">
            <label for="lastname" class="col-4 col-form-label">Посада</label>
            <div class="col-8">
                <input id="lastname" name="lastname" type="text" class="form-control"
                    value="{{ $positioncard->position->title }}" readonly="readonly">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="tabemp" class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Дата проведення
                            </th>
                            <th>
                                Категорія
                            </th>
                            <th>
                                Педагогічне звання
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($positioncard->attestations as $attestation)
                            <tr>
                                <td>
                                    {{ $attestation->at_date->format('d.m.Y') }}
                                </td>
                                <td>
                                    {{ $attestation->positionRank->title }}
                                </td>
                                <td>
                                    {{ $attestation->pedagogicalRank->title }}
                                </td>
                                <td>
                                    <a href="{{ URL::route('attestations.show', ['attestation' => $attestation]) }}"
                                        class="btn btn-success"><i class="bi bi-person-rolodex"></i> Перегляд</a>

                                    <a href="{{ URL::route('attestations.edit', ['attestation' => $attestation]) }}"
                                        class="btn btn-danger"><i class="bi bi-person-rolodex"></i> Редагувати</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
