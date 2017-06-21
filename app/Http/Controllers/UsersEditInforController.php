<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dato;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

class UsersEditInforController extends Controller
{
    
    public function update(Request $request, $id)
    {
        $dato= Dato::find($id);
        $dato->fill($request->all());
        $dato->save();

        Flash::warning('El dato '.$dato->nombre. ' fue modificado de manera exitosa');
        return redirect()->route('panel-de-administrador.users.informacion',$dato->id);
    }

}
