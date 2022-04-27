@extends('layouts.standard')

@section('content')
  <h1 class="text-uppercase">Modifica Comic</h1>
  <form action="{{ route('comics.update',$comic->id) }}" method="POST">
   
   @csrf
   @method('PUT')

   <img src="{{$comic->image}}" alt="">
    <div>
      <label for="name"></label>
      <input class="form-control" type="text" name="title" id="name" value="{{ $comic->title }}" placeholder="Inserisci il titolo del comic">
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
      <label for="type"></label>
      <input class="form-control" type="text" name="type" id="type" placeholder="Inserisci il tipo">
    </div>

    <input class="btn btn-success my-4" type="submit" value="Modifica">
    

@endsection