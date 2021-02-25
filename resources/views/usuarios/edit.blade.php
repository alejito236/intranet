@extends('layouts.demo')

@section('content')

<div class="container"  style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
        <h3>Editar Usuario:{{$user->name}}</h3>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form action="{{route('usuarios.update', $user->id)}}"  enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                {{method_field('PUT')}}
                @method('PATCH')

                

                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" value='{{$user->name}}' placeholder="Escribe tu nombre" required>
                </div>
               <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value='{{$user->email}}' placeholder="Escribe tu correo" required>
                </div>
                <div class="form-group">
                    <label for="fecha_cumpleanios">Fecha de cumpleaños</label>
                    <input type="date" class="form-control" name="fecha_cumpleanios" value='{{$user->fecha_cumpleanios}}' placeholder="Escribe tu correo" required>
                </div>
                
  <div class="form-group">
    <label for="image">Selecciona tu foto de perfil</label>
    <input type="file" class="form-control" name="image" placeholder="Escribe " >
  </div>

                

                
  <body>
  <div class="container" >
<div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
      Usuarios
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       ¿Estas seguro de actualizar el usuario?
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