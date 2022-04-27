@extends('layouts.standard')

@section('content')
  <h2>{{$comic->title}}</h2>
  <img src="{{$comic->image}}" alt="">
  <p>{{$comic->description}}</p>
  <td><a href="{{ route( 'comics.edit',$comic->id) }}">Modifica</a></td>
@endsection