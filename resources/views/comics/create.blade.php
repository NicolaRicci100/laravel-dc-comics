@extends('layouts.main')
@section('title', 'Add Comics')
@section('main')
    <h1 class="text-secondary">Aggiungi un prodotto</h1>
    <form>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Nome</label>
                    <input required name="title" type="text" class="form-control" id="title" placeholder="nome">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input name="thumb" type="url" class="form-control" id="thumb" placeholder="immagine">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="text" class="form-control" id="price" placeholder="prezzo">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input name="series" type="text" class="form-control" id="series" placeholder="serie">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Uscita</label>
                    <input name="sale_date" type="text" class="form-control" id="sale_date" placeholder="uscita">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <select class="form-select" name="type" id="type">
                        <option>Comic Book</option>
                        <option>Graphic Novel</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <input name="artists" type="text" class="form-control" id="artists" placeholder="artisti">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <input name="writers" type="text" class="form-control" id="writers" placeholder="scrittori">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea name="description" class="form-control" id="description" placeholder="descrizione"></textarea>
                </div>
            </div>
        </div>
    </form>




    <footer class="d-flex justify-content-end mt-3">
        <a href="{{ route('comics.index') }}" class="btn btn-outline-secondary my-3">Torna alla lista</a>
    </footer>
@endsection
