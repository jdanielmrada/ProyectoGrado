<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

class CategoriesController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }
    public function index()
    {
        $categories= Category::orderby('id','name')->paginate(10);
        return view('admin.categories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category= new Category($request->all());
        $category->save();

        Flash::success("Fue añadida la categoria".$category->name);
        return redirect()->route('panel-de-administrador.categories.index');
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
        $category= Category::find($id);
        return view('admin.categories.edit')->with('category',$category);
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
        $category= Category::find($id);
        $category->fill($request->all());
        $category->save();

        Flash::info('Editada la categoria '.$category->name);
        return redirect()->route('panel-de-administrador.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category= Category::find($id);
        $category->delete();

        Flash::error('Eliminada la categoria '.$category->name);
        return redirect()->route('panel-de-administrador.categories.index');
    }
}
