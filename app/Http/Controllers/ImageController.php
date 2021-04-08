<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function guardar($file,$id_book)//inserir o nome da imagem
    {
        
        $data = file_get_contents($file);
        $img = base64_encode($data);
        
        
    }
}
