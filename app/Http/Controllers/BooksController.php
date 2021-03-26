<?php

namespace App\Http\Controllers;
use App\Books;
use Illuminate\Http\Request;
use DB;
use Auth;
class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request){
        
        $a = array(['autor' =>$request->autor,'titulo' => $request->titulo,'editora' => $request->editora, 'edicao' => $request->edi,
                'preco' => $request->preco, 'isbn' =>$request->isbn, 'genres_id'=> $request->genero,'registed_by'=>Auth::user()->id ]);
                DB::table('books')->insert($a);
    }

    public function index(){
        return view('backofice.books.listar');

    }

    public function registar(){
        $generos = DB::table('book_genres')->select('id','genres')->get();
        return view('backofice.books.create',compact('generos'));
    }

    public function listar(){
        $livros = Books::select('books.autor','books.titulo','books.isbn','books.preco','books.editora','book_genres.genres as genero','users.name as user')->join('book_genres','books.genres_id','=','book_genres.id')
        ->join('users','users.id','=','books.registed_by')->get();
       
        return view('backofice.books.listar',compact('livros'));
    }

}
