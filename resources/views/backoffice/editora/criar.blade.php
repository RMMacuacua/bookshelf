@extends('backoffice.base')

@section('content')
<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Cre</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif            
                <div class="row">
                    <div class="col-6">
                        <form method="POST" action="{{ route('editora.guardar') }}">
                            @csrf
                            <input name="marker" value="selectModel" type="hidden">
                            <div class="form-group">
                                <label>Nome da Editora</label>
                                <input 
                                    type="text"
                                    placeholder="Table name"
                                    name="nome"
                                    class="form-control"
                                >
                            </div>
                            <div class="form-group">
                                <label>Endereço</label>
                                <input 
                                    type="text"
                                    placeholder="Table name"
                                    name="endereco"
                                    class="form-control"
                                >
                            </div>
                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Gravar
                            </button>
                            
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