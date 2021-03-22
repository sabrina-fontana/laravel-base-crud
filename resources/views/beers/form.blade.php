@php 
// per edit
if (isset($edit) && !empty($edit)) {
    $method = 'PUT';
    $url = route('beers.update', compact('beer'));
} else {
// per create
    $method = 'POST';
    $url = route('beers.store');
}
@endphp

<form method="post" action="{{$url}}" class="my-form">

    @csrf 
    @method($method)

    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label my-label">Nome</label>
      <div class="col-sm-10">
        <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome" placeholder="Nome" value="{{isset ($beer) ? $beer->nome : ''}}">
        <div class="invalid-feedback">{{$errors->first('nome')}}</div>
      </div>
    </div>

    <div class="form-group row">
        <label for="birrificio" class="col-sm-2 col-form-label my-label">Birrificio</label>
        <div class="col-sm-10">
            <input type="text" class="form-control  {{$errors->has('birrificio') ? 'is-invalid' : ''}}" name="birrificio" placeholder="Birrificio" value="{{isset ($beer) ? $beer->birrificio : ''}}">
            <div class="invalid-feedback">{{$errors->first('birrificio')}}</div>

        </div>
    </div>

    <div class="form-group row">
        <label for="colore" class="col-sm-2 col-form-label my-label">Colore</label>
        <div class="col-sm-10">
          <input type="text" class="form-control {{$errors->has('colore') ? 'is-invalid' : ''}}" name="colore" placeholder="Colore" value="{{isset ($beer) ? $beer->colore : ''}}">
          <div class="invalid-feedback">{{$errors->first('colore')}}</div>
        </div>
    </div>

    <div class="form-group row">
        <label for="stile" class="col-sm-2 col-form-label my-label">Stile</label>
        <div class="col-sm-10">
            <input type="text" class="form-control {{$errors->has('stile') ? 'is-invalid' : ''}}" name="stile" placeholder="Stile" value="{{isset ($beer) ? $beer->stile : ''}}">
            <div class="invalid-feedback">{{$errors->first('stile')}}</div>
        </div>
    </div>

    <div class="form-group row">
    <label for="nazione" class="col-sm-2 col-form-label my-label">Nazione</label>
        <div class="col-sm-10">
            <input type="text" class="form-control {{$errors->has('nazione') ? 'is-invalid' : ''}}" name="nazione" placeholder="Nazione" value="{{isset ($beer) ? $beer->nazione : ''}}">
            <div class="invalid-feedback">{{$errors->first('nazione')}}</div>
        </div>
    </div>

    <div class="form-group row">
        <label for="gradi" class="col-sm-2 col-form-label my-label">Gradi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control {{$errors->has('gradi') ? 'is-invalid' : ''}}" name="gradi" placeholder="Gradi" value="{{isset ($beer) ? $beer->gradi : ''}}">
            <div class="invalid-feedback">{{$errors->first('gradi')}}</div>
        </div>
    </div>

    <div class="form-group row">
    <label for="prezzo" class="col-sm-2 col-form-label my-label">Prezzo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control {{$errors->has('prezzo') ? 'is-invalid' : ''}}" name="prezzo" placeholder="Prezzo" value="{{isset ($beer) ? $beer->prezzo : ''}}">
            <div class="invalid-feedback">{{$errors->first('prezzo')}}</div>
        </div>
    </div>

    <div class="form-group row">
        <label for="immagine" class="col-sm-2 col-form-label my-label">Immagine</label>
        <div class="col-sm-10">
            <input type="text" class="form-control {{$errors->has('immagine') ? 'is-invalid' : ''}}" name ="immagine" placeholder="URL immagine" value="{{isset ($beer) ? $beer->immagine : ''}}">
            <div class="invalid-feedback">{{$errors->first('immagine')}}</div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary my-btn">Submit</button>
</form>