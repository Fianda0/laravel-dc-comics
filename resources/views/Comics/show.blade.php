@extends('layouts.app')

@section('content')
    <img src="{{ $comic->thumb }}" alt="">
    <p>{{ $comic->title }}</p>
@endsection
