@extends('layouts.demo')

@section('content')



    <div class="titulos" style="  background-color: #113049;
  padding: 1em; color:#fff; margin: 1em 1em 1em 0em; border-radius:5px;">

        @if($search)
        <div class="alert alert-primary" role="alert">
            Los resultados de tu busqueda '{{$search}}' son:
        </div>
        @endif

        @if($flash = Session::get('exito') )
 
 <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Genial!</strong> {{ $flash  }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div >

@endif
        <h1>Novedades<a href="pqrs/create"><br><button type="button" class="btn btn-success btn-lg ">Agregar
                    manualllllllllllll</button></a></h1>


    </div>

    <div>
        <div class="col-sm-3 bg-light float-right">
            <div class="card">
                <div class="card-body">

                    <p class="card-text"><iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/UX9Cf36fSOU" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe></p>

                </div>
            </div>
        </div>
    </div>



    @foreach($pqrss as $pqrs)
    <div class="card w-75  " style="width: 18rem;">
        <div class="row no-gutters justify-content-center">
            <div class="col-md-4">
               
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$pqrs->cuerpo_pqrs}}</h5>
                    <p class="card-text">{{$pqrs->tipo_pqrs}}</p>
                    <p class="card-text">{{$pqrs->fecha_pqrs}}</p>

                  
                        @csrf
                        @method('DELETE')
<body>
<div class="container" >
 <div class="modal fade" tabindex="-1" id="modal1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
      <p class="text-dark">Novedades</p>
      <button class="close" data-dismiss="modal">&times;</button>
       </div>
       <div class="modal-body">
       <p class="text-dark">¿Seguro que quieres borrar la Novedad?</p>
       </div>
       <div class= "modal-footer">
       <button type="submit" class="btn btn-primary">Aceptar</button>
       <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
       </div>
      </div>
    </div>
  </div>
</div>

       
</body>
                      
    @endforeach

</div>

<div class="row">
    <div class="mx-auto">
        {{$pqrss->links()}}
    </div>
</div>
</div>




</div>
</div>

@endsection
