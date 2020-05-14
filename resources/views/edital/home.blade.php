@extends('layouts.app')
@extends('layouts.menus')
@section('content')

<div class="container">
  <div class="">
    <a href="{{url('edital/create')}}">
      <button type="" class="btn" name="button">Cadastrar</button>
    </a>
  </div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Edital</th>
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
