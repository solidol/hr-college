@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Підвищення кваліфікації працівника {{ $positioncard->employee->fullname }}</h1>
        <div class="row">
            <div class="col">
                <a href="{{ URL::route('positioncards.internships.create', ['positioncard' => $positioncard]) }}"
                    class="btn btn-success">
                    Додати нове
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="tabemp" class="table table-striped">
                    <thead>
                        <tr>
                            <th>

                            </th>
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
                                Години та Кредити
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($positioncard->internships as $internship)
                            <tr>
                                <td>
                                    @switch($internship->status)
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
                                    <div>
                                        {{ $internship->hours }}
                                    </div>
                                    <hr>
                                    <div>
                                        {{ round($internship->hours / 30, 2) }}
                                    </div>

                                </td>
                                <td>
                                    <a href="{{ URL::route('internships.show', ['internship' => $internship]) }}"
                                        class="btn btn-success"><i class="bi bi-eye fs-5"></i></a>
                                    @if ($internship->status == 1)
                                        <a href="{{ URL::route('internships.edit', ['internship' => $internship]) }}"
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
                buttons: [],
                lengthMenu: [50, 100, 500],
                language: languageUk,
                ordering: false,
            });
        });
    </script>
@endsection
