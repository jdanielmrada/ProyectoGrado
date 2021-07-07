<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Block;
use App\User;
use Laracasts\Flash\Flash;
use Carbon\Carbon;

class BlockController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }
    public function index()
    {
        $blocks= Block::orderBy('id','DESC')->paginate(10);
        $blocks->each(function($blocks){
            $blocks->user;
        });
         
        return view('block.index')->with('blocks',$blocks);
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
        $block=new Block($request->all());
      //  dd($request->all());
        $block->asunto = $request->asunto;
        $block->description = $request->description;
        $block->user_id = $request->user_id;
        $block->save();

        Flash::success('Usted ha publicado satifactoriamente');
        return redirect()->route('panel-de-administrador.block.index');
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
        $block= Block::find($id);
        return view('block.edit')->with('block',$block);
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
        $block= Block::find($id);
        $block->asunto= $request->asunto;
        $block->description= $request->description;
        
        $block->save();

        Flash::warning('Se ha editado la publicación satifactoriamente');
        return redirect()->route('panel-de-administrador.block.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        $block= Block::find($id);
        $block->delete();

        Flash::error('Usted  ha eliminado el comentario satifactoriamente');

        return redirect()->route('panel-de-administrador.block.index');
    }
}
