@extends('layouts.demo')

@section('content')
<div class="jumbotron jumbotron-fluid" >
  <div class="container">
    <h1 class="display-4">{{$capacitacion->cuerpo_capacitacion}}</h1>
    <p class="lead">{{$capacitacion->tipo_capacitacion}}</p>
    <p class="lead">{{$capacitacion->fecha_capacitacion
  </div>
</div>


@endsection