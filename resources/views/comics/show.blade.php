@extends('layouts.standard')

@section('content')
  <h1>{{$comic->title}}</h1>
  <img src="{{$comic->image}}" alt="">
  <p>{{$comic->description}}</p>
@endsection