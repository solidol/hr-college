@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Картки працівників</h1>
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

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($internships as $intenship)
                            <tr>
                                <td>
                                    {{ $employee->reg_number }}
                                </td>
                                <td>
                                    {{ $employee->fullname }}
                                </td>
                                <td>
                                    {{ $employee->birthdate->format('d.m.Y') }}
                                </td>
                                <td>
                                    <a href="{{ URL::route('employees.show', ['employee' => $employee]) }}"
                                        class="btn btn-success"><i class="bi bi-person-rolodex"></i> Перегляд</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="module">
        $(document).ready(function() {
            $('#tabemp').DataTable({
                buttons: [],
                lengthMenu: [50, 100, 500],
                language: languageUk,
            });
        });
    </script>
@endsection
