@extends('layouts.demo')

@section('content')
<div class="container"  style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
<form action='/usuarios' method='POST' enctype="multipart/form-data"> 
{{csrf_field()}}
    @csrf
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="name" placeholder="Escribe tu nombre" required>
  </div>
 
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Escribe tu correo" required>
  </div>


  <div class="form-group">
    <label for="fecha_cumpleanios">Fecha cumpleaños</label>
    <input type="date" class="form-control" name="fecha_cumpleanios" placeholder="Escribe tu " >
  </div>

  <div class="form-group">
    <label for="image">Selecciona tu foto de perfil</label>
    <input type="file" class="form-control" name="image" placeholder="Escribe " >
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>

  <div class="form-group">
    <label for="password"> confirm Password</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" required>
  </div>

  </body>
  <div class="container" >
<div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
      Usuarios
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       ¿Estas seguro de crear el usuario?
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

 
  <button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#modal1">Registrar</button>
  <button type="reset" class="btn btn-secondary btn-sm ">Cancelar</button>
</form>
        </div>
    </div>
</div>
</div>


@endsection


