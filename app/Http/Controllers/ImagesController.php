<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;
use Carbon\Carbon;

class ImagesController extends Controller
{
    public function __construct(){
        Carbon::setLocale('es');
    }
    public function index()
    {
        $images= Image::all();
        return view('admin.images.index')->with('images',$images);
    }

}