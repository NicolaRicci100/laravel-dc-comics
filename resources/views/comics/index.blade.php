@extends('layouts.main')
@section('title', 'Comics')
@section('main')
    <h1 class="text-secondary">Elenco dei Fumetti</h1>
    <div class="d-flex justify-content-end">
        <a href="{{ route('comics.create') }}" class="btn btn-outline-secondary my-3"> Aggiungi un prodotto</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Serie</th>
                <th scope="col">Uscita</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Tipo</th>
                <th class="d-flex justify-content-end col">Informazioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td scope="row">{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ ucwords($comic->type) }}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-outline-secondary" href="{{ route('comics.show', $comic) }}">Info</a>
                        <a class="btn btn-outline-danger ms-1" href="{{ route('comics.edit', $comic) }}">Modifica</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
