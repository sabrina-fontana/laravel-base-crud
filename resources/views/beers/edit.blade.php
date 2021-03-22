@extends('beers.base')

@section('title', 'edit')

@section('content')

<div class="my-title h2">Modifica i dati</div>

 @include('beers.form', ['edit' => true]);

 <a href="{{route('beers.index')}}"><button type="button" class="btn btn-light my-btn">Torna all'elenco</button></a>

@endsection