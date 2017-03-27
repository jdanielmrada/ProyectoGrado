<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Cliente;
use App\Inscripcion;
use App\Mensualidad;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class fontsController extends Controller
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
            $clientes->inscripcion;
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
        $mensualidad=new Mensualidad($request->all());
        $mensualidad->save();
        
        $inscripcion=new Inscripcion($request->all());
        $inscripcion->mensualidad()->associate($mensualidad);
        $inscripcion->save();

        $cliente=new Cliente($request->all());
        $cliente->inscripcion()->associate($inscripcion);
        $cliente->save();

        Flash::success("Ya ".$cliente->nombre." es parte de la familia Tauro");
        return redirect()->route('panel-de-administrador.fonts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
