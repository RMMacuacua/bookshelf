@include('loja.shared.header')

<div class="container">
  <div class="row row-cols-4">
  @foreach($livros as $livro)
    <div class="col-sm-4 col-md-3">
      <a href="/loja/{{$livro->titulo}}/detalhes">
        <div class="card">
          <div class="card-body border: none">
            <div class="row justify-content-center">
              <?php
                $arr = DB::table('imagens_livros')->select('imagem')->where('livro_id',$livro->id_livro)->first();
              ?>
              
              <img style="max-width:250px; max-height:250px" src="<?php echo "data:image/jpeg;base64,".$arr->imagem;?>"
                                    alt="Cinque Terre" class="c-avatar-img">

            </div>
            <div class="row justify-content-center">
              {{$livro->titulo}}
            </div>
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