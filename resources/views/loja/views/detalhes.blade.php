@include('loja.shared.scripts')
@include('loja.shared.header')

<?php
                    $arr = DB::table('imagens_livros')->select('imagem')->where('livro_id',$livro->id_livro)->first();
                    $autor = DB::table('autors')->where('id_autor',$livro->autor_id)->first();
                ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <img style="max-width:650px; max-height:650px" src="<?php echo "data:image/jpeg;base64,".$arr->imagem;?>"
            alt="Cinque Terre" class="c-avatar-img">    
    </div>
    <div class="row justify-content-center">
        <b >Autor: </b>
         
        <a   href="/loja/{{$autor->nome}}">
        {{$autor->nome}}       
        </a>
        
        
    </div>
    <input type="hidden" value="{{$autor->nome}}" id="autorname" >
        <input type="hidden" value="{{$livro->titulo}}" id="titulo" >
        <input type="hidden" value="{{$livro->preco}}" id="preco" >
        <input type="hidden" value="{{$livro->id_livro}}" id="idlivro" >
        <div class="row justify-content-center">
        <b class="row">
        {{$livro->titulo}}</b>
    </div>
    <div class="row justify-content-center">
        <p class="row col-6 textsize">
        {{$livro->sinopse}}</p>
    </div>
    <div class="row justify-content-center">
        <a type="button" class="btn btn" href="" onClick="addToCart('{!! $autor->nome !!}')">Add to cart</a>
        <a type="button" class="btn btn-warning" href="">Buy</a>
    </div>
    
</div>

