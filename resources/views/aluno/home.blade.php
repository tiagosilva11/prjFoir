@extends('layouts.app')
@extends('layouts.menus')
@section('content')

<div class="container">
  <div class="">
    <a href="{{url('aluno/create')}}">
      <button type="" class="btn" name="button">Cadastrar</button>
    </a>
  </div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Nome de Guerra</th>
      <th scope="col">RE</th>
    </tr>
  </thead>
  <tbody>
    @foreach($alunos as $aluno)
    <tr>
      <th scope="row">{{$aluno->id}}</th>
      <th scope="row">{{$aluno->nome}}</th>
      <th scope="row">{{$aluno->nomeDeGuerra}}</th>
      <th scope="row">{{$aluno->re}}</th>
      <th>@if(checkPermission(['user']))
        <a href="{{url("observacao/$aluno->id/edit")}}">
          <button class="btn btn-primary">Inserir Observacao </button>
        </a>
        @endif
        @if(checkPermission(['admin']))
        <a href="{{url("aluno/$aluno->id/edit")}}">
          <button class="btn btn-primary">Editar</button>
        </a>

        <a href="{{url("observacao/$aluno->id/edit")}}">
          <button class="btn btn-primary">Editar</button>
        </a>
        @endif
      </th>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection
