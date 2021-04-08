<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class shopController extends Controller
{
    public function home()
    {
        $livros = Livro::all();
        return view('loja.views.home',compact('livros'));
    }
    
    public function details($title)
    {
        return view('loja.views.detalhes');

    }
}
