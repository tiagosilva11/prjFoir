@extends('layouts.app')
@extends('layouts.menus')
@section('content')

<div class="container">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <div class="col-md">
    <form class="" name="formCad" id="formCada" action="{{url('alunos')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Nome aluno</label>
        <input type="text" name="nome" class="form-control" id="nome" value="" required>
      </div>
      <div class="form-group">
        <label for="name">Numero</label>
        <input type="text" name="numero_aluno" class="form-control" id="nomeDeGuerra" value="" required>
      </div>
      <div class="form-group">
        <label for="name">Nome de guerra</label>
        <input type="text" name="nomeDeGuerra" class="form-control" id="nomeDeGuerra" value="" required>
      </div>
      <div class="form-group">
        <label for="name">RE</label>
        <input type="text" name="re" id="re" class="form-control" value="" required>
      </div>
      <div class="form-group">
        <label for="name">Ativo</label>
        <select class="form-control" name="ativo" id="id_pelotao" required>
            <option value="1">Ativo</option>
            <option value="0">Inativo</option>
        </select>
      </div>
      <div class="form-group">
        <label for="name">Foto</label>
        <input type="file" class="form-control" name="foto" id="foto" value="" required>
      </div>
      <div class="form-group">
        <label for="name">Pelotao</label>
        <select class="form-control" name="id_pelotao" id="id_pelotao" required>
          <option value="">Selecione</option>
            @foreach($pelotaos as $pelotao)
              <option value="{{$pelotao->id}}">{{$pelotao->numeroPelotao}} - {{$pelotao->nomePelotao}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name">Data de Nascimento</label>
        <input type="date" name="dataNasc" class="form-control" id="dataNasc" value="" required>
      </div>
      <input type="submit"  name="" class="btn btn-primary" value="Cadastrar">
    </form>
  </div>
</div>

@endsection
