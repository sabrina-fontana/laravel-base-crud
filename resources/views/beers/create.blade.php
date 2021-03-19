@extends('beers.base')

@section('title', 'form')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

 <form method="post" action="{{route('beers.store')}}">

    @csrf 
    @method('POST')

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-1 col-form-label">Nome</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nome" placeholder="Nome">
      </div>
    </div>

    <div class="form-group row">
        <label for="birrificio" class="col-sm-1 col-form-label">Birrificio</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="birrificio" placeholder="Birrificio">
        </div>
    </div>

    <div class="form-group row">
        <label for="colore" class="col-sm-1 col-form-label">Colore</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="colore" placeholder="Colore">
        </div>
    </div>

    <div class="form-group row">
        <label for="stile" class="col-sm-1 col-form-label">Stile</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="stile" placeholder="Stile">
        </div>
    </div>

    <div class="form-group row">
    <label for="nazione" class="col-sm-1 col-form-label">Nazione</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nazione" placeholder="Nazione">
        </div>
    </div>

    <div class="form-group row">
        <label for="gradi" class="col-sm-1 col-form-label">Gradi</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="gradi" placeholder="Gradi">
        </div>
    </div>

    <div class="form-group row">
    <label for="prezzo" class="col-sm-1 col-form-label">Prezzo</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="prezzo" placeholder="Prezzo">
        </div>
    </div>

    <div class="form-group row">
        <label for="immagine" class="col-sm-1 col-form-label">Immagine</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name ="immagine" placeholder="URL immagine">
        </div>
    </div>

    <input class="btn btn-primary" type="submit" value="Submit">
</form>

@endsection