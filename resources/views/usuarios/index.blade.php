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

        
   
        
   
        <h1 style=" text-align:center" >lista de usuarios<a href="usuarios/create" " ><br><button type="button" class="btn btn-info btn-success btn-sm" style=>Agregar
                    Usuario</button> </a></h1>


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
    <tr >
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">Email</th> 
      <th scope="col">Fecha de cumpleaños</th> 
      <th scope="col">OPCIONES</th>
    

     
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($users as $user)
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->fecha_cumpleanios}}</td>
      <td>

  


      
      
      <form action="{{route('usuarios.destroy',$user->id)}}" method=POST>
        @csrf
        @method('DELETE')
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
       ¿Estas seguro de eliminar el usuario?
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
        <a href="{{route('usuarios.show',$user->id)}}" target="_blank"><button type="button" class="btn btn-info btn-sm ">Ver</button></a>
        @can('administrador')
        <a href="{{route('usuarios.edit',$user->id)}}"><button type="button" class="btn btn-primary btn-sm ">Actualizar</button></a>
        <button type="button" class="btn btn-secondary btn-sm " data-toggle="modal" data-target=" modal1">Eliminar</button>
        @endcan
      </form>
      
      </td>


    </tr>
    
 
    
    @endforeach
   
  </tbody>
</table>

  <div class="row">
    <div class="mx-auto">
       {{$users->links()}}
      </div>
    </div>
  </div>
  </div>

  

  
  
@endsection