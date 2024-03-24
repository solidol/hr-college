@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Облікові записи входу працівників</h1>
        <div class="row">
            <div class="col-md-12">
                <table id="tabemp" class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Логін
                            </th>
                            <th>
                                ПІБ
                            </th>
                            <th>
                                e-mail
                            </th>
                            <th>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->userable->fullname }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    <a href="{{ URL::route('users.show', ['user' => $user]) }}" class="btn btn-success"><i
                                            class="bi bi-person-rolodex"></i> Перегляд</a>
                                    <form action="{{ URL::route('users.loginas', ['user' => $user]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Увійти</button>
                                    </form>

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
                paging: false,
                ordering: false,
                buttons: [],
                lengthMenu: [50, 100, 500],
                language: languageUk,
            });
        });
    </script>
@endsection
