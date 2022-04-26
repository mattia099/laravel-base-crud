@extends('layouts.standard');

@section('content')
  @dump($comics)
  <table>

    <thead>
      <th>Titolo</th>
      <th>Descrizione</th>
      <th>Prezzo</th>
      <th>Tipo</th>
    </thead>

    <tbody>
      @foreach ($comics as $comic)
        <tr>
          <td>{{$comic->title}}</td>
          <td>{{$comic->description}}</td>
          <td>{{$comic->price}}</td>
          <td>{{$comic->type}}</td>
        </tr> 
      @endforeach
    </tbody>
  </table>


@endsection