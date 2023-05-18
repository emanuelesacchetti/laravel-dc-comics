@extends('layouts.app');
@section('page-title','Add_new')


@section('content')

    
    <form method='POST' action={{route('comics.store') }}>
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror"
             id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-fedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Url dell'immagine</label>
            <input type="text" class="form-control @error('src') is-invalid @enderror"
             id="src" name="src" value="{{ old('src') }}">
            @error('src')
                <div class="invalid-fedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror"
             id="price" name="price" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-fedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" 
            id="series" name="series" value="{{ old('series') }}">
            @error('series')
                <div class="invalid-fedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di rilascio</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror"
             id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
                <div class="invalid-fedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror"
             id="type" name="type" value="{{ old('type') }}">
            @error('type')
                <div class="invalid-fedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-floating">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" 
            id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-fedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>

    <a class='btn btn-primary' href={{ route('comics.index')}} >Indietro</a>

@endsection