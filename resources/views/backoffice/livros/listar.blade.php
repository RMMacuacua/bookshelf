@extends('base')

@section('content')

<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Livros</h4></div>
            <div class="card-body">
                       
            <div class="display ">
            <table id="example" class="table table-responsive-sm table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>titulo</th>
                    <th>Autor</th>
                    <th>isbn</th>
                    <th>preco</th>
                    <th>genero</th>
                    <th>Reg. por</th>
                    <th>Ops</th>
                </tr>
            </thead>
            <tbody>
            @foreach($livros as $livro)
                <tr>
                    <td>{{$livro->titulo}}</td>
                    <td>{{$livro->autor_id}}</td>
                    <td>{{$livro->isbn}}</td>
                    <td>{{$livro->preco}}</td>
                    <td>{{$livro->genero_id}}</td>
                    <td>{{$livro->registado_por}}</td>
                    <td>
                      <a type="button" class="btn btn-secondary" href='{{url("/livro/{$livro->id_livro}/editar")}}'>
                      Modificar</a>
                      <a type="button" class="btn btn-danger" href='{{url("/livro/{$livro->id_livro}/eliminar")}}'>
                      eliminar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <div>
        <a href="{{route('livos.criar')}}" type="button" class="btn btn-secondary"> Reg Livro</a>
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

  
@endsection