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

                            </th>
                            <th>
                                Табельний номер
                            </th>
                            <th>
                                ПІБ
                            </th>
                            <th>
                                Посада
                            </th>
                            <th>
                                Дата народження
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>
                                    @switch($employee->status)
                                        @case(0)
                                            <i class="bi bi-check-square text-success fs-3"></i>
                                        @break

                                        @case(1)
                                            <i class="bi bi-pencil-square text-success fs-3"></i>
                                        @break

                                        @case(2)
                                            <i class="bi bi-question-square text-danger fs-3"></i>
                                        @break

                                        @case(3)
                                            <i class="bi bi-x-square text-danger fs-3"></i>
                                        @break
                                    @endswitch
                                </td>
                                <td>
                                    {{ $employee->reg_number }}
                                </td>
                                <td>
                                    {{ $employee->fullname }}
                                </td>
                                <td>
                                    @if ($employee->positionCards()->first())
                                        {{ $employee->positionCards()->first()->position->title }}
                                    @endif
                                </td>
                                <td>
                                    {{ $employee->birthdate->format('d.m.Y') }}
                                </td>
                                <td>
                                    @if ($employee->reg_number != '00000')
                                        <a href="{{ URL::route('employees.show', ['employee' => $employee]) }}"
                                            class="btn btn-success"><i class="bi bi-eye fs-5"></i></a>
                                        <a href="{{ URL::route('employees.edit', ['employee' => $employee]) }}"
                                            class="btn btn-danger"><i class="bi bi-pen-fill fs-5"></i></a>
                                    @endif
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
                ordering: false,
                paging: false,
                buttons: [],
                lengthMenu: [50, 100, 500],
                language: languageUk,
            });
        });
    </script>
@endsection
