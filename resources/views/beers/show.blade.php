@extends('beers.base')

@section('title', 'dettagli')

@section('content')

  <div class="card" style="width: 18rem;">
    <img src="{{$beer->immagine}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$beer->nome}}</h5>
      <div>birrificio: {{$beer->birrificio}}</div>
      <div>colore: {{$beer->colore}}</div>
      <div>stile: {{$beer->stile}}</div>
      <div>nazione: {{$beer->nazione}}</div>
      <div>gradi: {{$beer->gradi}}</div>
      <div>prezzo: € {{$beer->prezzo}}</div>
    </div>
  </div>

@endsection