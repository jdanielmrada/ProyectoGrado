<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Category;
use App\Image;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }
   
    public function index()
    {
        return view('welcome');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function ingreso(){
        return view('ingreso');
    }

    public function galeria()
    {
        $articles= Article::orderBy('id','DESC')->paginate(4);
        $articles->each(function($articles){
            $articles->images;
        });
        return view('galeria')->with('articles',$articles);
    }

    public function searchCategory($name){
        $category= Category::searchCategory($name)->first();
        $articles= $category->articles()->paginate(4);

        return view('galeria')->with('articles',$articles);
    }

    public function detalle($id){
        $article= Article::find($id);
        return view('detalle')->with('article', $article);
    }

    public function store(Request $request)
    {
        //
    }

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
