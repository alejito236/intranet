@extends('layouts.demo')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$novedad->cuerpo_novedad}}</h1>
    <p class="lead">{{$novedad->tipo_novedad}}</p>
    <p class="lead">{{$novedad->fecha_novedad}}</p>
    <p class="lead">{{$novedad->imagen_novedad}}</p>
  </div>
</div>


@endsection