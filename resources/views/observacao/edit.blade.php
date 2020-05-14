@extends('layouts.app')
@extends('layouts.menus')
@section('content')


<div class="container">
  <div class="col-md">

      {{ csrf_field() }}
      {{ method_field('PUT')}}
      <div class="form-group">
        <label for="name">{{$aluno->nome}}</label>
      </div>
      <div class="form-group">
        <label for="name" >{{$aluno->nomeDeGuerra}}</label>
      </div>
      <div class="form-group">
        <label for="name">{{$aluno->re}}</label>
      </div>
      @foreach($observ as $observs)
        <br>
        {{$observs->descricao}}
      @endforeach
      <br>
      <form class="" name="formEdit" id="formEdit" method="POST" action="{{url("observacaos/$aluno->id")}}">
        <textarea type="text" name="descricao" value=""></textarea>
        <input type="submit" class="btn" name="" value="Cadastrar">
      </form>
    </div>
  </div>
@endsection
