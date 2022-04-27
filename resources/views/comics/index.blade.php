@extends('layouts.standard')

@section('content')

  <h1 class="text-uppercase">Lista comics</h1>
  <table class="table table-striped">

    <thead>
      <th>Id</th>
      <th>Titolo</th>
      <th>Descrizione</th>
      <th>Prezzo</th>
      <th>Tipo</th>
    </thead>

    <tbody>
      @foreach ($comics as $comic)
        <tr>
          <td>{{$comic->id}}</td>
          <td>{{$comic->title}}</td>
          <td>{{$comic->description}}</td>
          <td>{{$comic->price}}$</td>
          <td>{{$comic->type}}</td>
          <td><a class="btn btn-primary" href="{{ route( 'comics.show',$comic->id) }}">Visualizza</a></td>
          <td><a class="btn btn-success" href="{{ route( 'comics.edit',$comic->id) }}">Modifica</a></td>
          <td>
            <form action="{{ route( 'comics.destroy',$comic->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Elimina</button>
            </form>
          </td>
        </tr> 
      @endforeach
    </tbody>
</table>


@endsection