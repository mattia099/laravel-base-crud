@extends('layouts.standard')

@section('content')
  <h2>{{$comic->title}}</h2>
  <img class="my-2" src="{{$comic->image}}" alt="">
  <p class="my-2">{{$comic->description}}</p>
  <p>Prezzo: {{$comic->price}}</p>
  <a class="btn btn-success my-3" href="{{ route( 'comics.edit',$comic->id) }}">Modifica</a>
  <form action="{{ route( 'comics.destroy',$comic->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit">Elimina</button>
  </form>
@endsection