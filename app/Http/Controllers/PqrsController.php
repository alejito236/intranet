<?php

namespace App\Http\Controllers;


use App\Http\Requests\PqrsFormRequest;
use Illuminate\Http\Request;
use App\Pqrs;

use Illuminate\Support\Facades\Mail;
use App\Mail\mensajeRecibido;



class PqrsController extends Controller
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

            
            $pqrsas =Pqrs::where('cuerpo_pqrs','LIKE','%'. $query .'%')
                ->orderBy('id','asc')
                ->paginate(5);
            return view('pqrscarpeta.create',['pqrs'=>$pqrsas, 'search'=>$query]);
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
   
    return view('pqrscarpeta.create');

}




public function store(Request $request)
{
    $pqrs = new Pqrs();
    $pqrs-> cuerpo_pqrs= request('cuerpo_pqrs');
    $pqrs-> apellido_pqrs= request('apellido_pqrs');
    $pqrs-> email_pqrs= request('email_pqrs');
    $pqrs-> tipoid_pqrs= request('tipoid_pqrs');
    $pqrs-> numeroid_pqrs= request('numeroid_pqrs');
    $pqrs-> telefono_pqrs= request('telefono_pqrs');
    $pqrs-> tiposolicitud_pqrs= request('tiposolicitud_pqrs');
    $pqrs-> solicitud_pqrs= request('solicitud_pqrs');
    $pqrs-> contenido_pqrs= request('contenido_pqrs');
    $pqrs-> fecha_pqrs= request('fecha_pqrs');
    
 

    $pqrs->save();

    session()->flash('exito', 'Su PQRS se envio con exito');

    Mail::to('wilmarfer91@gmail.com') 
    ->send(new mensajeRecibido($pqrs));

   
    return redirect('/pqrs');
}
}