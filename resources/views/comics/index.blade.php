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
                        <a class='btn btn-primary' href={{ route('comics.show',['comic' => $comic->id]) }} >Vedi info</a>
                        <a class='btn btn-warning' href={{ route('comics.edit',['comic' => $comic->id]) }} >Modifica</a>
                        <form action="{{ route('comics.destroy', ['comic'=> $comic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type='submit' class="btn btn-danger">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
  </table>

@endsection