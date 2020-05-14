@extends('layouts.app')
@extends('layouts.menus')
@section('content')
<div class="container">
  <div class="col-md">
    <form class="" name="formCad" id="formCada" action="{{url('alunos')}}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Nome aluno</label>
        <input type="text" name="nome" id="nome" value="" required>
      </div>
      <div class="form-group">
        <label for="name">Nome de guerra</label>
        <input type="text" name="nomeDeGuerra" id="nomeDeGuerra" value="" required>
      </div>
      <div class="form-group">
        <label for="name">RE</label>
        <input type="text" name="re" id="re" value="" required>
      </div>
      <div class="form-group">
        <label for="name">Pelotao</label>
        <select class="" name="id_pelotao" id="id_pelotao" required>
          <option value="">Selecione</option>
            @foreach($pelotaos as $pelotao)
              <option value="{{$pelotao->id}}">{{$pelotao->numeroPelotao}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="name">Data de Nascimento</label>
        <input type="date" name="dataNasc" id="dataNasc" value="" required>
      </div>
      <input type="submit" class="btn" name="" value="Cadastrar">
    </form>
  </div>
</div>

@endsection
