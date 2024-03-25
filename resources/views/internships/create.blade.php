@extends('layouts.app')

@section('content')
    <form action="{{ URL::route('positioncards.internships.store', ['positioncard' => $positioncard]) }}" method="post">
        @csrf
        <div class="container">
            <h1>Створити картку підвищення кваліфікації</h1>
            <div class="row">
                <h2>Загальна інформація</h2>
                <div class="col-6">
                    <div class="form-group row">
                        <label for="lastname" class="col-4 col-form-label">Власник</label>
                        <div class="col-8">
                            <input id="lastname" name="lastname" type="text" class="form-control"
                                value="{{ $positioncard->employee->fullname }}" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="internship_type" class="col-4 col-form-label">Тип підвищення</label>
                        <div class="col-8">
                            <select id="internship_type" name="internship_type" class="form-select">
                                @foreach ($internshipTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thesis" class="col-4 col-form-label">Тема підвищення</label>
                        <div class="col-8">
                            <textarea id="thesis" name="thesis" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_start" class="col-4 col-form-label">Дата початку</label>
                        <div class="col-4">
                            <input id="date_start" name="date_start" type="date" class="form-control">
                        </div>
                        <div class="col-1">
                            <input id="cb_one_day" name="cb_one_day" type="checkbox" class="form-check-input">
                        </div>
                        <label class="col-3 form-check-label" for="flexCheckDefault">Один день</label>

                    </div>

                    <div class="form-group row" id="row_date_end">
                        <label for="date_end" class="col-4 col-form-label">Дата закінчення</label>
                        <div class="col-4">
                            <input id="date_end" name="date_end" type="date" class="form-control">
                        </div>
                        <div class="col-4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hours" class="col-4 col-form-label">Години</label>
                        <div class="col-4">
                            <input id="hours" name="hours" type="number" min="1" max="200" step="1"
                                class="form-control">
                        </div>
                        <div class="col-4">
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-group row">
                        <label for="institution" class="col-4 col-form-label">Організація</label>
                        <div class="col-8">
                            <textarea id="institution" name="institution" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="department" class="col-4 col-form-label">Структурний підрозділ</label>
                        <div class="col-8">
                            <textarea id="department" name="department" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-4 col-form-label">Примітка</label>
                        <div class="col-8">
                            <textarea id="description" name="description" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="languages" class="col-4 col-form-label">Коментар відділу кадрів</label>
                        <div class="col-8">
                            <textarea id="languages" name="languages" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Зберегти</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>

    <script type="module">
        $(document).ready(function() {
            $('#cb_one_day').click(function() {
                if ($(this).is(':checked')) {
                    $('#row_date_end').hide();
                }else{
                    $('#row_date_end').show();
                }
            });
        });
    </script>
@endsection
