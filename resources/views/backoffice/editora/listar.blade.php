@extends('base')

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Cre</h4></div>
            <div class="card-body">
                       
            <div class="display col-md-12">
            <table id="example" class="table table-responsive-sm table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>NOME</th>
                            <th>endereco</th>
                            <th>Contacto</th>
                            <th>Operações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($editoras as $editora)
                        <tr>
                        <td>
                            {{$editora->nome}}
                        </td>
                        <td>
                            {{$editora->endereco}}
                        </td>
                        <td>
                            {{$editora->contacto}}
                        </td>
                        <td>
                        <a type="button" class="btn btn-secondary" href='{{url("/editora/{$editora->id_editora}/editar")}}'>
                              Modificar</a>
                              <a type="button" class="btn btn-danger" href='{{url("/editora/{$editora->id_editora}/eliminar")}}'>
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

 
@endsection