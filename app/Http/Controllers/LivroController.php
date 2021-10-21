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
    public function create(){
        $idiomas = Idioma::all();
        $generos = Genero::all();
        $editoras = Editora::all();
        $autores = Autor::all();
        return view('backoffice.livros.criar',compact('idiomas','generos','editoras','autores'));
    }

    public function store(Request $request){
       $this->validate($request, [
            'titulo' => 'required',
            'autor' => 'required',
            'isbn' =>  'required',
            'edicao'  =>  'required',
            'ano'  =>  'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'genero' => 'required',
            'idioma' => 'required',
            'editora' => 'required',
            'preco' => 'required|numeric'
        ]);

        if($request->id){
            $id = $request->id;
            $data = ['titulo' => $request->titulo, 'autor_id' => $request->autor,
                     'isbn' => $request->isbn, 'edicao' => $request->edicao,
                     'sinopse' => $request->sinopse, 'ano' => $request->ano,
                     'genero_id' => $request->genero, 'registado_por' => 5,
                     'idioma_id' => $request->idioma, 'preco'=> $request->preco,
                    'updated_at' => now()];
            Livro::where('id_livro',$id)->update($data);

            if($request->hasFile('capa')){
                $file = $request->file('capa');
                $data = file_get_contents($file);
                $img = base64_encode($data);
                DB::table('imagens_livros')->insert(['name' => "capa",'livro_id'=> $id,'imagem' => $img]);

            }


            $livros = DB::table('livros')->get();
            return view('backoffice.livros.listar',compact('livros'));
        }else{
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
                
                DB::table('imagens_livros')->insert(['name' => "capa",'livro_id'=> $livro->id,'imagem' => $img]);

            }

            $livros = DB::table('livros')->get();
            return view('backoffice.livros.listar',compact('livros'));
        }

    }

    public function show(){
        $livros = DB::table('livros')->get();
        return view('backoffice.livros.listar',compact('livros'));
    }

    public function edit($id)
    {
        $idiomas = Idioma::all();
        $generos = Genero::all();
        $editoras = Editora::all();
        $autores = Autor::all();
        $livro = Livro::where('id_livro',$id)->first();
        return view('backoffice.livros.editar',compact('idiomas','generos','editoras','autores','livro'));
    }

    public function eliminar($id)
    {
       if(Livro::where('id_livro',$id)->exists()){
            DB::table('imagens_livros')->where('livro_id',$id)->delete();
            $livro = Livro::where('id_livro',$id);
            $livro->delete();
            return back();
       }
        
    }

    
    function update(Request $request)
    {
        //var_dump($request);

    }
}
