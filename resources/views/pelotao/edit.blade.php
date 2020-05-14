@extends('layouts.app')
@extends('layouts.menus')
@section('content')


<div class="container">
  <div class="col-md">
    <form class="" name="formEdit" id="formEdit" method="POST" action="{{url("pelotaos/$pelotao->id")}}">

      {{ csrf_field() }}
      {{ method_field('PUT')}}
      <div class="form-group">
        <label for="name">Numero do pelotao</label>
        <input type="text" name="numeroPelotao" id="numeroPelotao" value="{{$pelotao->numeroPelotao}}">
      </div>
      <div class="form-group">
        <label for="name">Nome do pelotao</label>
        <input type="text" name="nomePelotao" id="nomePelotao" value="{{$pelotao->nomePelotao}}">
      </div>
      <div class="form-group">
        <label for="name">Comandante</label>
        <input type="text" name="comandante" id="comandante" value="{{$pelotao->comandante}}">
      </div>
      <div class="form-group">
        <label for="name">Companhia</label>
        <select class="" name="id_companhia" id="id_companhia" required>
          @foreach($companhia as $companhias)
            <option value="{{$companhias->id}}">{{$companhias->name}}</option>
          @endforeach
        </select>
      </div>
      <input type="submit" class="btn" name="" value="Cadastrar">
      </form>
    </div>
  </div>
@endsection
