@extends('layouts.app');
@section('page-title', 'lista-comics');

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Url-image</th>
                <th scope="col">Price</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->src }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        <a class='btn btn-primary' href={{ route('Comics.show',['Comic' => $comic->id]) }} >Vedi info</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
  </table>

@endsection