<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mensaje;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

class MensajesController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }
    public function index()
    {
        $mensajes= Mensaje::orderBy('id','DESC')->paginate(10);
        return view('admin.mensajes.index')->with('mensajes',$mensajes);

    }

    public function destroy($id)
    {
        $mensaje= Mensaje::find($id);
            $mensaje->delete();

        Flash::error('Eliminado el mensaje numero '. $mensaje->id);

        return redirect()->route('panel-de-administrador.mensajes.index');
    }
}
