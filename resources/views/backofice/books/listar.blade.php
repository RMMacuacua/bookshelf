@include('header')
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

<html>
<div class="row justify-content-center">
    
    <div class="display col-md-8">
        <table id="example" class="display col-md-8" >
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
                    <td>{{$livro->autor}}</td>
                    <td>{{$livro->isbn}}</td>
                    <td>{{$livro->preco}}</td>
                    <td>{{$livro->genero}}</td>
                    <td>{{$livro->user}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <div>
        <a href="{{route('registarlivros')}}" class="buttonx"> Reg Livro</a>
        </div>
    </div>
    
    
</div>

</html>
