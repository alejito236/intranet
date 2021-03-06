@extends('layouts.demo')

@section('content')
<div class="container" style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
            <form action='/novedades' method='POST' enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="cuerpo_novedad">Titulo Novedad</label>
                    <input type="text" class="form-control" name="cuerpo_novedad" placeholder="Escribe el titulo de la novedad" required>
                </div>
                <div class="form-group">
                    <label for="tipo_novedad">Cotenido novedad</label>
                    <input type="text" class="form-control" name="tipo_novedad" placeholder="Escribe el contenido de la novedad" required>
                </div>
                <div class="form-group">
                    <label for="fecha_novedad">Fecha novedad</label>
                    <input type="date" class="form-control" name="fecha_novedad" required>
                </div>
                <div class="form-group">
                    <label for="imagen_novedad">imagen novedad</label>
                    <input type="file" class="form-control" name="imagen_novedad" required>
                </div>

                </body>
  <div class="container" >
<div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
      Novedades
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       ¿Estas seguro de crear la novedad?
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
