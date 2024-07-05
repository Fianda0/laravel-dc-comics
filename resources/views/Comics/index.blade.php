@extends('layouts.app')

@section('content')
    <div class="container-card">
        @foreach ($lista as $comic)
            <div class="card">
                <a href="{{ route('comics.show', $comic->id) }}">
                    <p>{{ $comic->title }}</p>
                    <img src="{{ $comic->thumb }}" alt="">
                </a>
            </div>
        @endforeach
    </div>
@endsection
