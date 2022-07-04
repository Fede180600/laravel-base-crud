@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Dettagli comic:</h1>
        <h2>{{ $selected_comic->title}}</h2>
        <p><small>{{ $selected_comic->type }}</small></p>
        <div class="show-img-container">
            <img src="{{ $selected_comic->thumb}}" alt="">
        </div>
        <p><strong>{{ $selected_comic->description}}</strong></p>
        <p>Price: ${{ $selected_comic->price}}</p>
        <p>{{ $selected_comic->series }}</p>
        <form action="{{ route('comics.destroy', ['comic' => $selected_comic->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $selected_comic->id]) }}">Modifica</a>
            <button class="btn btn-danger">Elimina</button>
        </form>
    </div>
    
@endsection