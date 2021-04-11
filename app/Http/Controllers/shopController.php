<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use DB;

class shopController extends Controller
{
    public function home()
    {
        $livros = Livro::all();
        return view('loja.views.home',compact('livros'));
    }
    
    public function details($title)
    {
        $livro = Livro::where('titulo',$title)->first();
        return view('loja.views.detalhes',compact('livro'));

    }
}
