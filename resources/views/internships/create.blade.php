@extends('layouts.app')

@section('content')
    <form action="{{ URL::route('positioncards.internships.store', ['positioncard' => $positioncard]) }}" method="post"
        enctype="multipart/form-data">
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
                        <label for="institution_sel" class="col-4 col-form-label">Швидка підказка</label>
                        <div class="col-8">
                            <select id="institution_sel" name="institution_sel" class="form-select">
                                <option value="-1" data-title="" selected>
                                    Оберіть зі списку
                                </option>
                                @foreach ($institutions as $institution)
                                    <option value="{{ $institution->id }}" data-title="{{ $institution->title }}">
                                        {{ $institution->short_title }}
                                    </option>
                                @endforeach
                            </select>
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


                </div>
            </div>
            <div class="row">
                <h2>Документ підтвердження</h2>
                <div class="col-6">
                    <div class="form-group row">
                        <label for="doc_number" class="col-4 col-form-label">Номер документу</label>
                        <div class="col-8">
                            <input id="doc_number" name="doc_number" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="doc_title" class="col-4 col-form-label">Назва в документі</label>
                        <div class="col-8">
                            <textarea id="doc_title" name="doc_title" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="doc_institution" class="col-4 col-form-label">Організація</label>
                        <div class="col-8">
                            <textarea id="doc_institution" name="doc_institution" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="doc_type" class="col-4 col-form-label">Тип документу</label>
                        <div class="col-8">
                            <select id="doc_type" name="doc_type" class="form-select">
                                @foreach ($documentTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="doc_date_start" class="col-4 col-form-label">Дата видачі</label>
                        <div class="col-4">
                            <input id="doc_date_start" name="doc_date_start" type="date" class="form-control">
                        </div>
                        <div class="col-4">

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row">
                        <label for="doc_description" class="col-4 col-form-label">Текст в документі</label>
                        <div class="col-8">
                            <textarea id="doc_description" name="doc_description" cols="40" rows="3" class="form-control"
                                aria-describedby="languagesHelpBlock"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file" class="col-4 col-form-label">Прикріплений файл</label>
                        <div class="col-8">
                            <input id="file" name="file" type="file" class="form-control">
                        </div>

                    </div>

                </div>
            </div>

            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-success">Зберегти</button>
                </div>
            </div>

        </div>
    </form>

    <script type="module">
        $(document).ready(function() {
            $('#institution_sel').change(function() {
                $('#institution').val($(this).find(":selected").data('title'));
                $('#doc_institution').val($(this).find(":selected").data('title'));
            });
            $('#cb_one_day').click(function() {
                if ($(this).is(':checked')) {
                    $('#row_date_end').hide();
                    $('#date_end').val($('#date_start').val());
                    $('#doc_date_start').val($('#date_end').val());
                } else {
                    $('#row_date_end').show();
                }
            });
            $('#thesis').on('change keyup paste',function(){
                $('#doc_title').val($(this).val());
                $('#doc_description').val($(this).val());
            });

        });
    </script>
@endsection
