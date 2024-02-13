@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4">
                Табельний номер
            </div>
            <div class="col-4">
                {{$employee->reg_number}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Прізвище, ім'я, по батькові
            </div>
            <div class="col-4">
                {{$employee->fullname}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Дата народження
            </div>
            <div class="col-4">
                {{$employee->birthdate}}
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Номер телефону
            </div>
            <div class="col-4">
                {{ $employee->phones[0] ? $employee->phones[0]->phone : '-' }}
            </div>
        </div>
    </div>
@endsection
