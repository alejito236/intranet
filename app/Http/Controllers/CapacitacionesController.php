<?php

namespace App\Http\Controllers;


use App\Http\Requests\CapacitacionFormRequest;
use Illuminate\Http\Request;
use App\Capacitaciones;

class CapacitacionesController extends Controller
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

            
            $capacitaciones =Capacitaciones::where('cuerpo_capacitacion','LIKE','%'. $query .'%')
                ->orderBy('id','asc')
                ->paginate(5);
            return view('capacitaciones.index',['capacitaciones'=>$capacitaciones, 'search'=>$query]);
        }    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    return view('capacitaciones.create');

}




public function store(Request $request)
{
    $capacitacion = new Capacitaciones();
    $capacitacion-> cuerpo_capacitacion= request('cuerpo_capacitacion');
    $capacitacion-> tipo_capacitacion= request('tipo_capacitacion');
    $capacitacion-> fecha_capacitacion= request('fecha_capacitacion');
 

    $capacitacion->save();

    session()->flash('exito', 'Su capacitacion se creo con exito');

    return redirect('/capacitaciones');
}

/**
 * Display the specified resource.
 *
 * @param  int $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    return view('capacitaciones.show',['capacitacion'=>Capacitaciones::findOrFail($id)]);
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    return view('capacitaciones.edit',['capacitacion'=>Capacitaciones::findOrFail($id)]);
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param   int  $id
 * @return \Illuminate\Http\Response
 */
public function update(CapacitacionFormRequest $request, $id)
{
    $capacitacion = Capacitaciones::findOrFail($id);
    $capacitacion-> cuerpo_capacitacion= request('cuerpo_capacitacion');
    $capacitacion-> tipo_capacitacion= request('tipo_capacitacion');
    $capacitacion-> fecha_capacitacion= request('fecha_capacitacion');
    

    $capacitacion->update();

    session()->flash('exito', 'Su capacitacion fue actualizada');
    
    return redirect('/capacitaciones');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $capacitacion= Capacitaciones::findOrFail($id);
    $capacitacion-> delete();

    session()->flash('exito', 'Su capacitacion fue eliminada');
    return redirect('/capacitaciones');
}
}

