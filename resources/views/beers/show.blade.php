<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title></title>
  </head>

  <body>
    <div>nome: {{$beer->nome}}</div>
    <div>birrificio: {{$beer->birrificio}}</div>
    <div>stile: {{$beer->stile}}</div>
  </body>
</html>
