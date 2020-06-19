@extends('layouts.app')
@extends('layouts.menus')
@section('content')

<div class="container">
  @if(checkPermission(['admin']))
  <div class="">
    <a href="{{url('aluno/create')}}">
      <button type="" class="btn btn-primary" name="button">Cadastrar</button>
    </a>
  </div>
  @endif
<br>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Nome</th>
      <th scope="col">Nome de Guerra</th>
      <th scope="col">RE</th>
      <th scope="col">Status</th>
      @if(checkPermission(['admin']))
      <th scope="col">Pelotao</th>
      @endif
      <th scope="col">Açoes</th>
    </tr>
  </thead>
  <tbody>
    @foreach($alunos as $aluno)
    @if(checkPermission(['admin']))
      @php
      $pelotaos=$aluno->find($aluno->id)->relAlunosPel;
      @endphp
    @endif
    <tr>
      <th scope="row">{{$aluno->numero_aluno}}</th>
      <th scope="row">{{$aluno->nome}}</th>
      <th scope="row">{{$aluno->nomeDeGuerra}}</th>
      <th scope="row">{{$aluno->re}}</th>
      <th scope="row">{{$aluno->ativo == 1 ? 'Ativo' : 'Inativo'}}</th>
      @if(checkPermission(['admin']))
      <th scope="row">{{$pelotaos->nomePelotao}}</th>
      @endif
      <th>@if(checkPermission(['user']))
        <a href="{{url("observacao/$aluno->id/edit")}}">
          <button class="btn btn-primary">Inserir Observacao </button>
        </a>
        @endif
        @if(checkPermission(['admin']))
        <a href="{{url("aluno/$aluno->id/edit")}}">
          <button class="btn btn-primary">Editar</button>
        </a>

        <a href="{{url("")}}">
          <button class="btn btn-danger">Deletar</button>
        </a>
        @endif
      </th>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection
