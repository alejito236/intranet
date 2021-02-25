@extends('layouts.demo')

@section('content')

<div class="container" style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
        <h3>Editar novedad:{{$novedad->cuerpo_novedad}}</h3>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form action="{{route('novedades.update', $novedad->id)}}" method="POST">
                @method('PATCH')
                

                @csrf
                <div class="form-group">
                    <label for="cuerpo_novedad">Titulo Novedad</label>
                    <input type="text" class="form-control" name="cuerpo_novedad" value='{{$novedad->cuerpo_novedad}}' placeholder="Escribe tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="tipo_novedad">Descripcion Novedad</label>
                    <textarea  rows="14"  type="text-area" class="form-control" name="tipo_novedad" 
                     placeholder="Escribe tu correo" required>
                    {{$novedad->tipo_novedad}}</textarea> </div>

                <div class="form-group">
                    <label for="fecha_novedad">fecha_novedad</label>
                    <input type="date" class="form-control" name="fecha_novedad" value='{{$novedad->fecha_novedad}}' placeholder="Escribe tu correo" required>
                </div>

  
               
                <body>
  <div class="container" >
<div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
      Novedades
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       ¿Estas seguro de actualizar la novedad?
       </div>
       <div class= "modal-footer">
       <button type=submit class="btn btn-primary">Aceptar</button>
       <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
       </div>
      </div>
    </div>
  </div>
</div>

       
</body>

<button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#modal1">Actualizar</button>
                <button type="reset" class="btn btn-secondary btn-sm ">Cancelar</button>
            </form>
        </div>
    </div>
</div>
</div>


@endsection