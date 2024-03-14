@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Стажування працівника {{$employee->fullname}}</h1>
        <div class="row">
            <div class="col-md-12">
                <table id="tabemp" class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Організація
                            </th>
                            <th>
                                Тема
                            </th>
                            <th>
                                Дата закінчення
                            </th>
                            <th>
                                Години / кредити
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee->internships as $internship)
                            <tr>
                                <td>
                                    {{ $internship->institution }}
                                </td>
                                <td>
                                    {{ $internship->thesis }}
                                </td>
                                <td>
                                    {{ $internship->date_end->format('d.m.Y') }}
                                </td>
                                <td>
                                    {{ $internship->hours }} / {{ $internship->hours/30 }}
                                </td>
                                <td>
                                    <a href="{{ URL::route('internships.show', ['internship' => $internship]) }}"
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
