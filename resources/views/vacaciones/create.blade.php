
@extends('layouts.demo')

@section('content')
<div class="container" style="color:black">
    <div class='row'>
        <div class='col-sm-4'>
            <form action='/vacaciones' method='POST' enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="cuerpo_vacaciones">Nombre</label>
                    <input type="text" class="form-control" name="cuerpo_vacaciones" placeholder="Escribe tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido_vacaciones">Apellido</label>
                    <input type="text" class="form-control" name="apellido_vacaciones" placeholder="Escribe tu apellido" required>
                </div>
                <div class="form-group">
                    <label for="tipsolicitud_vacaciones">Tipo de solicitud</label>
                    <input type="text" class="form-control" name="tipsolicitud_vacaciones" placeholder="Escribe la solcitud" required>
                </div>
                <div class="form-group">
                    <label for="telefono_vacaciones">Telefono o celular</label>
                    <input type="text" class="form-control" name="telefono_vacaciones" placeholder="Escribe tu telefono o celular" required>
                </div>
                <div class="form-group">
                    <label for="area_vacaciones">Area de trabajo</label>
                    <select input type="text" class="form-control" name="area_vacaciones" placeholder="Select" required>
                                            <option value="Mantenimiento">Mantenimiento</option>
                                                <option value="Desarollo">Desarollo</option>
                                                <option value="Colaborador">Colaborador</option>
                                                <option value="otro">otro</option>
                                            </select>
                </div>
                <div class="form-group">
                    <label for="fecha_vacaciones">Fecha </label>
                    <input type="date" class="form-control" name="fecha_vacaciones" required>
                </div>

               

               
                </body>
  <div class="container" >
<div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
     Solicitud de vacaciones
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       ¿Estas seguro de crear la solicitud?
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
