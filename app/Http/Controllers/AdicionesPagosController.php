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

class AdicionesPagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        $inscripcion= Inscripcion::find($id);
        $mes= Mes::orderBy('id','ASC')->lists('mes','id');
        $my_meses=$inscripcion->mensualidad->meses->lists('id')->ToArray();
        return view('admin.pagos.adicion')
                                ->with('inscripcion',$inscripcion)
                                ->with('mes',$mes)
                                ->with('my_meses', $my_meses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id ttp\Responsea
     */
    public function update(Request $request, $id)
    {
        //dd($request->mensualidad_id);
        $mensualidad=Mensualidad::find($request->mensualidad_id);
        $mensualidad->fecha_corte_mensualidad= $request->fecha_corte_mensualidad;
        $mensualidad->save();

        $mensualidad->meses()->sync($request->meses);

        $inscripcion= Inscripcion::find($request->inscripcion_id);
        $inscripcion->fill($request->all());
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
        //
    }
}
