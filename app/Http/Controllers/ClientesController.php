<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Cliente;
use App\Mes;
use App\Dato;
use App\Mensualidad;
use App\Inscripcion;
use App\Peso_data;
use App\Altura_data;
use App\Altura;
use App\Peso;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes= Cliente::orderBy('id','DESC')->paginate(10);
        $clientes->each(function($clientes){
             $clientes->user;
             $clientes->inscripciones;
             $clientes->altura;
             $clientes->pago;
         });
         return view('admin.cliente.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mes= Mes::orderBy('id','ASC')->lists('mes','id');

        $peso= Peso_data::orderBy('id','ASC')->lists('peso','id');
        $altura= Altura_data::orderBy('id','ASC')->lists('altura','id');
        return view('admin.cliente.create')
                                        ->with('mes',$mes)
                                        ->with('peso',$peso)
                                        ->with('altura',$altura)
                                        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $dato= new Dato($request->all());
        $dato->save();

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->dato()->associate($dato);
        $user->save();

        $altura=new Altura();
        $altura->save();

        $altura->altura_detalles()->sync($request->alturas);

        $peso=new Peso();
        $peso->save();

        $peso->peso_detalles()->sync($request->pesos);

        $cliente=new Cliente($request->all());
        $cliente->user()->associate($user);
        $cliente->peso()->associate($peso);
        $cliente->altura()->associate($altura);
        $cliente->save();

        $mensualidad=new Mensualidad($request->all());
        $mensualidad->save();

        $mensualidad->meses()->sync($request->meses);

        $inscripcion=new Inscripcion($request->all());
        $inscripcion->cliente()->associate($cliente);
        $inscripcion->mensualidad()->associate($mensualidad);
        $inscripcion->save();

                
        Flash::success("Ya ".$cliente->nombre." es parte de la familia Tauro");
        return redirect()->route('panel-de-administrador.clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente= Cliente::find($id);
        return view('admin.cliente.detalle')->with('cliente', $cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente= Cliente::find($id);
        return view('admin.cliente.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dato= Dato::find($request->dato_id);
        $dato->fill($request->all());
        $dato->save();

        $user= User::find($request->user_id);
        $user->fill($request->all());
        $user->save();

        $cliente= Cliente::find($id);
        $cliente->fill($request->all());
        $cliente->save();

        Flash::warning('El cliente '.$cliente->nombre. ' fue modificado de manera exitosa');
        return redirect()->route('panel-de-administrador.clientes.show',$cliente->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente= Cliente::find($id);
        $cliente->delete();

        Flash::warning('El cliente '.$cliente->nombre. ' fue eliminado de manera exitosa');
        return redirect()->route('panel-de-administrador.clientes.show',$cliente->id);
    }
}
