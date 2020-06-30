@extends('layouts.app')
@extends('layouts.menus')
@section('content')

<div class="container">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <form class="" name="formCad" id="formCada" action="{{url('pelotaos')}}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Numero do pelotao</label>
        <input type="text" class="form-control" name="numeroPelotao" id="numeroPelotao" value="" required>
      </div>
      <div class="form-group">
        <label for="name">Nome do pelotao</label>
        <input type="text" class="form-control" name="nomePelotao" class="form-group" id="nomePelotao" value="" required>
      </div>
      <div class="form-group">
        <label for="name">Comandante</label>
        <input type="text" name="comandante" id="comandante" class="form-control" value="" required>
      </div>
      <div class="form-group">
        <label for="name">Companhia</label>
        <select class="form-control" name="id_companhia" id="id_companhia" required>
          <option value="">Selecione</option>
            @foreach($companhias as $companhia)
              <option value="{{$companhia->id}}">{{$companhia->name}} Cia Escola</option>
            @endforeach
        </select>
      </div>
      <input type="submit" class="btn btn-primary" name="" value="Cadastrar">
    </form>
</div>

@endsection
