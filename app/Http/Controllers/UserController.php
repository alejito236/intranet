<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserFormRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;




class UserController extends Controller
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

            
            $users =User::where('name','LIKE','%'. $query .'%')
                ->orderBy('id','asc')
                ->paginate(5);
            return view('usuarios.index',['users'=>$users, 'search'=>$query]);
        }
        //$users= User::all();
        //return view('usuarios.index',['users'=>$users]);

    }
    public function listarPdf(){

        $usuario = User::join('id', 'name', 'email','fecha_cumpleanios')
              ->select('id', 'name', 'email','fecha_cumpleanios')
              ->orderBy('name', 'desc')->get();  

        $cont=User::count();

        $pdf = \PDF::loadView('pdf.nombrespdf',['usaurio'=>$usuario,'cont'=>$cont]);
        return $pdf->download('articulos.pdf');
    
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');

        
    }

 
    public function store(Request $request)
    {

        $request->request->add([
            'password' => Hash::make($request->input('password'))
            
        ]);

        $usuario = request()->except('_token');
        $usuario = request()->except('password_confirmation');
        $usuario = new User();
        $usuario-> name= request('name');
        $usuario-> email= request('email');
     
        $usuario-> fecha_cumpleanios= request('fecha_cumpleanios');
        $usuario-> password= request('password');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/usuario', $filename);
            $usuario->image =$filename;

            
        } else{
            return $request;
            $usuario->image = '';
        }
        

        $usuario->save();


        session()->flash('exito', 'El usuario se creo con exito');


        return redirect('/usuarios');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('usuarios.show',['user'=>User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('usuarios.edit',['user'=>User::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserFormRequest $request, $id)
    {
        $usuario = request()->except(['_token', '_method']);
       
        $usuario = User::find($id);
        $usuario-> name= $request->get('name');
        $usuario-> email= $request->get('email');
        $usuario-> fecha_cumpleanios= $request->get('fecha_cumpleanios');
        
        if ($request->hasfile('image')){
            
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/usuario', $filename);
            $usuario->image =$filename;

            
        } else{
            return $request;
            $usuario->image = '';
        }
        

        $usuario->update();

        session()->flash('exito', 'El usuario se actualizo con exito');


        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario= User::findOrFail($id);
        $usuario-> delete();
        session()->flash('exito', 'El usuario se elimino con exito');

        

        return redirect('/usuarios');
    }
   
}
