@extends('base')

@section('content')

<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Actualizar Livro</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif            
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="{{ route('livros.guardar') }}" enctype="multipart/form-data">
                            @csrf
                            <input name="id" value="{{$livro->id_livro}}" type="hidden">
                            <div class="form-group">
                                <label>Titulo do livro</label>
                                <input type="text" placeholder="Titulo" name="titulo" id="titulo" class="form-control"
                                value="{{$livro->titulo}}"
                                >
                            </div>
                            <div class="form-group">
                                <label>Autor</label>
                                <select class="form-control js-example-basic-single" id="autor" name="autor">
                                        <option value="">@lang('selecionar')...</option>  
                                        @foreach($autores as $autor)                                         
                                        <option value="{{$autor->id_autor}}"
                                            @if($livro->autor_id == $autor->id_autor)
                                            selected
                                            @endif
                                        >
                                            {{$autor->nome}}
                                        </option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Genero</label>
                                    <select class="form-control js-example-basic-single" id="genero" name="genero">
                                        <option value="">@lang('selecionar')...</option>  
                                        @foreach($generos as $gen)                                         
                                        <option value="{{$gen->id_genero}}"
                                            @if($livro->genero_id == $gen->id_genero)
                                            selected
                                            @endif
                                        >
                                            {{$gen->nome}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Idioma</label>
                                    <select class="form-control js-example-basic-single" id="idioma" name="idioma">
                                        <option value="">@lang('selecionar')...</option>  
                                        @foreach($idiomas as $idioma)                                          
                                        <option value="{{$idioma->id_idioma}}"
                                        @if($livro->idioma_id == $idioma->id_idioma)
                                        selected
                                        @endif
                                        >
                                            {{$idioma->nome}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Editora</label>
                                    <select class="form-control js-example-basic-single" id="editora" name="editora">
                                        <option value="">@lang('selecionar')...</option>    
                                        @foreach($editoras as $editora)                                        
                                        <option value="{{$editora->id_editora}}"
                                        @if($livro->editora_id == $editora->id_editora)
                                        selected
                                        @endif
                                        >
                                                {{$editora->nome}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>ISBN</label>
                                    <input 
                                        type="text" placeholder="Table name" name="isbn" class="form-control"
                                        value="{{$livro->isbn}}"
                                    >
                                </div>
                            </div>
                            <div class="row">
                            
                                <div class="form-group col-4">
                                    <label>Capa</label>
                                    <input type="file" class="form-control-file" name="capa">
                                </div>
                            <div class="form-group col-2">
                                <label>Preço</label>
                                <input 
                                    type="text"
                                    placeholder="Table name"
                                    name="preco"
                                    class="form-control"
                                    value="{{$livro->preco}}"
                                >
                            </div>
                                <div class="form-group col-3">
                                    <label>Edição</label>
                                    <input 
                                        type="text"
                                        placeholder="Edicao"
                                        name="edicao"
                                        class="form-control"
                                        value="{{$livro->edicao}}"
                                    >
                                </div>
                                <div class="form-group col-3">
                                    <label>Ano</label>
                                    <input 
                                        type="text"
                                        placeholder="ano"
                                        name="ano"
                                        class="form-control"
                                        value="{{$livro->ano}}"
                                    >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Sinopse</label>
                                <textarea class="form-control" rows="9"                       
                                    placeholder="sinopse"
                                    name="sinopse"
                                    class="form-control"
                                    >
                                {{$livro->sinopse}}
                                </textarea>
                            </div>



                            <button  type="submit" class="btn btn-primary" >
                                Gravar
                            </button>
                            <a 
                                href="{{ route('bread.index') }}"
                                class="btn btn-primary"
                            >
                                Return
                            </a>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('javascript')

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection