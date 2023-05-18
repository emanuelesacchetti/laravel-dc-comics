@extends('layouts.app');
@section('page-title','Modify')


@section('content')

    
    <form method='POST' action='{{route('comics.update', ['comic' => $comic->id]) }}}'>
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">titolo</label>
            <input type="text" class="form-control" id="title" name="title" value='{{ $comic->title }}'>
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Url dell'immagine</label>
            <input type="text" class="form-control" id="src" name="src" value='{{ $comic->src }}'>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value='{{ $comic->price }}'>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value='{{ $comic->series }}'>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di rilascio</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value='{{ $comic->sale_date }}'>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" value='{{ $comic->type }}'>
        </div>
        <div class="form-floating">
            <label for="description" class="form-label"></label>
            <textarea class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary mt-4">Salva modifica</button>
    </form>

    <a class='btn btn-primary' href={{ route('comics.index')}} >Indietro</a>

@endsection