@extends('layouts.standard')

@section('content')
  <h2>{{$comic->title}}</h2>
  <img class="my-2" src="{{$comic->image}}" alt="">
  <p class="my-2">{{$comic->description}}</p>
  <p>Prezzo: {{$comic->price}}</p>
  <a class="btn btn-success my-3" href="{{ route( 'comics.edit',$comic->id) }}">Modifica</a>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
    Elimina
  </button>
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Sei sicuro di voler procedere ad eliminare il comic?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
          <form action="{{ route( 'comics.destroy',$comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Elimina</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection