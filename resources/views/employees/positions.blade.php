@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Посади працівника {{ $employee->fullname }}</h1>
        <div class="row">
            <!--
                <div class="col">
                    <a href="{{ URL::route('positions.create', ['employee' => $employee]) }}" class="btn btn-success">
                        Додати нове
                    </a>
                </div>
            -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="tabemp" class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Посада
                            </th>
                            <th>
                                Категорія
                            </th>
                            <th>
                                Звання
                            </th>
                            <th>
                                Розряд
                            </th>
                            <th>
                                Ставка
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee->positions as $card)
                            <tr>
                                <td>
                                    {{ $card->position->title }}
                                </td>
                                <td>
                                    {{ $card->type->title }}
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
    <script type="module">
        $(document).ready(function() {
            $('#tabemp').DataTable({
                buttons: [],
                lengthMenu: [50, 100, 500],
                language: languageUk,
                ordering: false,
            });
        });
    </script>
@endsection
