<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Compra;
use Auth;
use DB;

class CompraController extends Controller
{
    public function comprar(Request $request){
        $cart = json_decode($request->cart,true);
        $total_pagar = 0;
        $user_id = Auth::user()->id;
        $produtos = array();
        $contador = 1;
        //var_dump($cart);
        foreach($cart as $produto){
            $livro = Livro::where('id_livro',$produto["id"])->first();
            if($livro->quantidade < $produto["quantidade"]){
                echo "sem stock";
                break;
            }elseif($produto["quantidade"] == 0){
                //removeu do cart

            }else{
                //
                //var_dump($produto["id"]);
                Livro::where('id_livro',$produto["id"])->update(["quantidade" => ($livro->quantidade - $produto["quantidade"])]);
                $total_pagar = $total_pagar + $produto["quantidade"] * $produto["preco"];
                $produtos[$contador] = $produto;
                $contador++;
            }
        }


        if($contador > 0){
            echo $contador; 
            DB::table("compras")->insert([
                "user_id" => $user_id, "data_compra" => now(),"quantidade" => 2,
                "produtos"=>  json_encode($produtos),"created_at" => now(), "total" => $total_pagar]);
        }
        
        ///return "slajknilk";
    }

    public function ver()
    {
        var_dump(DB::table("compras")->insert(["user_id" => 19, "produtos"=>json_encode(array(1,2,3)),"quantidade" => 2, "data_compra" => now(), "total" => 40]));
        echo "sim";
        # code...
    }
}
