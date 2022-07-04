@extends('layouts.app')

@section('main_content')
    <div class="container">
        <form action="{{ route('comics.update', ['comic' => $selected_comic->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="title" class="form-label">Comic Title</label>
              <input type="text" class="form-control" name="title" id="title" value="{{ $selected_comic->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" name="description" id="description">{{ $selected_comic->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Copertina</label>
                <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $selected_comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" value="{{ $selected_comic->price }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ $selected_comic->series }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Genere</label>
                <input type="text" class="form-control" name="type" id="type" value="{{ $selected_comic->type }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ $selected_comic->sale_date }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>
    </div>
@endsection