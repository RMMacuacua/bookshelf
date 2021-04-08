@extends('base')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Cre</h4></div>
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
                </tr>
            </thead>
            <tbody>
            @foreach($livros as $livro)
                <tr>
                    <td>{{$livro->titulo}}</td>
                    <td>{{$livro->autor_id}}</td>
                    <td>{{$livro->isbn}}</td>
                    <td>3333</td>
                    <td>{{$livro->genero_id}}</td>
                    <td>{{$livro->registado_por}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <div>
        <a href="{{route('livos.criar')}}" class="buttonx"> Reg Livro</a>
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