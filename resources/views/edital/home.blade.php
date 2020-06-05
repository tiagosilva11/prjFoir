@extends('layouts.app')
@extends('layouts.menus')
@section('content')

<div class="container">
  <br>
  <div class="">
    <a href="{{url('edital/create')}}">
      <button type="" class="btn btn-primary" name="button">Cadastrar novo edital</button>
    </a>
  </div>
<br>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Edital</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($editals as $edital)
    <tr>
      <th scope="row">{{$edital->id}}</th>
      <th scope="row">{{$edital->nomeEdital}}</th>
      <th>
        <a href="{{url("edital/$edital->id/edit")}}">
          <button class="btn btn-primary">Editar</button>
        </a>
        <a href="">
          <button class="btn btn-danger">Deletar</button>
        </a>
      </th>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection
