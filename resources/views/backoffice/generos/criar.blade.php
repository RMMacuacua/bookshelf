@extends('backoffice.base')

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Criar Genero</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif            
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="{{ route('generos.guardar') }}">
                            @csrf
                            <input name="marker" value="selectModel" type="hidden">
                            <div class="form-group">
                                <label>Genero Literário</label>
                                <input 
                                    type="text" placeholder="genero" name="name" class="form-control"
                                >
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Guardar
                            </button>
                            <a 
                                href="{{ route('bread.index') }}"
                                class="btn btn-primary"
                            >
                                Return
                            </a>
                        </form>
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

    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/coreui-chartjs.bundle.js') }}"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection