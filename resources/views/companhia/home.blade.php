@extends('layouts.app')
@extends('layouts.menus')
@section('content')

<div class="container">
  <div class="">
    <a href="{{url('companhia/create')}}">
      <button type="" class="btn" name="button">Cadastrar</button>
    </a>
  </div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Companhia</th>
      <th scope="col">Edital</th>
    </tr>
  </thead>
  <tbody>
    @foreach($companhias as $companhia)
      @php
      $edital=$companhia->find($companhia->id_edital)->relEditals;
      @endphp
    <tr>
      <th scope="row">{{$companhia->id}}</th>
      <th scope="row">{{$companhia->name}}</th>
      <th scope="row">{{$edital->nomeEdital}}</th>
      <th>
        <a href="{{url("companhia/$companhia->id/edit")}}">
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
