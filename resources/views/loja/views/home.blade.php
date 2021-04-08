@include('loja.shared.header')

<div class="container">
  <div class="row row-cols-4">
  @foreach($livros as $livro)
    <div class="col-sm-4 col-md-3">
      <a href="/loja/{{$livro->titulo}}/detalhes">
        <div class="card">
          <div class="card-body ">
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
          

          </div>
          <div class="card-footer">
              {{$livro->preco}}
</div>
        </div>
      </a>
    </div> 
  @endforeach   
  </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"><\/script>')</script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.jss"></script>
</html>