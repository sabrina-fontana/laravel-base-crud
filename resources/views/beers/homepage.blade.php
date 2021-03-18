<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>Laravel</title>

    </head>
    <body>

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
              <td>{{$beer->nome}}</td>
              <td>{{$beer->birrificio}}</td>
              <td>{{$beer->colore}}</td>
              <td>{{$beer->stile}}</td>
              <td>{{$beer->nazione}}</td>
              <td>{{$beer->gradi}}</td>
              <td>€ {{number_format($beer->prezzo, 2)}}</td>
              <td><img class="table-img" src="{{$beer->immagine}}"></td>
            </tr>
          @endforeach
        </tbody>
      </table>

    </body>
</html>
