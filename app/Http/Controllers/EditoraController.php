<?php

namespace App\Http\Controllers;
use App\Models\editora;
use Illuminate\Http\Request;
use DB;

class EditoraController extends Controller
{
    public function create(){
        return view('backoffice.editora.criar');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nome' => "required",
            'endereco' => "required",
            'contactos' => "required"
        ]);


        if($request->id){
            $id = $request->id;
            $data = ['nome' => $request->nome, 'endereco' => $request->endereco,
                     'contactos' =>  $request->contactos, 'updated_at' => now()];
            $update = DB::table('editoras')->where('id_editora',$id)->update($data);
            if($update){
                $editoras = Editora::all();
                return view('backoffice.editora.listar',compact('editoras'));
            }
        }else{
            $edi = new Editora();
            $edi->nome = $request->nome;
            $edi->endereco = $request->endereco;
            $edi->contactos = $request->contactos;
            $edi->save();        
            $editoras = Editora::all();
            return view('backoffice.editora.listar',compact('editoras'));
        }

    }

    public function show(){
        $editoras = Editora::all();
        return view('backoffice.editora.listar',compact('editoras'));
    }

    public function edit($id){
        $editora = Editora::where('id_editora',$id)->first();
        return view('backoffice.editora.editar',compact('editora'));        
    }

    public function delete($id){
        $editora = Editora::where('id_editora',$id)->first();
       
        if(Editora::where('id_editora',$id)->exists()){
            $livro = DB::table('livros')->where('id_editora',$id)->exists();
            if($livro){
                toastr()->error('Esta Editora não pode ser eliminada pois está associado a um ou mais livros livro');
                return back();
            }else{
                Editora::where('id_editora',$id)->delete();
                $editoras = Editora::all();
                return view('backoffice.editora.listar',compact('editoras'));
            }
        }else{
            toastr()->error('Esta Editora não existe');
            return back();
        }
    }
}
