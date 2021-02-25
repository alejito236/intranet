<?php

namespace App\Http\Controllers;


use App\Http\Requests\VacacionesFormRequest;
use App\Vacaciones;
use Illuminate\Http\Request;




class VacacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index(Request $request)
    {
        if($request){
            $query = trim($request->get('search'));

            
            $vacaciones=Vacaciones::where('cuerpo_vacaciones','LIKE','%'. $query .'%')
                ->orderBy('id','asc')
                ->paginate(5);
            return view('vacaciones.index',['vacaciones'=>$vacaciones, 'search'=>$query]);
        }
        //$users= User::all();
        //return view('usuarios.index',['users'=>$users]);

    }
   
    
    public function create()
    {
        return view('vacaciones.create');

        
    }

 
    public function store(Request $request)
    {
        $vacacion = new Vacaciones();
        $vacacion-> cuerpo_vacaciones= request('cuerpo_vacaciones');
        $vacacion-> apellido_vacaciones= request('apellido_vacaciones');
        $vacacion-> tipsolicitud_vacaciones= request('tipsolicitud_vacaciones');
        $vacacion-> telefono_vacaciones= request('telefono_vacaciones');
        $vacacion-> area_vacaciones= request('area_vacaciones');
        $vacacion-> fecha_vacaciones= request('fecha_vacaciones');

        $vacacion->save();
        session()->flash('exito', 'La solicitud se creo con exito!! le notificaremos pronto si fue aceptada');


        return redirect('/vacaciones');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('vacaciones.show',['vaca'=>Vacaciones::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('vacaciones.edit',['vaca'=>Vacaciones::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VacacionesFormRequest $request, $id)
    {
        $vacacion = Vacaciones::findOrFail($id);
        $vacacion-> cuerpo_vacaciones= $request->get('cuerpo_vacaciones');
        $vacacion-> apellido_vacaciones= $request->get('apellido_vacaciones');
        $vacacion-> tipsolicitud_vacaciones= $request->get('tipsolicitud_vacaciones');
        $vacacion-> telefono_vacaciones= $request->get('telefono_vacaciones');
        $vacacion-> area_vacaciones= $request->get('area_vacaciones');
        $vacacion-> fecha_vacaciones= $request->get('fecha_vacaciones');
       

        $vacacion->update();

        session()->flash('exito', 'La solicitud se actualizo con exito');


        return redirect('/vacaciones');
    }

    /**
     * Remove the specified resource from storage.
     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacacion= Vacaciones::findOrFail($id);
        $vacacion-> delete();
        session()->flash('exito', 'la solicitud se elimino con exito');

        

        return redirect('/vacaciones');
    }
   
}
