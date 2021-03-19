@extends('beers.base')

@section('title', 'form')

@section('content')

{{-- se la validation nel metodo store fallisce, visualizzo a schermo gli errori --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<div class="my-title h2">Inserisci una nuova birra!</div>

 <form method="post" action="{{route('beers.store')}}" class="needs-validation my-form" novalidate>

    @csrf 
    @method('POST')

    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label my-label">Nome</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nome" placeholder="Nome" required>
        <div class="invalid-feedback">Inserisci un nome!</div>
      </div>
    </div>

    <div class="form-group row">
        <label for="birrificio" class="col-sm-2 col-form-label my-label">Birrificio</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="birrificio" placeholder="Birrificio" required>
            <div class="invalid-feedback">Inserisci un birrificio!</div>

        </div>
    </div>

    <div class="form-group row">
        <label for="colore" class="col-sm-2 col-form-label my-label">Colore</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="colore" placeholder="Colore">
        </div>
    </div>

    <div class="form-group row">
        <label for="stile" class="col-sm-2 col-form-label my-label">Stile</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="stile" placeholder="Stile">
        </div>
    </div>

    <div class="form-group row">
    <label for="nazione" class="col-sm-2 col-form-label my-label">Nazione</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nazione" placeholder="Nazione">
        </div>
    </div>

    <div class="form-group row">
        <label for="gradi" class="col-sm-2 col-form-label my-label">Gradi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="gradi" placeholder="Gradi">
        </div>
    </div>

    <div class="form-group row">
    <label for="prezzo" class="col-sm-2 col-form-label my-label">Prezzo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="prezzo" placeholder="Prezzo" required>
            <div class="invalid-feedback">Inserisci un prezzo!</div>
        </div>
    </div>

    <div class="form-group row">
        <label for="immagine" class="col-sm-2 col-form-label my-label">Immagine</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name ="immagine" placeholder="URL immagine">
        </div>
    </div>

    <input class="btn btn-primary my-btn" type="submit" value="Submit">
    <a href="{{route('beers.index')}}"><button type="button" class="btn btn-light">Torna all'elenco</button></a>
</form>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>

@endsection