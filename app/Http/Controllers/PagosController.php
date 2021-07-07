<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inscripcion;
use App\Mensualidad;
use App\Cliente;
use App\Mes;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('panel-de-administrador.fonts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscripcion= Inscripcion::find($id);
        $my_meses=$inscripcion->mensualidad->meses->lists('mes');
        // dd($my_meses);
        return view('admin.pagos.index')
                    ->with('inscripcion', $inscripcion)
                    ->with('my_meses', $my_meses)        
                ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inscripcion= Inscripcion::find($id);
        $mes= Mes::orderBy('id','ASC')->lists('mes','id');
        $my_meses=$inscripcion->mensualidad->meses->lists('id')->ToArray();
        return view('admin.pagos.edit')
                                ->with('inscripcion',$inscripcion)
                                ->with('mes',$mes)
                                ->with('my_meses', $my_meses);
    }

     public function meses($id)
    {
        //dd($id);
        $inscripcion= Inscripcion::find($id);
        return view('admin.pagos.edit')->with('inscripcion',$inscripcion);
    }

   
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $mensualidad=Mensualidad::find($request->mensualidad_id);
        $mensualidad->fecha_corte_mensualidad= $request->fecha_corte_mensualidad;
        $mensualidad->save();

        $mensualidad->meses()->sync($request->meses);

        $inscripcion=new Inscripcion($request->all());
        $inscripcion->cliente_id= $request->cliente_id;
        $inscripcion->mensualidad_id= $request->mensualidad_id;
        $inscripcion->save();

        Flash::warning('El cliente '.$inscripcion->cliente->nombre. ' fue reinscrito en el sistema de manera exitosa');
        return redirect()->route('panel-de-administrador.pagos.show',$inscripcion->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
