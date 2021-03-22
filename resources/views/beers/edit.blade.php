@extends('beers.base')

@section('title', 'edit')

@section('content')

 @include('beers.form', ['edit' => true]);

@endsection