@extends('beers.base')

@section('title', 'title')

@section('content')

  <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nome</th>
        <th scope="col">birrificio</th>
        <th scope="col">colore</th>
        <th scope="col">stile</th>
        <th scope="col">nazione</th>
        <th scope="col">gradi</th>
        <th scope="col">prezzo</th>
        <th scope="col" class="img-col">immagine</th>
      </tr>
    </thead>
    <tbody>
      @foreach($beers as $beer)
        <tr>
          <td>{{$beer->id}}</td>
          <td> <a href="{{route('beers.show', compact('beer'))}}">{{$beer->nome}}</a> </td>
          <td>{{$beer->birrificio}}</td>
          <td>{{$beer->colore}}</td>
          <td>{{$beer->stile}}</td>
          <td>{{$beer->nazione}}</td>
          <td>{{$beer->gradi}}</td>
          <td>€ {{number_format($beer->prezzo, 2)}}</td>
          <td><img class="table-img" src="{{$beer->immagine}}"></td>
          <td class="icons">
            <a href="{{route('beers.show', compact('beer'))}}">
              <button class="btn btn-primary"><i class="fas fa-info"></i></button>
            </a>
            <a href="{{route('beers.edit', compact('beer'))}}">
              <button class="btn btn-secondary"><i class="fas fa-edit"></i></button>
            </a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-trash-alt"></i>
            </button>
          </td>
        </tr>
      @endforeach
      <!-- Modal -->
      <div class="modal fade my-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Elimina l'elemento</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Sei sicuro di voler eliminare definitivamente l'elemento?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Torna indietro</button>
              <form method="POST" action="{{route('beers.destroy', compact('beer'))}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Elimina</button>
              </form>
            </div>
          </div>
        </div>
      </div>    
    </tbody>
  </table>

  <a href="{{route('beers.create')}}"><button type="button" class="btn btn-primary my-btn">Inserisci una nuova birra</button></a>
@endsection
