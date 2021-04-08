<?php

namespace App\Http\Controllers;
use App\Models\Idioma;
use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    public function create(){
        return view('backoffice.idiomas.criar');
    }

    public function store(Request $request){
        $edi = new Idioma();
        $edi->nome = $request->nome;
        $edi->save();

        $idiomas = Idioma::all();
        return view('backoffice.idiomas.listar', compact('idiomas'));
    }


    public function show()
    {
        $idiomas = Idioma::all();
        return view('backoffice.idiomas.listar', compact('idiomas'));
    }
}
