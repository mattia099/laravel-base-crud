<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recupero dati dal db
        $comics = Comic::all(); //query che prende tutti i dati dal db
        return view('comics.index',compact('comics')); // ritorna vista index con la lista di comics
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create'); // ritorna solamente la vista create 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4|max:255',
            'description' => 'required|max:500',
            'image' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|max:100',
            'date' => 'requiered|date',
            'type' => 'required|max:100'
        ]);

        $data = $request->all(); //Permette di prendere i dati ottenuti dal form (in create)
        $comic = new Comic; //crea nuovo oggetto comic
        $comic->fill($data); // fill è collegato a fillable nel model Comic.php
        $comic->save(); // salva comic nel db
        return redirect()->route('comics.show',$comic->id); //una volta creato nuovo comic ci dirotta nella vista show del comic creato (gli passiamo l'id del comic)
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);//trova oggetto corrispondente all'id passato  ( /comics/{{id}} )
        return view('comics.show',compact('comic')); //ritorna vista del comic (passato come parametro stringa)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',compact('comic')); //ritorna vista edit del comic 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|min:4|max:255',
            'description' => 'required|max:500',
            'image' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|max:100',
            'date' => 'requiered|date',
            'type' => 'required|max:100'
        ]);
        $data = $request->all(); //stesso meccanisco di create

        $comic->update($data);//aggiorna value degli attributi (simile al save in create)

        return redirect()->route('comics.show',compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
