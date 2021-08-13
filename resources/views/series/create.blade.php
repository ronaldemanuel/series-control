@extends('layout')

@section('header', 'Adicionar séries')

@section('content')
    <form action="/series" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@endsection