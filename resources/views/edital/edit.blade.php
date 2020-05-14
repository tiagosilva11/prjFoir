@extends('layouts.app')
@extends('layouts.menus')
@section('content')


<div class="container">
  <div class="col-md">
    <form class="" name="formEdit" id="formEdit" method="POST" action="{{url("editals/$edital->id")}}">

      {{ csrf_field() }}
      {{ method_field('PUT')}}
      <div class="form-group">
        <label for="name">Numero do edital</label>
        <input type="text" name="nomeEdital" id="nomeEdital" value="{{$edital->nomeEdital}}" required>
      </div>
      <input type="submit" class="btn" name="" value="Cadastrar">
      </form>
    </div>
  </div>
@endsection
