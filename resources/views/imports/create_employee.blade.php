<!-- resources/views/excel-import.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">Оберіть файл</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Зберегти</button>
        </form>
    </div>
@endsection
