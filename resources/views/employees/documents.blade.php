@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Документи працівника {{ $employee->fullname }}</h1>
        <div class="row">

        </div>
        <div class="row">
            <div class="col-md-12">
                <table id="tabemp" class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Номер
                            </th>
                            <th>
                                Дата
                            </th>
                            <th>
                                Тип
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee->documents as $document)
                            <tr>
                                <td>
                                    {{ $document->number }}
                                </td>
                                <td>
                                    {{ $document->date_start->format('d.m.Y') }}
                                </td>
                                <td>
                                    {{ $document->documentType->title }}
                                </td>
                                <td>

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
                lengthMenu: [100, 500],
                language: languageUk,
            });
        });
    </script>
@endsection
