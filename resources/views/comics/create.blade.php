@extends('layouts.app');
@section('page-title','Add_new')


@section('content')

    
    <form method='POST' action={{route('comics.store') }}>
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Url dell'immagine</label>
            <input type="text" class="form-control" id="src" name="src">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di rilascio</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="form-floating">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>

    <a class='btn btn-primary' href={{ route('comics.index')}} >Indietro</a>

@endsection