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
use App\Article;
use App\Category;
use App\Image;
use App\Block;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class ClientTrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles= Article::orderBy('id','DESC')->paginate(4);
        $articles->each(function($articles){
            $articles->images;
            $articles->user;
        });
        $blocks= Block::orderBy('id','DESC')->paginate(10);
        $blocks->each(function($blocks){
            $blocks->user;
        });
        return view('clientANDtrainer.index')
                    ->with('articles',$articles)
                    ->with('blocks',$blocks)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::orderBy('name','ASC')->lists('name','id');
        return view('clientANDtrainer.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article= new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->save();
        //dd($request->file('image'));
        //Manipuración de archivo
        if($request->file('image')){
            $file= $request->file('image');
            $count =count($file);
            for ($i=0; $i < $count ; $i++) { 
                $foto = $file[$i];
                $name= uniqid();
                $path= public_path() . '/image/articles/';
                $foto->move($path, $name);
                //dd($foto);

                $image= new Image();
                $image->name= $name;
                $image->article()->associate($article);
                $image->save();
            }
        }
        Flash::success('Ha sido creado el articulo '.$article->title);
            return redirect()->route('welcome.galeria');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user= User::find($id);
        $user->articles;
        return view('clientANDtrainer.index')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article= Article::find($id);
        $categories= Category::orderBy('name','DESC')->lists('name','id');
        return view('clientANDtrainer.edit')
                    ->with('article',$article)
                    ->with('categories',$categories);
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
        $article= Article::find($id);
        $article->fill($request->all());
        $article->save();

        Flash::info('Editado el articulo '.$article->title);
        return redirect()->route('welcome.galeria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article= Article::find($id);
        $article->delete();

        Flash::error('Se ha eliminado el articulo '.$article->title);
        return redirect()->route('panel-de-administrador.articles.index');
    }
}
