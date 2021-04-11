@extends('base')

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Users</h4></div>
            <div class="card-body">
                       
            <div class="display col-md-12">
            <table id="example" class="table table-responsive-sm table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>N. Utilizador</th>
                            <th>email</th>
                            <th>role</th>
                            <th>operacoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td>
                              {{$user->name}}
                          </td> 
                          <td>
                              {{$user->email}}
                          </td> 
                          <td>
                              {{$user->menuroles}}
                          </td> 
                          <td>
                            <a type="button" class="btn btn-secondary" href=''>
                              Modificar</a>
                            <a type="button" class="btn btn-danger" href='{{url("/users/{$user->id}/eliminar")}}'>
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