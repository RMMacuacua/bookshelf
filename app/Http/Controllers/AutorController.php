<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;
use DB;
class AutorController extends Controller
{
    public function create(){
        return view('backoffice.autores.criar');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nome' => "required",
            'desc' => "required"
        ]);


        if($request->id){
            $id = $request->id;
            $data = ['nome' => $request->nome, 'descricao' => $request->desc, "updated_at" => now() ];
            $update = DB::table('autors')->where('id_autor',$id)->update($data);
            if($update){
                $autores = Autor::all();
                return view('backoffice.autores.listar',compact('autores'));
            }
            
        }else{
            
            $aut = new Autor();
            $aut->nome = $request->nome;
            $aut->descricao = $request->desc;
            $aut->save();

            $autores = Autor::all();
            return view('backoffice.autores.listar',compact('autores'));
        }
    }

    public function show(){
        $autores = Autor::all();
        return view('backoffice.autores.listar',compact('autores'));
    }

    public function delete($id)
    {
        $autor = DB::table('autors')->where('id_autor',$id)->select('nome','id_autor','descricao')->first();
        if(Autor::where('id_autor',$id)->exists()){
            $ver_livros = DB::table('livros')->where('autor_id',$id)->exists();
            if($ver_livros){
                toastr()->error('Este Ator não pode ser eliminado pos já está associado a um Livro');
                return back();
            }else{
                //toastr()->error('An error has occurred please try again later.');
                //toastr()->error('','este canal não existe', ['timeOut' => 3000,'closeButton'=> true]);
                DB::table('autors')->where('id_autor',$id)->delete();
                $autores = Autor::all();
                return view('backoffice.autores.listar',compact('autores'));
            }
        }else{
            toastr()->error('Este Ator não existe');
            return back();
        }
    }

    public function edit($id)
    {
        $autor = DB::table('autors')->where('id_autor',$id)->first();
        return view('backoffice.autores.editar',compact('autor'));
    }
}