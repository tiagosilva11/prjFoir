@extends('layouts.app')
@extends('layouts.menus')
@section('content')


<div class="container">
  <div class="col-md">
    <form class="" name="formEdit" id="formEdit" method="POST" action="{{url("alunos/$aluno->id")}}">
      {{ csrf_field() }}
      {{ method_field('PUT')}}
      <div class="form-group">
        <label for="name">Nome aluno</label>
        <input type="text" name="nome" id="nome" value="{{$aluno->nome}}" required>
      </div>
      <div class="form-group">
        <label for="name">Nome de guerra</label>
        <input type="text" name="nomeDeGuerra" id="nomeDeGuerra" value="{{$aluno->nomeDeGuerra}}" required>
      </div>
      <div class="form-group">
        <label for="name">RE</label>
        <input type="text" name="re" id="re" value="{{$aluno->re}}" required>
      </div>

      <div class="form-group">
        <label for="name">Pelotao</label>
        <select class="" name="id_pelotao" id="id_pelotao" required>

          @foreach($pelotao as $pelotaos)
            <option value="{{$pelotaos->id}}">{{$pelotaos->numeroPelotao}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name">Data de nascimento</label>
        <input type="date" name="dataNasc" id="dataNasc" value="{{$aluno->dataNasc}}" required>
      </div>
      <input type="submit" class="btn" name="" value="Cadastrar">
      </form>
    </div>
  </div>
@endsection
