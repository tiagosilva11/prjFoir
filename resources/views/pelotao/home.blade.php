@extends('layouts.app')
@extends('layouts.menus')
@section('content')

<div class="container">
  <div class="">
    <a href="{{url('pelotao/create')}}">
      <button type="" class="btn" name="button">Cadastrar</button>
    </a>
  </div>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Numero Pelotão</th>
      <th scope="col">Nome Pelotão</th>
      <th scope="col">Comandante</th>
      <th scope="col">Companhia</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pelotaos as $pelotao)
      @php
      $companhia=$pelotao->find($pelotao->id_companhia)->relPelotaos;
      @endphp
    <tr>
      <th scope="row">{{$pelotao->id}}</th>
      <th scope="row">{{$pelotao->numeroPelotao}}</th>
      <th scope="row">{{$pelotao->nomePelotao}}</th>
      <th scope="row">{{$pelotao->comandante}}</th>
      <th scope="row">{{$companhia->name}}</th>
      <th>
        <a href="{{url("pelotao/$pelotao->id/edit")}}">
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
