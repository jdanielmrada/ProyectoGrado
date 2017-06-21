<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Dato;
use Laracasts\Flash\Flash;
use Carbon\Carbon;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }

    public function index()
    {
        $users= User::orderby('id','ASC')->paginate(5);
        return view('admin.users.index')->with('users',$users);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function edit($id)
    {
        $user= User::find($id);
        return view('admin.users.edit')->with('user',$user);
    }

    public function informacion($id)
    {
        $user= User::find($id);
        return view('admin.users.informacion')->with('user',$user);
    }

    public function inforedit($id){
        $dato= Dato::find($id);
        return view('admin.users.inforedit')->with('dato',$dato);
    }

    public function store(UserRequest $request)
    {

        $dato= new Dato($request->all());
        $dato->save();

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->dato()->associate($dato);
        $user->save();

        Flash::success("Ya ".$user->name." es parte de la familia Tauro");
        return redirect()->route('panel-de-administrador.users.index');
    }


    public function update(Request $request, $id)
    {
        $user= User::find($id);
        $user->email= $request->email;
        $user->role= $request->role;
        $user->save();

        Flash::warning('El usuario '.$user->name. ' fue modificado de manera exitosa');
        return redirect()->route('panel-de-administrador.users.index');
    }

    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();

        Flash::error('El usuario ' .$user->name. ' ha sido eliminado de manera exitosa');
        return redirect()->route('panel-de-administrador.users.index');
    }
}
