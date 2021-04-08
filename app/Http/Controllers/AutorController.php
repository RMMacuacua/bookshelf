<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function create(){
        return view('backoffice.autores.criar');
    }

    public function store(Request $request){
        $aut = new Autor();
        $aut->nome = $request->nome;
        $aut->descricao = $request->desc;
        $aut->save();

        $autores = Autor::all();
        return view('backoffice.autores.listar',compact('autores'));
    }

    public function show(){
        $autores = Autor::all();
        return view('backoffice.autores.listar',compact('autores'));
    }
}