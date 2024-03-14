@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Картка нового працівника</h1>
        <form action="{{ URL::route('employees.store') }}" method="post">
            <div class="row">
                <div class="col-6">
                    <h2>Загальна інформація</h2>

                    @csrf
                    <div class="form-group row">
                        <label for="reg_number" class="col-4 col-form-label">Табельний номер</label>
                        <div class="col-8">
                            <input id="reg_number" name="reg_number" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-4 col-form-label">Прізвище</label>
                        <div class="col-8">
                            <input id="lastname" name="lastname" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="firstname" class="col-4 col-form-label">Ім'я</label>
                        <div class="col-8">
                            <input id="firstname" name="firstname" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="secondname" class="col-4 col-form-label">По-батькові</label>
                        <div class="col-8">
                            <input id="secondname" name="secondname" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthdate" class="col-4 col-form-label">Дата народження</label>
                        <div class="col-8">
                            <input id="birthdate" name="birthdate" type="date" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-4 col-form-label">Стать</label>
                        <div class="col-8">
                            <select id="gender" name="gender" class="form-select">
                                <option value="1">Чоловіча</option>
                                <option value="0">Жіноча</option>
                                <option value="-1">Немає даних
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="citizenship" class="col-4 col-form-label">Громадянство</label>
                        <div class="col-8">
                            <select id="citizenship" name="citizenship" class="form-select" required="required">
                                <option value="Україна">Україна</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="languages" class="col-4 col-form-label">Знання іноземних мов</label>
                        <div class="col-8">
                            <textarea id="languages" name="languages" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock" required="required"></textarea>
                            <span id="languagesHelpBlock" class="form-text text-muted">Введіть через кому мови та рівень
                                їх
                                знання</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="message" class="col-4 col-form-label">Коментар відділу кадрів</label>
                        <div class="col-8">
                            <textarea id="message" name="message" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Зберегти</button>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <h2>Контактні дані</h2>
                    <div class="form-group row">
                        <label for="phone" class="col-4 col-form-label">Телефон</label>
                        <div class="col-8">
                            <input id="phone" name="phone" type="text" class="form-control">
                        </div>
                    </div>

                    <h2>Посада</h2>
                    <div class="form-group row">
                        <label for="position" class="col-4 col-form-label">Посада</label>
                        <div class="col-8">
                            <select id="position" name="position" class="form-select">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="position_type" class="col-4 col-form-label">Тип</label>
                        <div class="col-8">
                            <select id="position_type" name="position_type" class="form-select">
                                <option value="1" selected>Основна</option>
                                <option value="2">Зовнішній сумісник</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="volume" class="col-4 col-form-label">Ставка</label>
                        <div class="col-8">
                            <input id="volume" name="volume" type="number" min="0" max="2"
                                step="0.01" class="form-control">
                        </div>
                    </div>
                    <h2>Профіль для входу</h2>
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Логін</label>
                        <div class="col-8">
                            <input id="name" name="name" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-4 col-form-label">Електронна пошта</label>
                        <div class="col-8">
                            <input id="email" name="email" type="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-4 col-form-label">Пароль</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="password" name="password" type="password" class="form-control" required>
                                <button class="btn btn-primary togpass" type="button">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </form>
    </div>

    <script type="module">
        $(document).ready(function() {
            $('.togpass').click(function() {
                const passwordField = $('#password');
                const passwordFieldType = passwordField.attr('type');
                if (passwordFieldType === 'password') {
                    passwordField.attr('type', 'text');
                    $(this).html('<i class="bi bi-eye-slash"></i>');
                } else {
                    passwordField.attr('type', 'password');
                    $(this).html('<i class="bi bi-eye"></i>');
                }
            });
        });
    </script>
@endsection
