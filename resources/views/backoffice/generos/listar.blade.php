@extends('base')

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Cre</h4></div>
            <div class="card-body">
                       
            <div class="display col-md-8">
                <table id="example" class="display col-md-8" >
                    <thead>
                        <tr>
                            <th>Genero</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($generos as $genero)
                        <td>
                            {{$genero->nome}}
                        </td>
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

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script>
        src = "https://code.jquery.com/jquery-3.5.1.js";
        src = "https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js";
        src = "https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css";


        $(document).ready(function() {
            $('#example').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "../server_side/scripts/server_processing.php"
            } );
        } );
    </script>
@endsection