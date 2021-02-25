<?php

namespace App\Http\Controllers;
use App\Http\Requests\NovedadFormRequest;
use Illuminate\Http\Request;
use App\Novedades;

class NovedadesController extends Controller
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

            
            $novedades =Novedades::where('cuerpo_novedad','LIKE','%'. $query .'%')
                ->orderBy('id','asc')
                ->paginate(5);
            return view('novedades.index',['novedades'=>$novedades, 'search'=>$query]);
        }
        //$novedades= Novedad::all();
        //return view('novedades.index',['novedades'=>$novedades]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novedades.create');

        
    }

 
    public function store(Request $request)
    {


        if($request->hasFile('imagen_novedad')){
            $file = $request->file('imagen_novedad');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/public/dist/images',$name);
        }

        
        $novedad = new Novedades();
        $novedad-> cuerpo_novedad= request('cuerpo_novedad');
        $novedad-> tipo_novedad= request('tipo_novedad');
        $novedad-> fecha_novedad= request('fecha_novedad');
        $novedad-> imagen_novedad= ($name);
       
        
        

        $novedad->save();
        session()->flash('exito', 'Su novedad se creo con exito');

        return redirect('/novedades');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('novedades.show',['novedad'=>Novedades::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('novedades.edit',['novedad'=>Novedades::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NovedadFormRequest $request, $id)
    {
       
        $novedad = Novedades::findOrFail($id);
        $novedad-> cuerpo_novedad= request('cuerpo_novedad');
        $novedad-> tipo_novedad= request('tipo_novedad');
        $novedad-> fecha_novedad= request('fecha_novedad');
        

        $novedad->update();
        session()->flash('exito', 'Su novedad se actualizo con exito');

        return redirect('/novedades');
    }

    /**
     * Remove the specified resource from storage.
     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $novedad= Novedades::findOrFail($id);
        $novedad-> delete();
        session()->flash('exito', 'Su novedad elimino con exito');
        return redirect('/novedades');
    }
}
