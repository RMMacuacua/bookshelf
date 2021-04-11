@extends('base')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>
      <div class="container-fluid">
        <div class="fade-in">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header"><h4>Autores</h4></div>
                  <div class="card-body">
                            
                  <div class="display ">
                  <table id="example" class="table table-responsive-sm table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Operaçoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($autores as $autor)
                        <tr>
                            <td>{{$autor->nome}}</td>
                            <td>{{$autor->descricao}}</td>
                            
                            <td>
                              <a type="button" class="btn btn-secondary" href='{{url("/autor/{$autor->id_autor}/editar")}}'>
                              Modificar</a>
                              <a type="button" class="btn btn-danger" href='{{url("/autor/{$autor->id_autor}/eliminar")}}'>
                              eliminar</a>
                            </td>
                        </tr>                        
                        @endforeach
                    </tbody>
                </table>
        <br>
        
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.js.map"></script>
@endsection