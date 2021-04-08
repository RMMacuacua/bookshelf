<?php

namespace App\Http\Controllers;
use App\Models\editora;
use Illuminate\Http\Request;

class EditoraController extends Controller
{
    public function create(){
        return view('backoffice.editora.criar');
    }

    public function store(Request $request){
        $edi = new Editora();
        $edi->nome = $request->nome;
        $edi->endereco = $request->endereco;
        $edi->save();
        $editoras = Editora::all();
        return view('backoffice.editora.listar',compact('editoras'));
    }

    public function show(){
        $editoras = Editora::all();
        return view('backoffice.editora.listar',compact('editoras'));
    }
}
