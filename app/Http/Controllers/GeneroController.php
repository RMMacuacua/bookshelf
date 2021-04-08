<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genero;
use DB;
class GeneroController extends Controller
{
    public function create(){
        return view('backoffice.generos.criar');
    }

    public function store(Request $request){
        $gen = new Genero;
        $gen->nome = $request->name;
        $gen->save();
        $generos = Genero::all();
        return view('backoffice.generos.listar',compact('generos'));
    }

    public function show(){
        $generos = DB::table('generos')->get();
        return view('backoffice.generos.listar',compact('generos'));
    }
}
