@extends('layouts.app');
@section('page-title')
    Fumetto: {{ $comic->title }}
@endsection

@section('content')

    <img src={{ $comic->src }} class="img-fluid" alt={{ $comic->title }}>
    <h3>{{ $comic->title }}</h3>
    <h3>{{ $comic->price }}</h3>
    <h3>{{ $comic->series }}</h3>
    <h3>{{ $comic->sale_date }}</h3>
    <h3>{{ $comic->type }}</h3>
    <p>{{ $comic->description }}</p>

    <a class='btn btn-primary' href={{ route('comics.index')}} >Indietro</a>

    @endsection