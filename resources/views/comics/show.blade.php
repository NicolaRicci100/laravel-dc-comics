@extends('layouts.main')
@section('icon', $comic->thumb)
@section('title', $comic->title)
@section('main')
    <section class="row mt-4">
        <div class="col-4">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div class="col-8">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>{{ $comic->title }}</strong>
                </li>
                <li class="list-group-item">{{ $comic->description }}</li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Serie</strong>
                    <strong>{{ $comic->series }}</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Prezzo di vendita</strong>
                    <strong>{{ $comic->price }}</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong class="me-3">Artisti</strong>
                    <span class="text-end">{{ str_replace(',', ', ', $comic->artists) }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <strong class="me-3">Scrittori</strong>
                    <span class="text-end">{{ str_replace(',', ', ', $comic->writers) }}</span>
                </li>
            </ul>
        </div>
        <footer class="d-flex justify-content-between mt-3">
            <a href="{{ route('comics.index') }}" class="btn btn-outline-secondary my-3">Torna alla lista</a>
            <div class="mt-3">
                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-outline-danger me-4">Modifica</a>
                <form class="d-inline delete-form" action="{{ route('comics.destroy', $comic) }}" method="POST"
                    data-name="{{ $comic->title }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger ">Elimina</button>
                </form>
            </div>
        </footer>
    </section>
@endsection
@section('scripts')
    @vite('resources/js/confirm-delete.js');
@endsection
