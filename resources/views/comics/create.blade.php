@extends('layouts.standard')

@section('content')
  <h1>Aggiungi Comic</h1>
  <form action="{{route('comics.store')}}" method="POST">
    <div>
      <label for="name"></label>
      <input type="text" name="title" id="name" placeholder="Inserisci il titolo del comic">
    </div>

    <div>
      <label for="description"></label>
      <input type="text" name="description" id="description" placeholder="Inserisci la descrizione del comic">
    </div>

    <div>
      <label for="price"></label>
      <input type="text" name="price" id="price" placeholder="Inserisci il prezzo">
    </div>

    <button type="submit">invia</button>
  </form>

@endsection