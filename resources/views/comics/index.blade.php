    @extends('layouts.app')

    @section('main_content')
        <div class="container">
            <h2>Lista Comics</h2>
            <ul>
                @foreach ($comics as $comic)
                    <li>
                        <h3>
                            <a href="{{ route('comics.show',['comic' => $comic->id]) }}">
                                {{ $comic->title}}
                            </a>
                        </h3>
                        <p>{{ $comic->description }}</p>
                        <img src="{{ $comic->thumb }}" alt="">
                    </li>
                @endforeach
            </ul>
        </div>
    @endsection
    