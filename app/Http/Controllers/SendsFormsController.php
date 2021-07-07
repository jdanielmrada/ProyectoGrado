<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\Mensaje;

class SendsFormsController extends Controller
{

    public function store(Request $request)
    {
     /*   Mail::send('email.contacto',$request->all(),function($msj){
            $msj->subject('Correo de contacto');
            $msj->to('jdani9417@gmail.com');
        });*/

        $mensaje= new Mensaje($request->all());
        $mensaje->save();

        return redirect()->route('welcome.index');
    }

}   
    