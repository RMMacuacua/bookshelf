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
                            <th>Idioma</th>
                            <th>Idioma</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($idiomas as $idioma)
                        <tr>
                          <td>
                              {{$idioma->nome}}
                          </td> 
                          <td></td> 
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