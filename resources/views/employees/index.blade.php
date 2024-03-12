@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="tabemp" class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Табельний номер
                            </th>
                            <th>
                                ПІБ
                            </th>
                            <th>
                                Дата народження
                            </th>
                            <th>
                                Телефон
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>
                                {{ $employee->reg_number }}
                            </td>
                            <td>
                                {{ $employee->fullname }}
                            </td>
                            <td>
                                {{ $employee->birthdate }}
                            </td>
                            <td>
                                {{ $employee->phones[0] ? $employee->phones[0]->phone : '-' }}
                            </td>
                            <td>
                                <a href="{{ URL::route('employees.show', ['employee' => $employee]) }}" class="btn btn-success"><i class="bi bi-person-rolodex"></i> Перегляд</a>
                            </td>
                        </tr>
                    @endforeach
            </div>
        </div>
    </div>
    <script type="module">
        $(document).ready(function(){
            $('#tabemp').DataTable();
        });
    </script>
@endsection
