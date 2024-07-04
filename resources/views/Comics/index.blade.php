@extends('layouts.app')

@section('content')
    @foreach ($lista as $comic)
        <p>{{ $comic->title }}</p>
    @endforeach
@endsection
