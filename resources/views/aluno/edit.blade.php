@extends('layouts.app')
@extends('layouts.menus')
@section('content')


<div class="container">
  <br>
    <form class="" name="formEdit" id="formEdit" method="POST" action="{{url("alunos/$aluno->id")}}">
      {{ csrf_field() }}
      {{ method_field('PUT')}}
      <div class="form-group">
        <label for="name">Nome aluno</label>
        <input type="text" name="nome" class="form-control" id="nome" value="{{$aluno->nome}}" required>
      </div>
      <div class="form-group">
        <label for="name">Numero</label>
        <input type="text" name="numero_aluno" class="form-control" id="nomeDeGuerra" value="{{$aluno->numero_aluno}}" required>
      </div>
      <div class="form-group">
        <label for="name">Nome de guerra</label>
        <input type="text" name="nomeDeGuerra" class="form-control" id="nomeDeGuerra" value="{{$aluno->nomeDeGuerra}}" required>
      </div>
      <div class="form-group">
        <label for="name">RE</label>
        <input type="text" name="re" id="re" class="form-control" value="{{$aluno->re}}" required>
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
          @foreach($pelotaos as $pelotao)
          <option value="{{$aluno->id_pelotao}}">{{$pelotao->numeroPelotao}} - {{$pelotao->nomePelotao}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name">Data de Nascimento</label>
        <input type="date" name="dataNasc" class="form-control" id="dataNasc" value="{{$aluno->dataNasc}}" required>
      </div>
      <input type="submit"  name="" class="btn btn-primary" value="Cadastrar">
      </form>
  </div>
@endsection
