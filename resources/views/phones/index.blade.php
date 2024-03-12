@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="tabemp" class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Телефон
                            </th>
                            <th>
                                Тип
                            </th>
                            <th>
                                ПІБ
                            </th>
                            <th>
                                Статус
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($phones as $phone)
                            <tr>
                                <td>
                                    {{ $phone->phone }}
                                </td>
                                <td>
                                    {{ $phone->type_str }}
                                </td>
                                <td>
                                    {{ $phone->personable->fullname }}
                                </td>
                                <td>
                                    {{ $phone->status_str }}
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
            $('#tabemp').DataTable();
        });
    </script>
@endsection
