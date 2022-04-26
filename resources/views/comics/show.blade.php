@extends('layouts.standard')

@section('content')
  <h2>{{$comic->title}}</h2>
  <img src="{{$comic->image}}" alt="">
  <p>{{$comic->description}}</p>
@endsection