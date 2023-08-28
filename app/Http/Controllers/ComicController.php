<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url:http,https',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|string',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string'
        ], [
            'title.required' => 'Nome mancante',
            'price.required' => 'Prezzo mancante',
            'series.required' => 'Serie mancante',
            'sale_date.required' => 'Uscita mancante',
            'type.required' => 'Tipo mancante',
            'writers.required' => 'Scrittori mancanti',
            'artists.required' => 'Artisti mancanti'
        ]);

        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return to_route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
