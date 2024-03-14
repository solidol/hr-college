@extends('layouts.app')


@section('content')

<div class="baloon">

    <h1>
        Перегляд профіля користувача
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="mb-3 row">
                    <img id="imgPhoto" src="#" class="w-75 m-2">
                </div>

            </div>
            <div class="col-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>
                                Атрибут
                            </th>
                            <th>
                                Значення
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Електронна пошта авторизації
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Логін авторизації
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Прізвище
                            </td>
                            <td>
                                {{$user->userable->lastname}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ім'я
                            </td>
                            <td>
                                {{$user->userable->firstname}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                По-батькові
                            </td>
                            <td>
                                {{$user->userable->secondname}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Вхід дозволено
                            </td>
                            <td>
                                {{$user->status?'Так':'Ні'}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ролі
                            </td>
                            <td>
                                {{implode(', ', $user->roles_ar_str)}}
                            </td>
                        </tr>
                    </tbody>
                </table>

                <button type="button" class="btn btn-danger m-3 fw-semibol" data-bs-toggle="modal" data-bs-target="#editPassword">
                    Змінити пароль
                </button>

            </div>
        </div>
    </div>
</div>

<script type="module">

</script>

@include('users.popups.edit_password')

@endsection