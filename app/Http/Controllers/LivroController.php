<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;
use App\Models\Idioma;
use App\Models\Editora;
use App\Models\Livro;
use App\Models\Autor;
use Auth;
use DB;

class LivroController extends Controller
{
    /*
    $table->bigIncrements('id_livro');
            $table->string('titulo')->unique();
            $table->string('isbn');
            $table->string('edicao');
            $table->longText('sinopse');
            $table->year('ano');
            $table->bigInteger('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id_autor')->on('autors');
            $table->bigInteger('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id_genero')->on('generos');
            $table->bigInteger('registado_por')->unsigned();
            $table->foreign('registado_por')->references('id')->on('users');
            $table->bigInteger('idioma_id')->unsigned();
            $table->foreign('idioma_id')->references('id_idioma')->on('idiomas');
            $table->bigInteger('editora_id')->unsigned();
            $table->foreign('editora_id')->references('id_editora')->on('editoras');
    */

    public function create(){
        $idiomas = Idioma::all();
        $generos = Genero::all();
        $editoras = Editora::all();
        $autores = Autor::all();
        return view('backoffice.livros.criar',compact('idiomas','generos','editoras','autores'));
    }

    public function store(Request $request){
        $livro = new Livro();

        $livro->titulo = $request->titulo;
        $livro->autor_id = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->edicao = $request->edicao;
        $livro->sinopse = $request->sinopse;
        $livro->ano = $request->ano;
        $livro->genero_id = $request->genero;
        $livro->registado_por = Auth::user()->id;
        $livro->idioma_id = $request->idioma;
        $livro->editora_id = $request->editora;
        $livro->preco = $request->preco;
        $livro->save();
        if($request->hasFile('capa')){
            $file = $request->file('capa');
            $data = file_get_contents($file);
            $img = base64_encode($data);
            echo $img;
            DB::table('imagens_livros')->insert(['name' => "capa",'livro_id'=> $livro->id,'imagem' => $img]);

        }
        /*
        */
        //var_dump($livro);

    }

    public function show(){
        $livros = DB::table('livros')->get();
        return view('backoffice.livros.listar',compact('livros'));
    }
}
