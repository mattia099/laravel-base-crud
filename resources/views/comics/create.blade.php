@extends('layouts.standard')

@section('content')
  <h1 class="text-uppercase">Aggiungi Comic</h1>
  <form action="{{ route('comics.store') }}" method="POST">
   @csrf 
    <div>
      <label for="name"></label>
      <input class="form-control" type="text" name="title" id="name" placeholder="Inserisci il titolo del comic">
    </div>

    <div>
      <label for="description"></label>
      <input class="form-control" type="text" name="description" id="description" placeholder="Inserisci la descrizione del comic">
    </div>

    <div>
      <label for="image"></label>
      <input class="form-control" type="text" name="image" id="image" placeholder="Inserisci immagine del comic">
    </div>

    <div>
      <label for="price"></label>
      <input class="form-control" type="text" name="price" id="price" placeholder="Inserisci il prezzo">
    </div>

    <div>
      <label for="series"></label>
      <input class="form-control" type="text" name="series" id="series" placeholder="Inserisci serie">
    </div>

    <div>
      <label for="sale_date"></label>
      <input class="form-control" type="text" name="sale_date" id="sale_date" placeholder="Inserisci data">
    </div>

    <div>
      <label for="type"></label>
      <input class="form-control" type="text" name="type" id="type" placeholder="Inserisci il tipo">
    </div>

    <input class="btn btn-success my-4" type="submit" value="Crea">
  </form>

@endsection