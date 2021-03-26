@include('header')
<div class="col-md-6 align-content: center;">

<form method="POST" action="{{route('livros.gravar')}}" enctype="multipart/form-data">
@csrf

  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do Livro">
  </div>
  <div class="form-group">
    <label for="autor">Autor</label>
    <input type="name" class="form-control" id="autor" name="autor" placeholder="Autor do livro">
  </div>
  <div class="form-group">
    <label for="editora">Editora</label>
    <input type="test" class="form-control" id="editora" name="editora" placeholder="Editora">
  </div>
  <div class="form-group">
    <label for="edi">Edicao</label>
    <input type="test" class="form-control" id="edi" name="edi" placeholder="Edicao">
  </div>
  <div class="form-group">
    <label for="preco">Preço</label>
    <input type="text" class="form-control" id="preco" name="preco" placeholder="preco">
  </div>
  <div class="form-group">
    <label for="isbn">ISBN</label>
    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Isbn">
  </div>

  <div class="form-group">
    <label for="genero">Genero</label>
    <select class="form-control" id="genero" name="genero">
      <option>33</option>
      @foreach($generos as $gen)
      <option value={{$gen->id}}>{{$gen->genres}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit">
    Feito
  </button>
  <input type="submit" value="Submit">
</form>

</div>