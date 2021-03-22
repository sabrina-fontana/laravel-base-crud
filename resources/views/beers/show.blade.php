@extends('beers.base')

@section('title', 'dettagli')

@section('content')

  <div class="show-beer">

    <div class="chevron">
      <i class="fas fa-chevron-left"></i>
    </div>

    <div class="beer-card">
      <img src="{{$beer->immagine}}" alt="Card image cap">
      <div class="beer-desc">
        <div class="beer-title">{{$beer->nome}}</div>
        <div>birrificio: {{$beer->birrificio}}</div>
        <div>colore: {{$beer->colore}}</div>
        <div>stile: {{$beer->stile}}</div>
        <div>nazione: {{$beer->nazione}}</div>
        <div>gradi: {{$beer->gradi}}</div>
        <div>prezzo: € {{$beer->prezzo}}</div>
      </div>
    </div>

    <div class="chevron">
      <i class="fas fa-chevron-right"></i>
    </div>

  </div>

  <a href="{{route('beers.index')}}"><button type="button" class="btn btn-light my-btn">Torna all'elenco</button></a>

@endsection