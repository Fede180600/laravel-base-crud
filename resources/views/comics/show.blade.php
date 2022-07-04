@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h1>Dettagli comic:</h1>
        <h2>{{ $selected_comic->title}}</h2>
        <p><small>{{ $selected_comic->type }}</small></p>
        <img src="{{ $selected_comic->thumb}}" alt="">
        <p><strong>{{ $selected_comic->description}}</strong></p>
        <p>Price: ${{ $selected_comic->price}}</p>
        <p>{{ $selected_comic->series }}</p>
        <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $selected_comic->id]) }}">Modifica</a>
    </div>
    
@endsection