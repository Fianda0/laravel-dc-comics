@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Modifica {{ $comic->title }} </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="title" value="{{ $comic->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <input type="text" class="form-control" name="description" value="{{ $comic->description }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Percorso immagione</label>
                        <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo</label>
                        <input type="number" class="form-control" name="price" value="{{ $comic->price }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Serie</label>
                        <input type="text" class="form-control" name="series" value="{{ $comic->series }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Data di uscita</label>
                        <input type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo</label>
                        <input type="text" class="form-control" name="type" value="{{ $comic->type }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Artista</label>
                        <input type="text" class="form-control" name="artist" value="{{ $comic->artist }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
