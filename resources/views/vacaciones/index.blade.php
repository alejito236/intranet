@extends('layouts.demo')

@section('content')


@if($flash = Session::get('exito') )
 
 <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Genial!</strong> {{ $flash  }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>


@endif

<div class="titulos" style="  background-color: #73b6c6;
  padding: 1em; color:#fff; margin: 1em 1em 1em 0em; border-radius:5px; ">
        @if($search)
        <div class="alert alert-primary" role="alert">
            Los resultados de tu busqueda '{{$search}}' son:
        </div>
        @endif

        
   
        
   
        <h1 style=" text-align:center" >Solicitudes de Vacaciones<a href="vacaciones/create"  ><br><button type="button" class="btn btn-info btn-success btn-sm "> Agenda tus vacaciones
                    </button> </a></h1>


    </div>

   
     
  
  

    <table class="table table-borderless"   >

  




<thead class="table-info" >
<style type="text/css">

table, th, td {
border:1px solid black;
border-collapse:collapse; 

}

th, td {
padding:15px;

}
</style>
    <tr>
      <th  scope="col">Nombre</th>
      <th  scope="col">Apellido</th>
      <th  scope="col">Tipo Solicitud</th>
      <th  scope="col">Telefono</th>
      <th  scope="col">Área de Trabajo</th>
      <th  scope="col">Fecha</th>
      <th scope="col">OPCIONES</th>

     
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($vacaciones as $vaca)
     
      <td>{{$vaca->cuerpo_vacaciones}}</td>
      <td>{{$vaca->apellido_vacaciones}}</td>
      <td>{{$vaca->tipsolicitud_vacaciones}}</td>
      <td>{{$vaca->telefono_vacaciones}}</td>
      <td>{{$vaca->area_vacaciones}}</td>
      <td>{{$vaca->fecha_vacaciones}}</td>
     <td>
      
      <form action="{{route('vacaciones.destroy',$vaca->id)}}" method=POST>
        @csrf
        @method('DELETE')



        <body>
  <div class="container" >
<div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
      <p class="text-dark">Solicitudes de vacaciones</p>
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       <p class="text-dark">¿Estas seguro de eliminar la solicitud?</p>
       </div>
       <div class= "modal-footer">
       <button type="submit" class="btn btn-primary">Aceptar</button>
       <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
       </div>
      </div>
    </div>
  </div>
</div>

       
</body>

        <a href="{{route('vacaciones.show',$vaca->id)}}" target="_blank"><button type="button" class="btn btn-info btn-sm "  >Ver</button></a>
 
        <a href="{{route('vacaciones.edit',$vaca->id)}}"><button type="button" class="btn btn-primary btn-sm " >Actualizar</button></a>
 
       
       
                                </button>
      </form>
      
      </td>

    </tr>
    </div>
 
    
    @endforeach
   
  </tbody>
</table>

  <div class="row">
    <div class="mx-auto">
       {{$vacaciones->links()}}
      </div>
    </div>
  </div>
</div>

  

  
@endsection

