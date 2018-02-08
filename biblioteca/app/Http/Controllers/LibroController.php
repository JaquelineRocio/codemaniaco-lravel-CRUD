<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libro;

class LibroController extends Controller
{
    //
    public function create(Request $request){
        $libro=new Libro();

        $libro->titulo = $request->titulo;
        $libro->autor=$request->autor;
        $libro->area=$request->area;

        $libro -> save();
        return redirect('/inicio');
    }
    public function read(Request $request){
        $libro=Libro::all();
        return view ('vista',['libros'=>$libro]);
    }

}
