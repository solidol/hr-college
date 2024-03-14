@extends('layouts.app')


@section('content')

<div class="baloon">
    <form method="post" enctype="multipart/form-data" action="{{route('users.store')}}">
        @csrf
        <h1>
            Створити профіль адміністратора
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-4">

                    <div class="mb-3 row">
                    <div class="mb-3 row">
                        <img id="imgPhoto" src="{{URL::route('users.emptyavatar.download')}}" class="w-75 m-2">
                    </div>
                    <div class="mb-3 row">
                        <label for="login" class="col12 col-form-label">Обрати фото</label>
                        <div class="col-12">
                            <input type="file" id="inpPhoto" class="form-control" name="photo">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-4 col-form-label">Електронна пошта</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="login" class="col-sm-4 col-form-label">Логін авторизації</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="login" id="login" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lastname" class="col-sm-4 col-form-label">Прізвище</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="lastname" id="lastname" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="firstname" class="col-sm-4 col-form-label">Ім'я</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="firstname" id="firstname" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="secondname" class="col-sm-4 col-form-label">По-батькові</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="secondname" id="secondname" required>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="secondname" class="col-sm-4 col-form-label">Вхід дозволено</label>
                        <div class="col-sm-8">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="status" checked="checked">

                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="selectSpec" class="col-sm-4 col-form-label">Факультет</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="department_id" id="selectPlan" require>
                                <option value="1" selected>Всі</option>
                                <option value="2">ФСВ</option>
                                <option value="3">ФСЕ</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="selectSpec" class="col-sm-4 col-form-label">Ролі</label>
                        <div class="col-sm-8">
                            <select class="form-control" multiple size="10" name="roles[]" id="selectPlan" require>
                                @foreach ($avRoles as $k=>$v)
                                <option value="{{$k}}">{{$v}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="firstname" class="col-sm-4 col-form-label">Новий пароль</label>
                        <div class="col-sm-8">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="secondname" class="col-sm-4 col-form-label">Повтор пароля</label>
                        <div class="col-sm-8">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success col-3 m-3">Зберегти</button>
            <button type="reset" class="btn btn-danger col-3 m-3">Очистити</button>
        </div>
    </form>
</div>

<script type="module">
    $('#inpPhoto').on('change', function() {
        for (var i = 0; i < this.files.length; i++) {
            var file = this.files[i];

            if (!file.type.startsWith('image/')) {
                continue
            }
            imgPhoto.file = file;
            var reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                };
            })(imgPhoto);
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection