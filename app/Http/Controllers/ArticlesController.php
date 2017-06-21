<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Image;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }
    public function index(Request $request)
    {
        $articles= Article::Search($request->title)->orderBy('id','DESC')->paginate(10);
        $articles->each(function($articles){
            $articles->category;
            $articles->user;
        });
        return view('admin.articles.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::orderBy('name','ASC')->lists('name','id');
        return view('admin.articles.create')->with('categories',$categories);
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

            /*foreach($file as $files){
                
                $name= 'articles_' . time() . '.' .$files->getClientOriginalExtension();
                $path= public_path() . '/image/articles/';
                $files->move($path, $name);
            }*/
         //   $name= 'articles_' . time() . '.' .$file->getClientOriginalExtension();
            
        //    $file->move($path, $name);
           // dd($count);
            
        }
        
            
       // dd($article);
            

            Flash::success('Ha sido creado el articulo '.$article->title);
            return redirect()->route('panel-de-administrador.articles.index'); 

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
        $article= Article::find($id);
        $categories= Category::orderBy('name','DESC')->lists('name','id');
        return view('admin.articles.edit')
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
        return redirect()->route('panel-de-administrador.articles.index');
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
